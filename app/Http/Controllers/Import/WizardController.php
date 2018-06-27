<?php

namespace App\Http\Controllers\Import;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Importer;
use App\CampaignData;
use App\Campaign;

class WizardController extends Controller
{
    protected $excel;

    public static $_SOURCE_MAP = [
        Importer::IMPORT_TYPE_FILE => 'fileSourcing',
        Importer::IMPORT_TYPE_ADWORDS => 'adwordsSourcing'
    ];
    
    public function __construct(\Maatwebsite\ExcelLight\Excel $excel){
        $this->middleware('auth');
        $this->excel = $excel;
    }

    public function index(){
        $campaignCount = \Auth::user()->campaigns()->count();
        return view('import/wizard/step_one', [
            'type' => [
                'ROI' => CampaignData::TYPE_ROI,
                'CPA' => CampaignData::TYPE_CPA
            ],
            'import_type' => [
                'FILE' => Importer::IMPORT_TYPE_FILE,
                'ADWORDS' => Importer::IMPORT_TYPE_ADWORDS
            ],
            'campaign_type' => [
                'NEW' => Importer::NEW_CAMPAIGN,
                'EXISTING' => Importer::EXISTING_CAMPAIGN
            ],
            'count' => $campaignCount
        ]);
    }

    public function sourcing(Request $req){
        $source = $req->input('source');
        if(isset(self::$_SOURCE_MAP[$source])){
            $method = self::$_SOURCE_MAP[$source];
            return call_user_func_array([$this, $method], [$req]);
        }else{
            abort(404);
        }
    }

    public function adwordsSourcing(Request $req){
        $type = $req->input('type');
        $campaignType = $req->input('campaign');
        $viewParams = [
            'type' => $type,
            'campaignType' => $campaignType
        ];
        if($campaignType == Importer::EXISTING_CAMPAIGN){
            $userCampaigns = \Auth::user()->campaigns();
            $viewParams['campaigns'] = $userCampaigns;
            if($userCampaigns->count() == 0){
                return redirect()->route('import');
            }
        }
        return view('import/wizard/step_two_adwords', $viewParams);
    }

    public function fileSourcing(Request $req){
        $type = $req->input('type');
        $campaignType = $req->input('campaign');
        $viewParams = [
            'type' => $type,
            'campaignType' => $campaignType
        ];
        if($campaignType == Importer::EXISTING_CAMPAIGN){
            $userCampaigns = \Auth::user()->campaigns();
            $viewParams['campaigns'] = $userCampaigns;
            if($userCampaigns->count() == 0){
                return redirect()->route('import');
            }
        }
        return view('import/wizard/step_two_file', $viewParams);
    }

    public function processFile(Request $req){
        $file = $req->has('file');
        $type = $req->input('type');
        if($file){
            $file = $req->file('file');
            $allowedExt = Importer::getAllowedExtensions();
            $fileExt = strtolower($file->getClientOriginalExtension());
            if(!in_array($fileExt, $allowedExt)){
                return redirect()->back()->withErrors(['extension_error', __('Invalid file')]);
            }
            $destinationPath = storage_path('import\\'.\Auth::user()->id);
            $file->move($destinationPath,$file->getClientOriginalName());
            $campaignRows = [];
            $this->excel->load($destinationPath."\\".$file->getClientOriginalName(), function(\Maatwebsite\ExcelLight\Reader $reader) use($type, $campaignRows){
                $reader->sheets(function (\Maatwebsite\ExcelLight\Sheet $sheet) use($type, $campaignRows) {
                    $sheet->firstRowAsHeading(true)->rows(function (\Maatwebsite\ExcelLight\Spout\Row $row) use(&$campaignRows) {
                        array_push($campaignRows, $row);
                    });
                    array_shift($campaignRows);//Remove headings
                   // try{
                        switch($type){
                            case CampaignData::TYPE_CPA:
                                Importer::importConversionCSV($campaignRows);
                                break;
                            case CampaignData::TYPE_ROI:
                                Importer::importRoiCSV($campaignRows);
                                break;
                        }
                   // }catch(\Illuminate\Database\QueryException $e){
                      //  \Log::debug($e);
                    //    return $e;
                   // }
                });
            });
            return redirect()->route('import', ['success' => 1]);
        }
        return redirect()->back()->withErrors(['extension_error', __('Invalid file')]);
    }

}
