<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{ asset('assets/admin/js/require.min.js') }}"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
       <script>
            var url="{{ asset('assets/admin/js/') }}";
        </script>
    <!-- Dashboard Core -->
    <link href="{{ asset('assets/admin/css/dashboard.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('assets/admin/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/admin/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <link href="{{ asset('assets/admin/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/admin/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ asset('assets/admin/plugins/input-mask/plugin.js') }}"></script>
    <style>
        .text-red-600{
            color:red;
        }
    </style>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    <img src="./assets/brand/tabler.svg" class="h-6" alt="">
                </div>
                @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                    </div>
                @endif

              <form class="card" method="POST" action="{{ route('admin.login') }}">
                  <x-auth-session-status class="mb-4 ml-2" :status="session('status')" />

    <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 ml-2" :errors="$errors" />

                     @csrf
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" required aria-describedby="emailHelp" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Password
                      <a href="./forgot-password.html" class="float-right small">I forgot password</a>
                    </label>
                    <input type="password"  id="password" name="password" required class="form-control"  placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input id="remember_me" name="remember" type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
