<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ url('assets/css/daterangepicker.css') }}" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
        <link rel="stylesheet" href="{{ url('assets/vendor/jquery/jquery-ui.css') }}">
        <script src="{{ url('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
        <script src="{{ url('assets/vendor/datatable/datatables.min.js') }}"></script>
        <script src="{{ url('assets/js/moment.min.js') }}" ></script>
        <script type="text/javascript" src="{{ url('assets/js/daterangepicker.js') }}"></script>
    </head>
    <body>
        <div id="page" class="d-flex flex-column">
            <div id="app"></div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('assets/sortable/main.js') }}"></script>
    </body>
</html>