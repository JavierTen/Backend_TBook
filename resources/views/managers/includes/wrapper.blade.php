
    
    <script src="{{ asset('manager/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('manager/js/pages.js') }}" type="text/javascript"></script>


          <div class="quickview-wrapper builder hidden-sm hidden-xs" id="builder">
                  <div class="p-l-30 p-r-30 ">
                    <a class="builder-close quickview-toggle  open pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a>
                    <a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
                    <ul class="nav nav-tabs nav-tabs-simple nav-tabs-primary m-t-10">
                      <li class="active">
                        <a data-toggle="tab" href="#tabUtilities">Utilidades</a>
                      </li>  
                    </ul>
                    <div class="tab-content m-b-30 p-l-30">
                      <div class="tab-pane active" id="tabUtilities">
                        <div class="scrollable">                          
                          <div class="p-l-10 p-r-50">
                            <h5 class="semi-bold">
                              Manager
                            </h5>
                            <p class=" hint-text no-margin">
                              Este menu te facilita el manejo de la plataforma
                            </p>
                            <p class="small hint-text m-b-20">
                              Personalice y visualice su panel de control.
                            </p>   
                            <div class="row p-b-35">
                              <div class="col-xs-6">
                                <a href="{{route('manager.users.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_aa.png" data-src-retina="assets/img/demo/full_aa.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5">Usuarios</span>
                                </a>
                              </div>  
                              <div class="col-xs-6">
                                <a href="{{route('manager.products.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_am.png" data-src-retina="assets/img/demo/full_am.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5">Productos</span>
                                </a>
                              </div>                      
                            </div>      
                            <div class="row p-b-35">
                                <div class="col-xs-6">
                                <a href="{{route('manager.events.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_ad.png" data-src-retina="assets/img/demo/full_ad.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5">Eventos</span>
                                </a>
                              </div> 
                              <div class="col-xs-6 ">
                                 <a href="{{route('manager.quotations.index')}}" class="btn-toggle-layout fs-12">
                                    <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_ap.png" data-src-retina="assets/img/demo/full_ap.png" width="126" height="95"> 
                                    <span class="text-dark m-t-5">Cotizaciones</span>
                                  </a>
                                </div>                                   
                              </div>
                            <div class="row p-b-35">
                              <div class="col-xs-6">
                                  <a href="{{route('manager.tags.index')}}" class="btn-toggle-layout fs-12">
                                    <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_lp.png" data-src-retina="assets/img/demo/full_lp.png" width="126" height="95"> 
                                    <span class="text-dark m-t-5">Faqs</span>
                                  </a>
                                </div> 
                                <div class="col-xs-6">
                                  <a href="{{route('manager.commercials.index')}}" class="btn-toggle-layout fs-12">
                                    <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_lp.png" data-src-retina="assets/img/demo/full_lp.png" width="126" height="95"> 
                                    <span class="text-dark m-t-5">Publicidad</span>
                                  </a>
                                </div>               
                            </div>                       
                          </div>

                          <div class="p-l-10 p-r-50">
                            <h5 class="semi-bold">
                              Utilidades
                            </h5>
                            <p class=" hint-text no-margin">
                              Este menu te facilita el manejo de la plataforma
                            </p>
                            <p class="small hint-text m-b-20">
                              Personalice y visualice su panel de control.
                            </p>
                            <div class="row p-b-35">
                              <div class="col-xs-6">
                                <a href="{{route('manager.sortings.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_cc.png" data-src-retina="assets/img/demo/full_cc.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5"> Modalidad</span>
                                </a>
                              </div>
                              <div class="col-xs-6 ">                                
                                <a href="{{route('manager.modes.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_vc.png" data-src-retina="assets/img/demo/full_vc.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5"> Modos</span>
                                </a>
                              </div>                        
                            </div>
                            <div class="row p-b-35">
                              <div class="col-xs-6">
                                <a href="{{route('manager.categories.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_cc.png" data-src-retina="assets/img/demo/full_cc.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5">Categorias</span>
                                </a>
                              </div>
                              <div class="col-xs-6 ">                                
                                <a href="{{route('manager.tags.index')}}" class="btn-toggle-layout fs-12">
                                  <img alt="Full header" class="m-b-15 " src="/manager/img/demo/full_vc.png" data-src-retina="assets/img/demo/full_vc.png" width="126" height="95"> 
                                  <span class="text-dark m-t-5"> Tags</span>
                                </a>
                              </div>                        
                            </div>                        
                          </div>                          
                         
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>