<nav class="page-sidebar" data-pages="sidebar">
  <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
  <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
  <!-- BEGIN SIDEBAR MENU HEADER-->
  <div class="sidebar-header">
    <img src="/assets/images/logo/main.png" alt="logo" class="brand" data-src="/assets/images/logo/main.png" data-src-retina="/assets/images/logo/main.png" width="170" height="45">
  </div>
  <!-- END SIDEBAR MENU HEADER-->
  <!-- START SIDEBAR MENU -->
  <div class="sidebar-menu">
    <!-- BEGIN SIDEBAR MENU ITEMS-->
    <ul class="menu-items">
      <li class="m-t-30 ">
        <a href="{{ route('restaurants.dashboard') }}" class="detailed">
          <span class="title">Dashboard</span>
          <span class="details">12 New Updates</span>
        </a>
        <span class="icon-thumbnail"><i data-feather="shield"></i></span>
      </li>
      
      
      <li class="">
        <a href="{{ route('restaurants.configuracion') }}" ><span class="title">Restaurantes</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
      <li class="">
        <a href="{{ route('restaurants.reviews') }}" ><span class="title">Calificaciones</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
      
      <li class="">
        <a href="{{ route('restaurants.foods') }}" ><span class="title">Productos</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
      
      <li class="">
        <a href="{{ route('restaurants.extras') }}" ><span class="title">Extras</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
      
      <li class="">
        <a href="{{ route('restaurants.faqs') }}" ><span class="title">Preguntas Frecuentes</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
      <li class="">
        <a href="{{ route('restaurants.orders') }}" ><span class="title">Ordenes</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
      <li class="">
        <a href="{{ route('restaurants.payments') }}" ><span class="title">Historial Pagos</span></a>
        <span class="icon-thumbnail"><i data-feather="life-buoy"></i></span>
      </li>
      
     
    </ul>
    <div class="clearfix"></div>
  </div>
  <!-- END SIDEBAR MENU -->
</nav>