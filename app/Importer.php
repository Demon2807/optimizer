<?php

namespace App;
use App\Campaign;
use App\CampaignData;

class Importer extends AppModel
{
    
    const IMPORT_TYPE_FILE = 'file';
    const IMPORT_TYPE_ADWORDS = 'adwords';

    const NEW_CAMPAIGN = 'new';
    const EXISTING_CAMPAIGN = 'existing';

    public static function getAllowedExtensions(){
        $extensions = explode(", ", env('ALLOWED_IMPORT_EXTENSIONS', "csv, xlsx"));
        return $extensions;
    }

    public static function importConversionCSV($rows){
        $data = [];
        $prevName = null;
        $campaignTempName = 'Campaign_'.time();
        $campaign = null;
        foreach($rows as $row){
            $isMultiple = count($row->headings()) > 3;
            $cName = $isMultiple ? $row->Campaign : $campaignTempName;
            if($prevName != $cName){
                $campaign = Campaign::firstOrNew(['name' => $cName, 'user_id' => \Auth::user()->id]);
                $campaign->source = self::IMPORT_TYPE_FILE;
                $campaign->save();
            }
            array_push($data, [
                'type' => CampaignData::TYPE_CPA,
                'cost' => $row->Cost,
                'date' => $row->Day,
                'conversions' => $row->Conversions,
                'campaign_id' => $campaign->id,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            $prevName = $cName;
        }
        CampaignData::insert($data);
    }

    public static function importRoiCSV($rows){
        $data = [];
        $prevName = null;
        $campaignTempName = 'Campaign_'.time();
        $campaign = null;
        foreach($rows as $row){
            $isMultiple = count($row->headings()) > 3;
            $cName = $isMultiple ? $row->Campaign : $campaignTempName;
            if($prevName != $cName){
                $campaign = Campaign::firstOrNew(['name' => $cName, 'user_id' => \Auth::user()->id]);
                $campaign->source = self::IMPORT_TYPE_FILE;
                $campaign->save();
            }
            array_push($data, [
                'type' => CampaignData::TYPE_ROI,
                'cost' => $row->Cost,
                'date' => $row->Day,
                'roi' => $row->Revenue,
                'campaign_id' => $campaign->id,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            $prevName = $cName;
        }
        CampaignData::insert($data);
    }

}
