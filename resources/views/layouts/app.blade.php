<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ "E360 Station Analytics" }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!--jquery UI-->
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
  <!--jsmaps-->
  <link src="{{ asset('bower_components/AdminLTE/plugins/jsmaps/lg-map.css') }}">
  <!-- Date Picker -->
  {{--<link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/datepicker/datepicker3.css') }}"> --}}
  <!-- Daterange picker -->
{{--<link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">--}}
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- custom style -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- Header -->
{{--@include('layouts.header')--}}

  @include('analytics.overview.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  {{-- @include('layouts.sidebar') --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper container-fluid">
    <!-- Content Header (Page header) -->

    <!--<section class="content-header">
      <h1>

        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>-->

    <!-- Main content -->
    <section class="content">
      <!--Your page content-->
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!--jquery-1.12.4.js -->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!-- jQuery Cookie -->
<script src="{{ asset('bower_components/AdminLTE/plugins/jQueryCookie/jquery.cookie.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<!--<script src="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-usa-en.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-africa-mill.js') }}"></script>-->
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/AdminLTE/plugins/knob/jquery.knob.js') }}"></script>
<!-- jQuery Chart.js -->
<script src="{{ asset('bower_components/AdminLTE/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/chartjs/Chart.bundle.min.js') }}"></script>
<!-- masonry -->
<script src="{{ asset('bower_components/AdminLTE/plugins/masonry/masonry.pkgd.min.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/AdminLTE/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="{{ asset('bower_components/AdminLTE/dist/js/pages/dashboard.js') }}"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="{{ asset('bower_components/AdminLTE/dist/js/demo.js') }}"></script>-->

<script src="{{ asset('js/datepicker.js') }}"></script>
<script src="{{ asset('js/constants.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/replenishment_analytics.js') }}"></script>
<script src="{{ asset('js/today_analytics.js') }}"></script>
<script src="{{ asset('js/yesterday_analytics.js') }}"></script>
<script src="{{ asset('js/comparision_analytics.js') }}"></script>
<script src="{{ asset('js/bank_overview-charts.js') }}"></script>
<script src="{{ asset('js/combobox.js') }}"></script>
<script src="{{ asset('js/custom_charts (copy).js') }}"></script>
<!--<script src="{{ asset('js/login.js') }}"></script>-->

<!--jsmaps-->
<!--<script src="{{ asset('bower_components/AdminLTE/plugins/jsmaps/lg-map-libs.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jsmaps/lg-map-panzoom.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jsmaps/lg-map.min.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/jsmaps/nigeria.js') }}"></script>-->

{{--<script src="{{ asset('bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script> --}}

<!--<script src="{{ asset('js/dashboard.js') }}"></script>-->
<script>

  $(function () {
    $("input:checkbox").change(function(){
        $("input:checkbox[name='"+$(this).attr("name")+"']").not(this).prop("checked",false);
        //alert('checked');
    });
    //Initialize Select2 Elements
   /* $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    ); */

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('.grid').masonry({
      // options...
      //itemSelector: '.col-lg-4',
      //columnWidth: '.col-lg-4'
    });

    //iCheck for checkbox and radio inputs
    /*$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });*/
    
    $("i").on('click', function() {
      //if ($(this).hasClass('fa-plus')) {
        //console.log($(this));
        //$(this).toggle
        //$(this).append('fa-minus');
        console.log($(this));
        //$("i").addClass('fa-minus').show($(this));
        //console.log($(this));
      //};
    })

    //Bank Overview
    /**
    $.ajax({
      headers: {
        'Authorization': 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOm51bGwsImlzcyI6Imh0dHA6Ly9hbmFseXRpY3MtYXBpLmVuZXJneTM2MGFmcmljYS5jb20vYXBpL3YxL2F1dGgiLCJpYXQiOjE1MDkwMzUzODIsImV4cCI6MTUwOTAzODk4MiwibmJmIjoxNTA5MDM1MzgyLCJqdGkiOiJCTDhvNUZYWjBYWG11YjhvIn0.wDExkXpNDeZyUmdzSHIoXt5Xk5bksiwwy1uIykVcvzw',
        'Content-Type': 'application/json',
      },
      url: 'http://analytics-api.energy360africa.com/api/v1/cash/3EF5E29B-3D07-4FF3-84A9-A1D69CDE8E9F',
      method: 'GET',
    }).done(function(result) {
      //console.log(result);
    });*/
    //Days With Outstanding Payments

    //Incomplete Bank Deposits


  });
</script>
</body>
</html>
