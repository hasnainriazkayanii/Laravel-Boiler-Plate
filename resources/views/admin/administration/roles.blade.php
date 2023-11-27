@extends('layouts.master')
@section('title',__('admin.menu.roles'))
@section('content')
<div class="container-fluid">
    @if($message = Session::get('status'))
        <div class="alert alert-success alert-block text-success">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>

        </div>
    @endif
    @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block text-success">
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
                    {{ __('admin.menu.roles') }}
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
                    <a href="{{ route('admin.roles.create') }}"
                        class="btn btn-primary d-none d-sm-inline-block" id="btn-new-role">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        {{ __('admin.buttons.add_new') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <x-data-table id="tbl_roles" :route-name="route('admin.roles')" server-side="true" processing="true"
                    :columns="$columns">
                </x-data-table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script type="text/javascript">
        $(function () {
            loadDataTable(null);
            $('body').on('click', '.delete-role', function () {
                var role_id = $(this).data("id");
                if (confirm("Are You sure want to delete !")) {
                    $.ajax({
                        type: "get",
                        url: "roles/delete/" + role_id,
                        success: function (data) {
                            var oTable = $('#laravel_datatable').dataTable();
                            oTable.fnDraw(false);
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });

        });

    </script>
@endpush
