<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>  @yield('title') - Tunning Site</title>
    <!-- CSS files -->
    <link href="{{  asset('assets/common/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/common/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/common/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/common/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/common/css/demo.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/admin/plugins/font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css"rel="stylesheet" />
    <style>
        label.error{
            color:red;
        }
        .select2{
            width:100% !important;
        }
        .messages .my {
        float: right;
        background-color: #12A5F4;
    }
    button.close{
        float:right;
    }
    .message {
        padding: 10px 10px 5px;
        border: 1px solid #ccc;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    }
    .message {
        border: 1px solid black;
        border-radius: 5px;
        padding: 5px 5px 0px 5px;
        margin: 5px;
        position: relative;
        color: black;
    }
    .messages {
    margin-bottom: 15px;
    border-radius: 0;
    border: 1px solid #ccc;
}
.messages {
    overflow-y: auto;
    height: 350px;
    border-radius: 10px;
    border: 1px solid black;
}
.messages .other {
    background-color: rgba(169, 169, 169, .2);
}
.messages .other {
    float: left;
    background-color: darkgrey;
}
    table {
        border-collapse: collapse;
        border-spacing: 0;
        background-color:#ffffff;
        font-family: 'ProximaNova', sans-serif;
        font-size: 13px;
        font-weight: 400;
        line-height: 1.471;
        box-sizing: border-box;
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;

    }

          th, td {
            text-align: left;
            padding: 16px;
          }

          tr:nth-child(odd) {
            background-color: #f2f2f2;
          }
          .mceEditor td.mceIframeContainer iframe {
    min-height: 350px !important;
}
.mceEditor table {
    height: auto !important;
}
.tox-notifications-container{
    display: none !important;
}
.btnAlertClose{
    float:right;
}
     </style>
    @stack('additional_css')
</head>
<body class="antialiased">
    <div class="page">
        @include('admin.includes.header')
        @include('admin..includes.navbar')
        @yield('content')
        @include('admin.includes.footer')
        @stack('modals')
        <script src="{{ asset('assets/common/js/tabler.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
          <script src="{{asset('assets/common/js/custom.js')}}"></script>
        @stack('scripts')
        @stack('page_script')
    </div>
  </body>
</html>
