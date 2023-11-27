@extends('layouts.master')
@section('title', __('app.labels.roles'))
@section('heading', __('app.labels.roles'))
@section('breadcrumb', __('app.labels.roles'))

@section('content')
<section class="content">
    <div class="container-fluid">
        @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block text-success">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>

        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block text-success">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>

        </div>
        @endif
        <!-- Default box -->
        <form id="roleForm" name="roleForm" action="{{ route('admin.roles.save') }}"
            autocomplete="off" method="POST" class="form-horizontal">
            @csrf
            <input type="hidden" name="role_id" id="role_id" value="{{ $role->id }}">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="name"
                            class="col-sm-6 control-label">{{ __('admin.forms.labels.roles.name') }}</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                value="{{ $role->name }}" maxlength="100" required="">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">

                                    <label class="control-label float-right">
                                        <input type="checkbox" id="parent" name="parent" />
                                        Select All
                                    </label>
                                </div>
                                <div class="card-body permission-box">
                                    @foreach($modules as $module)
                                        @if(count($module->get_permissions($type)) > 0 )
                                            <b> {{ $module->name }} </b>
                                            <div class="row">
                                                @foreach($module->get_permissions($type) as $value)
                                                    <label class="col-md-4">
                                                        <input type="checkbox" id="permission[]" name="permission[]"
                                                            value="{{ $value->id }}"
                                                            {{ ($role->hasPermissionTo($value->name) ? 'checked' : '' ) }} />
                                                        {{ ucwords($value->name) }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" id="btn-save"
                        value="create">{{ __('admin.buttons.save_changes') }}</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
</section>
@endsection

@push('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script type="text/javascript">
        $(function () {

            $("#roleForm").validate();
            $("#parent").click(function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        });

    </script>
@endpush
