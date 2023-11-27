@extends('layouts.master')
@section('title',__('admin.menu.paypal_configuration'))
@section('content')
    <div class="container-fluid">     @if ($message = Session::get('status'))
    <div class="alert alert-success alert-block text-success">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert">×</button>

    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block text-danger">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert">×</button>

    </div>
@endif
          <!-- Page title -->
        <div class="row row-deck row-cards">
            @include('admin.partials.settings_menu')
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h2 class="page-title">
                           {{ __('admin.menu.paypal_configuration') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="settingPaypalConfigForm" name="settingPaypalConfigForm" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.settings.store') }}">
                            @csrf
                            <input type="hidden" name="slug" value="paypal-configs"/>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="mode" class="control-label">{{ __('admin.forms.labels.paypal_settings.mode') }}</label>
                                        <select name="mode" id="mode" required="required" class="form-select select">
                                            <option value="">Select Mode</option>
                                            <option {{ isset($data->mode) && $data->mode=='sandbox'?'selected':''}} value="sandbox">Sandbox</option>
                                            <option {{ isset($data->mode) && $data->mode=='live'?'selected':''}} value="live">Live</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="client_id" class="control-label">{{ __('admin.forms.labels.paypal_settings.client_id') }}</label>
                                        <input value="{{ isset($data->client_id)?$data->client_id:'' }}" type="text" class="form-control" id="client_id"  name="client_id" placeholder=""   required="">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="client_secret" class="control-label">{{ __('admin.forms.labels.paypal_settings.client_secret') }}</label>
                                        <input type="text" value="{{ isset($data->client_secret)?$data->client_secret:'' }}" name="client_secret" id="client_secret" class="form-control" required="required"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="app_id" class="control-label">{{ __('admin.forms.labels.paypal_settings.app_id') }}</label>
                                        <input type="text" value="{{ isset($data->app_id)?$data->app_id:'' }}" name="app_id" id="app_id" class="form-control" required="required"/>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <div>
                                    <a  href=" {{ route('admin.dashboard') }}" class="btn btn-danger">
                                        {{ __('admin.buttons.cancel') }}
                                    </a>
                                    <input type="submit" value=" {{ __('admin.buttons.save_changes') }}" class="btn btn-primary"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("page_script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>
  $(function(){
    $("#settingPaypalConfigForm").validate();
  });
</script>
@endpush
