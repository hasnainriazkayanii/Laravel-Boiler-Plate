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
        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 35px !important;
            user-select: none;
            -webkit-user-select: none;
        }
        button.close{
            float:right;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 11px;
            padding-right: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding-top: 3px !important;
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
          .messages .my {
    background-color: rgba(18, 165, 244, 0.1);
}
    .messages .my {
        float: right;
        background-color: #12A5F4;
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
[type=.btnaction]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), .btnaction:not(:disabled) {
    cursor: pointer;
}
.btnAction {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
}
.btnAction {
    display: inline-block;
    font-weight: 500;
    line-height: 1.4285714;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    padding: 0.5rem 0.5em;
    font-size: .875rem;
    border-radius: 3px;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
[type=button], [type=reset], [type=submit], .btnAction {
    -webkit-appearance: button;
}
.btnAction, {
    text-transform: none;
}
.btnAction {
    margin: 1px;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.btnAction {
    border-radius: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}
    </style>
    @stack('additional_css')
</head>
<body class="antialiased">
    <div class="page">
        @include('client.includes.header')
        @include('client.includes.navbar')
        @yield('content')
        @include('client.includes.footer')
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
