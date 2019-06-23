<!doctype html> 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dekom</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{!! asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('assets/bower_components/font-awesome/css/font-awesome.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('assets/bower_components/Ionicons/css/ionicons.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('assets/dist/css/AdminLTE.min.css') !!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!! asset('assets/dist/css/skins/_all-skins.min.css') !!}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{!! asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{!! asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- DataTables -->
    <link rel="stylesheet" href="{!! asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">
    <style>
        .ui-period-calendar {
             display: none;
            }
    </style>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="content-wrapper">
        @include('includes.header')
        <div id="sidebar"  >
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" >
            @yield('content')
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{!! asset('assets/bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{!! asset('assets/bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{!! asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <!-- Sparkline -->
    <script src="{!! asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}"></script>
    <!-- jvectormap -->
    <script src="{!! asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
    <script src="{!! asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{!! asset('assets/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}"></script>
    <!-- daterangepicker -->
    <script src="{!! asset('assets/bower_components/moment/min/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
    <!-- datepicker -->
    <script src="{!! asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{!! asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
    <!-- Slimscroll -->
    <script src="{!! asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>
    <!-- FastClick -->
    <script src="{!! asset('assets/bower_components/fastclick/lib/fastclick.js') !!}"></script>
    <!-- AdminLTE App -->
    <script src="{!! asset('assets/dist/js/adminlte.min.js') !!}"></script>
    <!-- DataTables -->
    <script src="{!! asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>

    <script>
        $( function() {
            $( "#datepicker1" ).datepicker();
        });
    </script>

    <script>
        $( function() {
            $( "#datepicker2" ).datepicker();
        });
    </script>

    <script type="text/javascript">
        $(function () {
            $('#example1').DataTable()
        })
    </script>

    <script type="text/javascript">
        function isi_otomatis(){
            var nim = $("#id").val();
            $.ajax({
                url: '{{ route('pilih_ap') }}',
                data:"id="+id ,
            }).success(function (data) {
                var json = data,
                obj = JSON.parse(json);
                $('#tempat').val(obj.tempat);
            });
        }
    </script>
</body>
</html>