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
            <a href="{{ route('managers.dashboard') }}" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="shield"></i></span>
          </li>
          
          <li>
            <a href="javascript:;"><span class="title">Restaurantes</span> 
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="map-pin"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('managers.restaurants.index') }}">Listado</a>
                <span class="icon-thumbnail">gm</span>
              </li> 
            </ul>
          </li>
          
          <li>
            <a href="javascript:;"><span class="title">Calificaciones</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="calendar"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('managers.foodreviews.index') }}">Calificaciones Productos</a>
                <span class="icon-thumbnail">L</span>
              </li>
              <li class="">
                <a href="{{ route('managers.restaurantreviews.index') }}">Calificaciones Restaurantes</a>
                <span class="icon-thumbnail">vm</span>
              </li>
            </ul>
          </li>


          <li>
            <a href="javascript:;"><span class="title">Foods</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="calendar"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('managers.foods.index') }}">Listado</a>
                <span class="icon-thumbnail">c</span>
              </li>
              <li class="">
                <a href="{{ route('managers.extras.index') }}">Extras</a>
                <span class="icon-thumbnail">M</span>
              </li>
              <li class="">
                <a href="{{ route('managers.nutrition.index') }}">Nutrientes</a>
                <span class="icon-thumbnail">D</span>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="javascript:;"><span class="title">Ordenes</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="layout"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('managers.orders.index') }}">Listado</a>
                <span class="icon-thumbnail">dl</span>
              </li>
              <li class="">
                <a href="{{ route('managers.payments.index') }}">Pagos</a>
                <span class="icon-thumbnail">rl</span>
              </li>

              
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Faqs</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="square"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('managers.faqcategories.index') }}">Categorias</a>
                <span class="icon-thumbnail">bt</span>
              </li>
              <li class="">
                <a href="{{ route('managers.faqs.index') }}">Listado</a>
                <span class="icon-thumbnail">dt</span>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;"><span class="title">Extra</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i data-feather="box"></i></span>
            <ul class="sub-menu">
              
              <li class="">
                <a href="{{ route('managers.orderStatuses.index') }}">Estado Pagos</a>
                <span class="icon-thumbnail">rl</span>
              </li>
              
              <li class="">
                <a href="{{ route('managers.categories.index') }}">Categoria</a>
                <span class="icon-thumbnail">c</span>
              </li>

              <li class="">
                <a href="{{ route('managers.permissions.index') }}">Configuraciones</a>
                <span class="icon-thumbnail">in</span>
              </li>
              <li class="">
                <a href="{{ route('managers.permissions.create') }}">404 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="{{ route('managers.roles.index') }}">Faqs</a>
                <span class="icon-thumbnail">bp</span>
              </li>
              <li class="">
                <a href="{{ route('managers.notifications.index') }}">Notificaciones</a>
                <span class="icon-thumbnail">l</span>
              </li>
              <li class="">
                <a href="{{ route('managers.roles.create') }}">Alertas</a>
                <span class="icon-thumbnail">re</span>
              </li>
              <li class="">
                <a href="{{ route('managers.users.index') }}">Mensajeros</a>
                <span class="icon-thumbnail">gl</span>
              </li>
              <li class="">
                <a href="{{ route('managers.deliveryAddresses.index') }}">Tags</a>
                <span class="icon-thumbnail">t</span>
              </li>
              <li>
                <a href="{{ route('managers.customFields.index') }}">Categorias</a>
                <span class="icon-thumbnail">L1</span>
              </li>
              <li>
                <a href="">Porciones</a>
                <span class="icon-thumbnail">L1</span>
              </li>
            </ul>
          </li>
         
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>