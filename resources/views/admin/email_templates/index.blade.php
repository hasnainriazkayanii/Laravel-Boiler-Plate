@extends('layouts.master')
@section('title', 'Email Templates');
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
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    {{ __('admin.menu.list') }}
                </div>
                <h2 class="page-title">
                    Email Templates
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <!-- <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-white">
                      New view
                    </a>
                  </span> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row row-deck row-cards">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                </div>
                <x-data-table
                        id="tbl_email_templates"
                        :route-name="route('admin.email.templates')"
                        server-side="true"
                        processing="true"
                        :columns="$columns">
                    </x-data-table>
              </div>
            </div>
          </div>
        </div>
@endsection
@push("page_script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>
  $(function(){
    loadDataTable(null);
  });
</script>
@endpush
