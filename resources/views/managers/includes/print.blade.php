@section('title', 'Page Title')

    @extends("layouts.auditors")    

      @section('pages')
        @include('partials.includes.views.pages', ['title' => 'Municipios'])
      @endsection

      @section('navs')
        @include('partials.includes.headers.auditors.header')
      @endsection
          
      @section("content")
          
          <div class="content ">

              @include('partials.includes.navs.print.navs', [$modalitie , $municipalitie, $proceeding , $token])
              

              <div class="container container-fixed-lg">
                <div class="card card-default">
                  <div class="card-block">
                    <div class="invoice p-b-20 p-l-20 p-r-20">

                    @section('header-print')
                               <div class="header-print">
                                    <div class="pull-left">
                                      <div class="card-block p-l-0">
                                        <h6 class="">Señor (a)</h6> 
                                        <h6 class="">Contribuyente: <span >{{$contributor->name}}</span></h6>
                                        <h6 class="">Dirección: <span >{{$contributor->address}}</span></h6>
                                        <h6 class="">Nit: <span >{{$contributor->nit}}</span></h6>
                                        <h6 class="">Fecha: <span >{{$initiation}}</span></h6>
                                      </div>
                                    </div>
                                    <div class="pull-right sm-m-t-20">
                                      <div class="pull-right p-r-25  p-t-25  p-l-15 p-b-15"">
                                           <img width="136" height="136" alt="" class="invoice-logo" data-src-retina="/manager/img/municipalities/{{$municipalitie->watermark}}" data-src="/manager/img/municipalities/{{$municipalitie->watermark}}" src="/manager/img/municipalities/{{$municipalitie->watermark}}">
                                          </img>
                                      </div>
                                    </div>
                              </div>
                     @show
                      
                    @section('content-print')
                    @show    

                    @section('signature-print')
                       <br></br>
                       <div class="pull-left col-sm-height sm-no-padding">  
                        <img width="240" height="150" alt="" class="invoice-signature" data-src-retina="/manager/img/signature/{{$secretarie->signature}}" data-src="/manager/img/signature/{{$secretarie->signature}}" src="/manager/img/signature/{{$secretarie->signature}}">                         
                        <h6>{{$secretarie->firstname}} {{$secretarie->lastname}}</h6>
                        <h6>Secretaria Hacienda</h6>
                        <h6>{{$receptionist->description}}</h6>
                       </div>    
                       <br></br>    
                     @show                                    

                     @section('copyright-print')
                     
                              <div class="copyright text-center">
                                  <p class="small no-margin text-center sm-pull-reset">
                                    <span class="font-montserrat"> 
                                    <a href="#">{{ucwords($municipalitie->name)}}</a> - <a class="">{{ucwords($municipalitie->departament)}}</a> 
                                    </span>
                                    <span class="font-montserrat m-l-10 m-r-10">|</span>
                                    <span class="font-montserrat"><a class="">Website:  </a>{{$municipalitie->website}}</span>
                                    <span class="font-montserrat m-l-10 m-r-10">|</span>
                                    <span class="font-montserrat"><a class="">Direccion:  </a>{{$receptionist->address}}</span>
                                    <span class="font-montserrat m-l-10 m-r-10">|</span>
                                    <span class="font-montserrat"><a class="">Telefono:  </a>{{$receptionist->phone}}</span>
                                    <span class="font-montserrat m-l-10 m-r-10">|</span>
                                    <span class="font-montserrat"><a class="">Fax:  </a>{{$receptionist->fax}}</span>
                                  </p>
                              </div>
                     @show 
                       
                    </div>
                  </div>
                </div>            
              </div>
            
          </div>

      @endsection
