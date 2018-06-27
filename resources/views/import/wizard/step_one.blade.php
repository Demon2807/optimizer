@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Import Data - Step 1') }}</div>

                <div class="card-body">
                    <form action="{{ route('import_step_two') }}">
                        <div class="form-group">
                            <label for="source">{{ __('Source') }}</label>
                            <select name="source" class="form-control">
                                <option value="{{$import_type['FILE']}}">{{ __('CSV or XLSX') }}</option>
                                <option value="{{$import_type['ADWORDS']}}">{{ __('Adwords') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">{{ __('Data type') }}</label>
                            <select class="form-control" name="type">
                                <option value="{{$type['CPA']}}">{{ __('Conversion') }}</option>
                                <option value="{{$type['ROI']}}">{{ __('Revenue') }}</option>
                            </select>
                        </div>
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
