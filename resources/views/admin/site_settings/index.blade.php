@extends('layouts.master')
@section('title',__('admin.menu.general_settings'))
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
                            {{ __('admin.menu.general_settings') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="settingForm" name="settingForm" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.settings.save') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="name" class="control-label">{{ __('admin.forms.labels.general_settings.company_name') }}</label>
                                        <input type="text" class="form-control" id="company_name"  name="company_name" placeholder="Enter Company Name" value="{{ $companyName}}"   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="company_email" class="control-label">{{ __('admin.forms.labels.general_settings.company_email') }}</label>
                                        <input type="email" class="form-control" id="company_email" name="company_email" placeholder="Email" value="{{ $companyEmail}}"    required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="company_phone" class="control-label">{{ __('admin.forms.labels.general_settings.company_phone') }}</label>
                                        <input type="text" class="form-control phone" id="company_phone" value="{{ $companyPhone}}"   name="company_phone" placeholder="Phone"    required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="company_city" class="control-label">{{ __('admin.forms.labels.general_settings.company_city') }}</label>
                                        <input type="text" class="form-control" id="company_city" value="{{ $companyCity}}" name="company_city" placeholder="City" value=""   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="company_state" class="control-label">{{ __('admin.forms.labels.general_settings.company_state') }}</label>
                                        <input type="text" class="form-control" id="company_state" value="{{ $companyState }}" name="company_state" placeholder="State" value=""   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="company_zip_code" class="control-label">{{ __('admin.forms.labels.general_settings.zip_code') }}</label>
                                        <input type="number"  class="form-control" id="company_zip_code" name="company_zip_code" placeholder="Zip Code" value="{{ $companyZip}}" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="company_address" class="control-label">{{ __('admin.forms.labels.general_settings.company_address') }}</label>
                                       <textarea class="form-control" name="company_address" id="company_address" required> {{ $companyAddress}}</textarea>
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
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js" integrity="sha512-SvgzybymTn9KvnNGu0HxXiGoNeOi0TTK7viiG0EGn2Qbeu/NFi3JdWrJs2JHiGA1Lph+dxiDv5F9gDlcgBzjfA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/addons/cleave-phone.us.js" integrity="sha512-yt6UjXOdthsnEg32r2xW8BrQCUMkpdztN97y/0ufgyxFptWuSu++k9hoGUWDGem8QDnDPcVVQsv9rnXrmNgbeA==" crossorigin="anonymous"></script>
 @endpush
 @push('page_script')
<script type="text/javascript">
    $(function() {
        $(".colorPicker").colorpicker();
        $("#settingForm").validate();

        var cleave = new Cleave('.phone', {
            phone: true,
            phoneRegionCode: 'US'
        });
    });
</script>
@endpush
