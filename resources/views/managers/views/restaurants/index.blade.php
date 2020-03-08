@extends('layouts.managers')

@section('content')
    
      <div class="content ">
          
          <div class="jumbotron">
            <div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0" style=" height: 390px;">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Restaurantes</li>
                </ol>
                <!-- END BREADCRUMB -->
                <div class="row">
                  <div class="col-xl-7 col-lg-6 ">
                    <!-- START card -->
                    <div class="full-height">
                      <div class="card-block text-center">
                        <img class="image-responsive-height demo-mw-600"  src="/manager/img/demo/tables.jpg" alt="">
                      </div>
                    </div>
                    <!-- END card -->
                  </div>
                  <div class="col-xl-5 col-lg-6 ">
                    <!-- START card -->
                    <div class="card card-transparent">
                      <div class="card-header ">
                        <div class="card-title">Restaurantes
                        </div>
                      </div>
                      <div class="card-block">
                        <h3>Herramienta para crear Restaurantes.</h3>
                        <p>Al compartir el mismo diseño de diseño estilizado, estas tablas permiten la compilación y organización efectiva de datos con un fácil acceso y maniobrabilidad para los usuarios. </p>
                        <p class="small hint-text m-t-5">VIA senior product manage
                          <br> for UI/UX at REVOX</p>
                        <br>
                        
                      </div>
                    </div>
                    <!-- END card -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=" no-padding container-fixed-lg bg-white">
            <div class="container">
              <!-- START card -->
              <div class="card card-transparent">
                <div class="card-header ">
                  <div class="card-title">Listado Restaurantes
                  </div>
                  <div class="pull-right">
                    <div class="col-xs-12">
                      <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="card-block">
                   @include('managers.partials.listing.restaurants.lists') 
                </div>
              </div>
            </div>
          </div>
          
      </div>

@endsection



