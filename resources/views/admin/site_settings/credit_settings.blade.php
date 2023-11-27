@extends('layouts.master')
@section('title',__('admin.menu.credit_configuration'))
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
                           {{ __('admin.menu.credit_configuration') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="settingCreditConfigForm" name="settingCreditConfigForm" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.settings.store') }}">
                            @csrf
                            <input type="hidden" name="slug" value="credit-configs"/>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="name" class="control-label">{{ __('admin.forms.labels.credit_settings.name') }}</label>
                                        <input value="{{ isset($data->name)?$data->name:'' }}" type="text" class="form-control" id="name"  name="name" placeholder=""   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="symbol" class="control-label">{{ __('admin.forms.labels.credit_settings.symbol') }}</label>
                                        <input value="{{ isset($data->symbol)?$data->symbol:'' }}" type="text" class="form-control" id="symbol"  name="symbol" placeholder=""   required="">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="default_credit_price" class="control-label">{{ __('admin.forms.labels.credit_settings.rate') }}  (€) </label>
                                        <input type="text" value="{{ isset($data->default_credit_price)?$data->default_credit_price:'' }}" name="default_credit_price" id="default_credit_price" class="form-control" required="required"/>
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
    $("#settingCreditConfigForm").validate();
  });
</script>
@endpush
