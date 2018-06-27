@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Import Data - Step 2') }}</div>
                <div class="card-body">
                    <form action="{{route('import_file')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="alert alert-warning">
                                @switch($type)
                                    @case(App\CampaignData::TYPE_ROI)
                                        Only <strong>CSV</strong> and <strong>XLSX</strong> files are supported.<br>
                                        Header is <u>optional</u>. All <u>non-empty</u> sheets will be processed.<br>
                                        The first <strong>3</strong> columns for files containing <strong>1 campaign</strong> must be:<br> <span class="bg_cols">Day | Cost | Revenue</span> - in this order. <a href="/doc/Revenue_for_a_single_campaign.xlsx" class="example_file">Example</a><br>
                                        The first <strong>4</strong> columns for files containing <strong>several campaigns</strong> must be:<br> <span class="bg_cols">Day | Campaign Name | Cost | Revenue</span> - in this order. <a href="/doc/Revenue_for_several_campaigns.xlsx" class="example_file">Example</a><br>
                                    @break
                                    @case(App\CampaignData::TYPE_CPA)
                                        Only <strong>CSV</strong> and <strong>XLSX</strong> files are supported.<br>
                                        Header is <u>optional</u>. All <u>non-empty</u> sheets will be processed.<br>
                                        The first <strong>3</strong> columns for files containing <strong>1 campaign</strong> must be:<br> <span class="bg_cols">Day | Cost | Conversions</span> - in this order. <a href="/doc/Conversions_for_a_single_campaign.xlsx" class="example_file">Example</a><br>
                                        The first <strong>4</strong> columns for files containing <strong>several campaigns</strong> must be:<br> <span class="bg_cols">Day | Campaign Name | Cost | Conversions</span> - in this order. <a href="/doc/Conversions_for_several_campaigns.xlsx" class="example_file">Example</a><br>
                                    @break
                                @endswitch
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control" {{$campaignType == App\Importer::NEW_CAMPAIGN ? 'multiple' : ''}}>
                        </div>
                        <input type="hidden" value="{{$campaignType}}" name="campaign_type" />
                        <input type="hidden" value="{{$type}}" name="type" />
                        <div class="pull-right">
                            <button class="btn btn-primary">{{ __('Next') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
