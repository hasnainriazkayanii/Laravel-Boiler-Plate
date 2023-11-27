@extends('layouts.master')
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
                      Admin
                  </div>
                  <h2 class="page-title">
                     Dashboard
                  </h2>
              </div>
              <!-- Page title actions -->
          </div>
      </div>
      <div class="row row-deck row-cards">
          <div class="col-sm-6 col-lg-3">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="subheader">Total Orders</div>
                          <div class="ms-auto lh-1">
                            Last 7 days
                         </div>
                      </div>
                      <div class="h1 mb-3">0</div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="subheader">Completed Orders</div>
                        <div class="ms-auto lh-1">
                            Last 7 days
                         </div>
                    </div>
                    <div class="h1 mb-3">0</div>
                </div>
            </div>
        </div>
          <div class="col-sm-6 col-lg-3">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="subheader">Revenue</div>
                          <div class="ms-auto lh-1">
                            Last 7 days
                         </div>
                      </div>
                      <div class="d-flex align-items-baseline">
                          <div class="h1 mb-0 me-2">0</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-lg-3">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex align-items-center">
                          <div class="subheader">Clients</div>
                          <div class="ms-auto lh-1">
                             Last 7 days
                          </div>
                      </div>
                      <div class="d-flex align-items-baseline">
                          <div class="h1 mb-3 me-2">0</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
