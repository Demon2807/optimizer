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
                        <h1>Please configure your developer token</h1>
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
