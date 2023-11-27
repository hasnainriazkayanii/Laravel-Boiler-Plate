@extends('layouts.master')
@section('title',__('admin.menu.email_configuration'))
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
                            {{ __('admin.menu.email_configuration') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="settingEmailConfigForm" name="settingEmailConfigForm" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.settings.store') }}">
                            @csrf
                            <input type="hidden" name="slug" value="email-configs"/>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="mailer" class="control-label"> {{ __('admin.forms.labels.email_settings.mailer') }}</label>
                                        <select name="mailer" id="mailer" required="required" class="form-select select">
                                            <option value="">Select Mailer</option>
                                            <option {{ isset($data->mailer) && $data->mailer=='smtp'?'selected':''}} value="smtp">SMTP</option>
                                            <option {{ isset($data->mailer) && $data->mailer=='mail'?'selected':''}} value="mail">Mail</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="encryption" class="control-label"> {{ __('admin.forms.labels.email_settings.encryption') }}</label>
                                        <select name="encryption" id="encryption" required="required" class="form-select select">
                                            <option value="">Select Encryption</option>
                                            <option {{ isset($data->encryption) && $data->encryption=='ssl'?'selected':''}} value="ssl">SSL</option>
                                            <option {{ isset($data->encryption) && $data->encryption=='tls'?'selected':''}} value="tls">TLS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="smtp_host" class="control-label">{{ __('admin.forms.labels.email_settings.smtp_host') }}</label>
                                        <input value="{{ isset($data->smtp_host)?$data->smtp_host:'' }}" type="text" class="form-control" id="smtp_host"  name="smtp_host" placeholder="smtp.example.com"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="port" class="control-label">{{ __('admin.forms.labels.email_settings.port') }}</label>
                                        <input type="number" value="{{ isset($data->port)?$data->port:'' }}" name="port" id="port" class="form-control" required="required"/>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="user_name" class="control-label">{{ __('admin.forms.labels.email_settings.user_name') }}</label>
                                        <input value="{{ isset($data->user_name)?$data->user_name:'' }}" type="text" class="form-control" id="user_name"  name="user_name" placeholder="smtp@example.com"    required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="password" class="control-label">{{ __('admin.forms.labels.email_settings.password') }}</label>
                                        <input value="{{ isset($data->password)?$data->password:'' }}" type="password" name="password" id="password" class="form-control" required="required"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="sender_name" class="control-label">{{ __('admin.forms.labels.email_settings.sender_name') }}</label>
                                        <input value="{{ isset($data->sender_name)?$data->sender_name:'' }}" type="text" class="form-control" id="sender_name"  name="sender_name" placeholder="Send Name"    required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="sender_email" class="control-label">{{ __('admin.forms.labels.email_settings.sender_email') }}</label>
                                        <input value="{{ isset($data->sender_name)?$data->sender_name:'' }}" type="email" class="form-control" id="sender_email"  name="sender_email" placeholder="Sender Email"    required="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div>
                                    <a  href=" {{ route('admin.dashboard') }}" class="btn btn-danger">
                                        {{ __('admin.buttons.cancel') }}
                                    </a>
                                    <input type="submit" value="{{ __('admin.buttons.save_changes') }}" class="btn btn-primary"/>
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
    $("#settingEmailConfigForm").validate();
  });
</script>
@endpush
