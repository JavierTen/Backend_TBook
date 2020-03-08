
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <head>
      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">    
        <meta name="description" content="Mercosan es una empresa que distribuye y comercializa productos cárnicos hace 22 años.">
        <meta name="author" content="Revox Services">
        

        <meta property="og:title" content="Mercosan">
        <meta property="og:image" content="http://mercosan.com/assets/images/slider/homepage-mercosan.jpg">
        <meta property="og:description" content="mercosan es una empresa que distribuye y comercializa productos cárnicos hace 22 años.">

        
      <!-- Fonts
      ============================================= -->
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i" rel="stylesheet">
  

        
        @stack('meta')

x
	      <title>Mezban  - Food & Resturent HTML Template</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="144x144" href="assets\ico\apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets\ico\favicon.ico">
        <link rel="shortcut icon" href="assets\images\fav-icon.png">
               
        <link href="{{ asset('assets/css/animate.css') }}"  rel="stylesheet"> 
        <link href="{{ asset('assets/css/bootstrap.min.css') }}"  rel="stylesheet"> 
        <link href="{{ asset('assets/css/icofont.min.css') }}"  rel="stylesheet"> 
        <link href="{{ asset('assets/css/lightcase.css') }}"  rel="stylesheet"> 
        <link href="{{ asset('assets/css/swiper.min.css') }}"  rel="stylesheet"> 
        <link href="{{ asset('assets/css/style.css') }}"  rel="stylesheet"> 
                


        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" > 
      
        @stack('css')
         

    </head>
  
   
   @stack('body')
   
  <body>
   
    
               @include ('pages/includes/header')  

               @yield('content')
                
               @include ('pages/includes/footer')  
               
              <a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>

               @include ('pages/includes/chats')  


    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/waypoints.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/swiper.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/lightcase.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('assets/js/functions.js') }}" type="text/javascript"></script> 

    @stack('css')

    <script>
            
            window.Laravel = <?php echo json_encode([
                        'csrfToken' => csrf_token(),
            ]); ?>

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

        </script>
    

    </body>

</html>
