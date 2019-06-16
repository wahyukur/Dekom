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
        //Date picker
        $('#datepicker').datepicker({
        autoclose: true
        })

        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
    <!-- fullCalendar -->
    <script src="{{url('assets/bower_components/moment/moment.js')}}"></script>
    <script src="{{url('assets/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {

            /* initialize the external events
            -----------------------------------------------------------------*/
            function init_events(ele) {
            ele.each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                zIndex        : 1070,
                revert        : true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
                })

            })
            }

            init_events($('#external-events div.external-event'))

            /* initialize the calendar
            -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d    = date.getDate(),
                m    = date.getMonth(),
                y    = date.getFullYear()
            $('#calendar').fullCalendar({
            header    : {
                left  : 'prev,next today',
                center: 'title',
                right : 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                today: 'today',
                month: 'month',
                week : 'week',
                day  : 'day'
            },
            //Random default events
            events    : [
                {
                title          : 'All Day Event',
                start          : new Date(y, m, 1),
                backgroundColor: '#f56954', //red
                borderColor    : '#f56954' //red
                },
                {
                title          : 'Long Event',
                start          : new Date(y, m, d - 5),
                end            : new Date(y, m, d - 2),
                backgroundColor: '#f39c12', //yellow
                borderColor    : '#f39c12' //yellow
                },
                {
                title          : 'Meeting',
                start          : new Date(y, m, d, 10, 30),
                allDay         : false,
                backgroundColor: '#0073b7', //Blue
                borderColor    : '#0073b7' //Blue
                },
                {
                title          : 'Lunch',
                start          : new Date(y, m, d, 12, 0),
                end            : new Date(y, m, d, 14, 0),
                allDay         : false,
                backgroundColor: '#00c0ef', //Info (aqua)
                borderColor    : '#00c0ef' //Info (aqua)
                },
                {
                title          : 'Birthday Party',
                start          : new Date(y, m, d + 1, 19, 0),
                end            : new Date(y, m, d + 1, 22, 30),
                allDay         : false,
                backgroundColor: '#00a65a', //Success (green)
                borderColor    : '#00a65a' //Success (green)
                },
                {
                title          : 'Click for Google',
                start          : new Date(y, m, 28),
                end            : new Date(y, m, 29),
                url            : 'http://google.com/',
                backgroundColor: '#3c8dbc', //Primary (light-blue)
                borderColor    : '#3c8dbc' //Primary (light-blue)
                }
            ],
            editable  : true,
            droppable : true, // this allows things to be dropped onto the calendar !!!
            drop      : function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject')

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject)

                // assign it the date that was reported
                copiedEventObject.start           = date
                copiedEventObject.allDay          = allDay
                copiedEventObject.backgroundColor = $(this).css('background-color')
                copiedEventObject.borderColor     = $(this).css('border-color')

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove()
                }

            }
            })

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            //Save color
            currColor = $(this).css('color')
            //Add color effect to button
            $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
            })
            $('#add-new-event').click(function (e) {
            e.preventDefault()
            //Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            //Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color'    : currColor,
                'color'           : '#fff'
            }).addClass('external-event')
            event.html(val)
            $('#external-events').prepend(event)

            //Add draggable funtionality
            init_events(event)

            //Remove event from text input
            $('#new-event').val('')
            })
            
            
        })
    </script>

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
</body>
</html>