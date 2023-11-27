@extends('layouts.master')
@section('title',__('admin.menu.email_templates'))
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
                            {{ __('admin.menu.email_templates') }}
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="settingEmailTemplateForm" name="settingEmailTemplateForm" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.settings.email.store') }}">
                            @csrf
                            <input type="hidden" name="slug" value="{{$slug}}"/>


                                        <textarea name="description" rows="50" cols="40" class="form-control tinymce-editor">{{$data}}</textarea>


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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  $(function(){
    $("#settingEmailTemplateForm").validate();
    tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 500,
            menubar: true,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
        console.log($('body').find('.tox-notification').length);
        $('body').find(".tox-notifications-container").remove();
  });
</script>
@endpush
