<!DOCTYPE html>

<html lang="en">

    <head>    
            <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
            <meta charset="utf-8" />
            <title>Pages - @yield('title')</title>

            <meta name="csrf-token" content="{{ csrf_token() }}">    
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
            <link rel="apple-touch-icon" href="pages/ico/60.png">
            <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
            <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
            <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-touch-fullscreen" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="default">
            <meta content="" name="description" />
            <meta content="" name="author" />

            <script>
                window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
                ]); ?>
            </script>

            
            @stack('css')

            <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
            <link href="{{ asset('manager/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css">  
            <link href="{{ asset('manager/assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" >
            <link href="{{ asset('manager/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" >
            <link href="{{ asset('manager/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" >
            <link href="{{ asset('manager/assets/plugins/select2/css/select2.css') }}" rel="stylesheet" type="text/css" media="screen" />
            <link href="{{ asset('manager/assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" >        
            <link href="{{ asset('manager/assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
            <link href="{{ asset('manager/assets/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css" media="screen" />
            <link href="{{ asset('manager/assets/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css">    
            <link href="{{ asset('manager/assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"> 
            <link href="{{ asset('manager/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" >
            <link href="{{ asset('manager/assets/plugins/simple-line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" >
            <link href="{{ asset('manager/assets/plugins/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css">

            <link href="{{ asset('manager/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet" > 
            <link href="{{ asset('manager/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css">              
            <link href="{{ asset('manager/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}" rel="stylesheet" type="text/css">     
            <link href="{{ asset('manager/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css">              
            <link href="{{ asset('manager/assets/css/dashboard.widgets.css') }}" rel="stylesheet" type="text/css">   
            <link href="{{ asset('/manager/pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css"> 
            <link href="{{ asset('/manager/pages/css/pages.css') }}" rel="stylesheet" type="text/css">     
            <link href="{{ asset('/manager/pages/css/print.css') }}" rel="stylesheet" type="text/css">    
            
            @yield('css')

        </head>
            

  <body class="fixed-header dashboard menu-pin">
                
        @include('managers.includes.header')

        @if( Auth::user()->role()->name == "admin")
            @include('managers.includes.navs') 
        @elseif( Auth::user()->role()->name == "manager")
            @include('restaurants.includes.navs') 
        @endif

      

        <div class="page-container">
            
            <div class="pgn-wrapper" id="divNotifications" data-position="top-right" style="top: 60px;">
 
            </div>

            <div class="page-content-wrapper">
                    @yield('content')
            </div>

        </div>        

               
        @yield('overlay')
        
      
        @section('notifications') 
        @show
    
    <script src="{{ asset('manager/assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/tether/js/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript "></script>
    <script src="{{ asset('manager/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-actual/jquery.actual.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/classie/classie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/lib/d3.v3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/nv.d3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/src/utils.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/src/tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/src/interactiveLayer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/src/models/axis.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/src/models/line.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/mapplic/js/jquery.mousewheel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/mapplic/js/mapplic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/rickshaw/rickshaw.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-metrojs/MetroJs.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/skycons/skycons.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/moment/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/plugins/datatables-responsive/js/lodash.min.js') }}" type="text/javascript"></script>    
    <script src="{{ asset('manager/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('manager/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>    
    <script src="{{ asset('manager/assets/plugins/summernote/js/summernote.min.js') }}" type="text/javascript"></script>
    
    
@stack('scripts_lib')

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('manager/pages/js/pages.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/js/datatables.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('manager/assets/js/form_elements.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/js/datatables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/js/dashboard.js') }}" type="text/javascript"></script>  
    <script src="{{ asset('manager/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/assets/js/demo.js') }}" type="text/javascript"></script>
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>>

    @stack('scripts')
    
</body>



</html>

