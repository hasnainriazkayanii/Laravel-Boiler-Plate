@extends('layouts.master')
@section('title','Email Templates')
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
                            Email Templates
                        </h2>
                    </div>
                    <div class="card-body border-bottom py-3">
                        <form id="EditTemplate" name="EditTemplate" autocomplete="off" class="form-horizontal" method="POST" action="{{ route('admin.email.templates.save') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $template->id }}"/>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label  class="control-label">Name</label>
                                        <input  disabled  readonly value="{{ $template->name}}" type="text" class="form-control"/>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group required mb-3">
                                        <label for="subject" class="control-label">Subject</label>
                                        <input type="text" value="{{ $template->subject}}" name="subject" id="subject" class="form-control" required="required"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label  class="control-label">Tags</label>
                                    <p>{{$template->tags}}</p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group required mb-3">

                                        <textarea id="content" name="content" class="form-control tinymce-editor">{{$template->content}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <div>
                                    <a  href=" {{ route('admin.email.templates') }}" class="btn btn-danger">
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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  $(function(){
    $("#EditTemplate").validate();
    tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 500,
            menubar: false,
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
  });
</script>
@endpush
