@extends('layouts.master')

@section('title',__('admin.menu.users'))
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
                    {{ __('admin.menu.users') }}
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
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" id="btn-new-user">
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
                <x-data-table id="tbl_staff" :route-name="route('admin.users')" server-side="true" processing="true"
                    :columns="$columns">
                </x-data-table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('modals')
    <div class="modal fade" id="ajax-user-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="userForm" name="userForm" autocomplete="off" class="form-horizontal">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title" id="userCrudModal"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="user_id">
                        <div class="form-group mb-3">
                            <label for="name"
                                class="col-sm-6 control-label">{{ __('admin.forms.labels.users.name') }}</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                    value="" maxlength="100" required="">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label
                                class="col-sm-2 control-label">{{ __('admin.forms.labels.users.role') }}</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="role" name="role" required="">
                                    <option value="">Select</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"
                                class="col-sm-6 control-label">{{ __('admin.forms.labels.users.email') }}</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email" value="" maxlength="100" required="">
                            </div>
                        </div>
						<div class="form-group mb-3">
                            <label  id="lbl-password" for="password"
                                class="col-sm-6 control-label">{{ __('admin.forms.labels.users.password') }}</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="password" name="password"
                                     value="" minlength="6" maxlength="100" required="">
								<small id="pasnote">Leave empty if does not want to update</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-danger link-secondary" data-bs-dismiss="modal">
                            {{ __('admin.buttons.cancel') }}
                        </a>
                        <button type="submit" class="btn btn-primary" id="btn-save"
                            value="create">{{ __('admin.buttons.save_changes') }}</button>
                    </div>
                </form>
            </div>
        </div>
@endpush

@push('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script type="text/javascript">
        $(function () {

            loadDataTable(null);
            $("#btn-new-user").on("click", function () {
                $('#btn-save').val("create-user");
                $('#user_id').val('');
                $('#userForm').trigger("reset");
                $('#userCrudModal').html("Add New User");
				$("#pasnote").addClass("d-none");
			$("#password").attr("required","required");
			$("#password").attr("minlength",'6');
                $('#ajax-user-modal').modal('show');
            })

            $('body').on('click', '.edit-user', function () {
                var user_id = $(this).data('id');
                $.get('/admin/users/' + user_id + '/edit', function (data) {
                    $('#name-error').hide();
                    $('#email-error').hide();
                    $('#role-error').hide();
                    $('#userCrudModal').html("Edit User");
                    $('#btn-save').val("edit-user");
                    $('#ajax-user-modal').modal('show');
                    $('#role').val(data.roles[0].name);
                    $('#user_id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
					$("#pasnote").removeClass('d-none');
					$("#password").removeAttr("required");
					$("#password").removeAttr("minlength");

                })
            });

            $('body').on('click', '.delete-user', function () {
                var user_id = $(this).data("id");
                if (confirm("Are You sure want to delete !")) {
                    $.ajax({
                        type: "get",
                        url: "/admin/users/delete/" + user_id,
                        success: function (data) {
                            var oTable = $('#tbl_staff').dataTable();
                            oTable.fnDraw(false);
                        },
                        error: function (data) {
                            showError("There is some error");
                        }
                    });
                }
            });



            $("#userForm").validate({

                submitHandler: function (form, e) {
                    e.preventDefault();
                    $('#btn-save').html('Sending..');
                    $.ajax({
                        data: $('#userForm').serialize(),
                        url: "{{ route ('admin.users.save') }}",
                        type: "POST",
                        dataType: 'json',
                        success: function (data) {
                            $('#userForm').trigger("reset");
                            $('#ajax-user-modal').modal('hide');
                            $('#btn-save').html('Save Changes');
                            var oTable = $('#tbl_staff').dataTable();
                            oTable.fnDraw(false);
                        },
                        error: function (data) {
                            console.log('Error:', data);
                            $('#btn-save').html('Save Changes');
                        }
                    });
                }
            })
        });

    </script>
@endpush
