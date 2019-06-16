<!doctype html>
<html>
<style>
    .progress-bar-purple {
        background-color: green !important;
        }
    .progress-bar-orange {
        background-color: red !important;
        }
        
</style>
<head>
    @include('includes.head')
</head>
<body>
<div class="container-fluid">

    <header class="row" style=" ">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-2" style="">
            <div>
                @include('includes.sidebar')
            </div>
        </div>

        <!-- main content -->
        <div id="content" class="col-md-10">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });

        $(function() { 
        $("#one").addClass("progress-bar-purple");
        $("#two").addClass("progress-bar-orange");
});
    </script>
</div>
</body>
</html>