@extends('layouts.master')
@section('title',__('admin.menu.work_time_table'))
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
                           {{ __('admin.menu.work_time_table') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="settingTimeTableForm" name="settingTimeTableForm" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.settings.store') }}">
                            @csrf
                            <input type="hidden" name="slug" value="work-time-table"/>
                            <div class="row">
                                <h2>  {{ __('admin.forms.labels.time_table.monday') }} </h2>
                                <label><input value="monday" type="checkbox" {{ isset($data->monday) && $data->monday->from=="Off"?'checked':''}} class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="monday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }} </label>
                                        <input type="{{ isset($data->monday) && $data->monday->from=="Off"?'text':'time'}}"  {{ isset($data->monday) && $data->monday->from=="Off"?'readonly':''}} class="form-control" id="monday_from"  name="monday[from]"  value="{{ isset($data->monday)?$data->monday->from:''}}"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="monday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }} </label>
                                        <input type="{{ isset($data->monday) && $data->monday->to=="Off"?'text':'time'}}" {{ isset($data->monday) && $data->monday->to=="Off"?'readonly':''}} class="form-control" id="monday_to"  name="monday[to]" placeholder="" value="{{ isset($data->monday)?$data->monday->to:''}}"    required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2> {{ __('admin.forms.labels.time_table.tuesday') }}  </h2>
                                <label><input type="checkbox" value="tuesday" {{ isset($data->tuesday) && $data->tuesday->from=="Off"?'checked':''}} class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="tuesday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }}</label>
                                        <input type="{{ isset($data->tuesday) && $data->tuesday->from=="Off"?'text':'time'}}" {{ isset($data->tuesday) && $data->tuesday->from=="Off"?'readonly':''}} class="form-control" id="tuesday_from"  name="tuesday[from]"  value="{{ isset($data->tuesday)?$data->tuesday->from:''}}"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="tuesday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }}</label>
                                        <input type="{{ isset($data->tuesday) && $data->tuesday->to=="Off"?'text':'time'}}" {{ isset($data->tuesday) && $data->tuesday->to=="Off"?'readonly':''}} class="form-control" id="tuesday_to"  name="tuesday[to]" placeholder="" value="{{ isset($data->tuesday)?$data->tuesday->to:''}}"   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2> {{ __('admin.forms.labels.time_table.wednesday') }} </h2>
                                <label><input type="checkbox" value="wednesday" {{ isset($data->wednesday) && $data->wednesday->from=="Off"?'checked':''}} class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="wednesday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }}</label>
                                        <input type="{{ isset($data->wednesday) && $data->wednesday->from=="Off"?'text':'time'}}" {{ isset($data->wednesday) && $data->wednesday->from=="Off"?'readonly':''}} class="form-control" id="wednesday_from"  name="wednesday[from]"  value="{{ isset($data->wednesday)?$data->wednesday->from:''}}"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="wednesday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }}</label>
                                        <input type="{{ isset($data->wednesday) && $data->wednesday->to=="Off"?'text':'time'}}" {{ isset($data->wednesday) && $data->wednesday->to=="Off"?'readonly':'time'}} class="form-control" id="wednesday_to"  name="wednesday[to]" placeholder="" value="{{ isset($data->wednesday)?$data->wednesday->to:''}}"   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2> {{ __('admin.forms.labels.time_table.thursday') }} </h2>
                                <label><input type="checkbox" {{ isset($data->thursday) && $data->thursday->from=="Off"?'checked':''}} value="thursday" class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="thursday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }}</label>
                                        <input type="{{ isset($data->thursday) && $data->thursday->from=="Off"?'text':'time'}}" {{ isset($data->thursday) && $data->thursday->from=="Off"?'readonly':''}} class="form-control" id="thursday_from"  name="thursday[from]"  value="{{ isset($data->thursday)?$data->thursday->from:''}}"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="thursday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }}</label>
                                        <input type="{{ isset($data->thursday) && $data->thursday->to=="Off"?'text':'time'}}" {{ isset($data->thursday) && $data->thursday->to=="Off"?'readonly':''}} class="form-control" id="thursday_to"  name="thursday[to]" placeholder="" value="{{ isset($data->thursday)?$data->thursday->to:''}}"    required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2> {{ __('admin.forms.labels.time_table.friday') }} </h2>
                                <label><input type="checkbox" value="friday" {{ isset($data->friday) && $data->friday->from=="Off"?'checked':''}} class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="friday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }}</label>
                                        <input type="{{ isset($data->friday) && $data->friday->from=="Off"?'text':'time'}}" {{ isset($data->friday) && $data->friday->from=="Off"?'readonly':''}} type="time" class="form-control" id="friday_from"  name="friday[from]"  value="{{ isset($data->friday)?$data->friday->from:''}}"    required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="friday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }}</label>
                                        <input type="{{ isset($data->friday) && $data->friday->to=="Off"?'text':'time'}}" {{ isset($data->friday) && $data->friday->to=="Off"?'readonly':''}} class="form-control" id="friday_to"  name="friday[to]" placeholder=""  value="{{ isset($data->friday)?$data->friday->to:''}}"   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2> {{ __('admin.forms.labels.time_table.saturday') }} </h2>
                                <label><input type="checkbox" {{ isset($data->saturday) && $data->saturday->from=="Off"?'checked':''}} value="saturday" class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="saturday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }}</label>
                                        <input type="{{ isset($data->saturday) && $data->saturday->from=="Off"?'text':'time'}}" {{ isset($data->saturday) && $data->saturday->from=="Off"?'readonly':''}} class="form-control" id="saturday_from"  name="saturday[from]"   value="{{ isset($data->saturday)?$data->saturday->from:''}}"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="saturday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }}</label>
                                        <input type="{{ isset($data->saturday) && $data->saturday->to=="Off"?'text':'time'}}" {{ isset($data->saturday) && $data->saturday->to=="Off"?'readonly':''}} class="form-control" id="saturday_to"  name="saturday[to]" placeholder="" value="{{ isset($data->saturday)?$data->saturday->to:''}}"   required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2> {{ __('admin.forms.labels.time_table.sunday') }} </h2>
                                <label><input type="checkbox" value="sunday" {{ isset($data->sunday) && $data->sunday->from=="Off"?'checked':''}} class="cbk-off-day">Not Working</label>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="sunday_from" class="control-label">{{ __('admin.forms.labels.time_table.from') }}</label>
                                        <input type="{{ isset($data->sunday) && $data->sunday->from=="Off"?'text':'time'}}" {{ isset($data->sunday) && $data->sunday->from=="Off"?'readonly':''}} class="form-control" id="sunday_from"  name="sunday[from]"  value="{{ isset($data->sunday)?$data->sunday->from:''}}"   required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required mb-3">
                                        <label for="sunday_to" class="control-label">{{ __('admin.forms.labels.time_table.to') }}</label>
                                        <input type="{{ isset($data->sunday) && $data->sunday->to=="Off"?'text':'time'}}" {{ isset($data->sunday) && $data->sunday->to=="Off"?'readonly':''}}  class="form-control" id="sunday_to"  name="sunday[to]" placeholder="" value="{{ isset($data->sunday)?$data->sunday->to:''}}"   required="">
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
    $("#settingTimeTableForm").validate();
    $(".cbk-off-day").click(function(){


        var value=$(this).val();
        if($(this).is(":checked"))
        {
            console.log(value);
            var Fromvalue=value+'_from';
            var Tovalue=value+'_to';
            $("#"+Fromvalue).attr("type","text");
            $("#"+Tovalue).attr("type","text");
            $("#"+Fromvalue).val("Off")
            $("#"+Tovalue).val("Off");
            $("#"+Fromvalue).attr("readonly",true);
            $("#"+Tovalue).attr("readonly",true)
        }
        else{
            console.log(value);
            var Fromvalue=value+'_from';
            var Tovalue=value+'_to';
            $("#"+Fromvalue).val("")
            $("#"+Tovalue).val("");
            $("#"+Fromvalue).attr("type","time");
            $("#"+Tovalue).attr("type","time");
            $("#"+Fromvalue).removeAttr("readonly")
            $("#"+Tovalue).removeAttr("readonly")
        }
    })
  });
</script>
@endpush
