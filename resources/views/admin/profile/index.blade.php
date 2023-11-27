@extends('layouts.master')
@section('title',__('admin.menu.profile'))
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="page-title">
                            {{ __('admin.forms.titles.profile.user_profile') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form method="post" action="{{  route('admin.profile.save') }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}"/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group required mb-3">
                                        <label  class="control-label" for="name"> {{ __('admin.forms.labels.profile.full_name') }}</label>
                                        <input class="form-control" name="name" required id="name" value="{{ $user->name }}"/>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group required mb-3">
                                        <label  class="control-label" for="email">{{ __('admin.forms.labels.profile.email') }}</label>
                                        <input class="form-control" required name="email" type="email" id="email" value="{{ $user->email }}"/>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label  class="control-label" for="password">{{ __('admin.forms.labels.profile.password') }}</label>
                                        <input class="form-control"  name="password" type="password" id="password"/>
                                        <span><small>Leave empty if dont want to change password</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">{{ __('admin.buttons.cancel') }}</a>
                                    <button type="submit" class="btn btn-primary">{{ __('admin.buttons.update_profile') }}</button>
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
