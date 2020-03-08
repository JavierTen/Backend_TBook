@extends('layouts.pages')

@push('body')     
   <body class="list-no-image-cat-view no-margin-header">
@endpush


@push('meta')
      <meta property="og:title" content="Facebook Open Graph META Tags"/>
<meta property="og:image" content="https://davidwalsh.name/wp-content/themes/klass/img/facebooklogo.png"/>
<meta property="og:site_name" content="David Walsh Blog"/>
<meta property="og:description" content="Facebook's Open Graph protocol allows for web developers to turn their websites into Faceb
@endpush


@section('content')

   <div class="pizzaro-breadcrumb">
                  <nav class="woocommerce-breadcrumb">
                     <a href="">Inicio</a>
                     <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                     <a href="">Menu</a>
                  </nav>
               </div>
               <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                     <div id="post-467" class="post-467 page type-page status-publish hentry">
                        <div class="entry-content">
                           
                           <div class="kc-elm kc-css-157377 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-947967 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="kc-elm kc-css-478085 kc_shortcode kc_single_image">
                                             <figure><img src="assets\images\banner-entradas.jpg" class="" alt=""></figure>
                                             <p class="scapt">ENTRADAS</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-463971 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-869677 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="section-products">
                                             <div class="woocommerce columns-1">
                                                <ul class="products">
                                                   @foreach($entradas as $entrada)
                                                      <li class="product first">
                                                         <div class="product-outer">
                                                            <div class="product-inner">
                                                               <div class="product-content-wrapper">
                                                                  <a  class="woocommerce-LoopProduct-link">
                                                                     <h3>{{$entrada->name}}</h3>
                                                                     <div itemprop="description">
                                                                        @if($entrada->description != "")
                                                                           <p style="max-height: none;">{{$entrada->description}}</p>
                                                                        @else
                                                                        @endif
                                                                     </div>
                                                                     <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                           <h3><span>Pick Size</span></h3>
                                                                           <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($entrada->pricing) }}</span></span></div>
                                                                        </div>
                                                                     </div>
                                                                  </a>
                                                                  <div class="hover-area"><a rel="nofollow"  data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select Options</a></div>
                                                               </div>
                                                            </div>
                                                            <!-- /.product-inner -->
                                                         </div>
                                                         <!-- /.product-outer -->
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-157377 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-947967 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="kc-elm kc-css-478085 kc_shortcode kc_single_image">
                                             <figure><img src="assets\images\banner-carnes.jpg" class="" alt=""></figure>
                                             <p class="scapt">CARNES</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-463971 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-869677 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="section-products">
                                             <div class="woocommerce columns-1">
                                                <ul class="products">
                                                   @foreach($carnes as $carnes)
                                                      <li class="product first">
                                                         <div class="product-outer">
                                                            <div class="product-inner">
                                                               <div class="product-content-wrapper">
                                                                  <a  class="woocommerce-LoopProduct-link">
                                                                     <h3>{{$carnes->name}}</h3>
                                                                     <div itemprop="description">
                                                                        @if($carnes->description != "")
                                                                           <p style="max-height: none;">{{$carnes->description}}</p>
                                                                        @else
                                                                        @endif
                                                                     </div>
                                                                     <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                           <h3><span>Pick Size</span></h3>
                                                                           <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">{{ number_format($carnes->pricing_gr) }} Gr</span></span><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($carnes->pricing) }}</span></span></div>
                                                                        </div>
                                                                     </div>
                                                                  </a>
                                                                  <div class="hover-area"><a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select Options</a></div>
                                                               </div>
                                                            </div>
                                                            <!-- /.product-inner -->
                                                         </div>
                                                         <!-- /.product-outer -->
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-157377 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-947967 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="kc-elm kc-css-478085 kc_shortcode kc_single_image">
                                             <figure><img src="assets\images\banner-cerdo.jpg" class="" alt=""></figure>
                                             <p class="scapt">CERDO</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-463971 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-869677 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="section-products">
                                             <div class="woocommerce columns-1">
                                                <ul class="products">
                                                   @foreach($cerdos as $cerdo)
                                                      <li class="product first">
                                                         <div class="product-outer">
                                                            <div class="product-inner">
                                                               <div class="product-content-wrapper">
                                                                  <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                                     <h3>{{$cerdo->name}}</h3>
                                                                     <div itemprop="description">
                                                                        @if($cerdo->description != "")
                                                                           <p style="max-height: none;">{{$cerdo->description}}</p>
                                                                        @else
                                                                        @endif
                                                                     </div>
                                                                     <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                           <h3><span>Pick Size</span></h3>
                                                                           <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">{{ number_format($cerdo->pricing_gr) }} Gr</span></span><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($cerdo->pricing) }}</span></span></div>
                                                                        </div>
                                                                     </div>
                                                                  </a>
                                                                  <div class="hover-area"><a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select Options</a></div>
                                                               </div>
                                                            </div>
                                                            <!-- /.product-inner -->
                                                         </div>
                                                         <!-- /.product-outer -->
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-157377 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-947967 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="kc-elm kc-css-478085 kc_shortcode kc_single_image">
                                             <figure><img src="assets\images\banner-picadas.jpg" class="" alt=""></figure>
                                             <p class="scapt">PICADAS</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-463971 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-869677 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="section-products">
                                             <div class="woocommerce columns-1">
                                                <ul class="products">
                                                   @foreach($picadas as $picada)
                                                      <li class="product first">
                                                         <div class="product-outer">
                                                            <div class="product-inner">
                                                               <div class="product-content-wrapper">
                                                                  <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                                     <h3>{{$picada->name}}</h3>
                                                                     <div itemprop="description">
                                                                        @if($picada->description != "")
                                                                           <p style="max-height: none;">{{$picada->description}}</p>
                                                                        @else
                                                                        @endif
                                                                     </div>
                                                                     <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                           <h3><span>Pick Size</span></h3>
                                                                           <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($picada->pricing) }}</span></span></div>
                                                                        </div>
                                                                     </div>
                                                                  </a>
                                                                  <div class="hover-area"><a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select Options</a></div>
                                                               </div>
                                                            </div>
                                                            <!-- /.product-inner -->
                                                         </div>
                                                         <!-- /.product-outer -->
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="kc-elm kc-css-157377 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-947967 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="kc-elm kc-css-478085 kc_shortcode kc_single_image">
                                             <figure><img src="assets\images\banner-cervezas.jpg" class="" alt=""></figure>
                                             <p class="scapt">CERVEZAS</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-463971 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-869677 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="section-products">
                                             <div class="woocommerce columns-1">
                                                <ul class="products">
                                                   @foreach($cervezas as $cerveza)
                                                      <li class="product first">
                                                         <div class="product-outer">
                                                            <div class="product-inner">
                                                               <div class="product-content-wrapper">
                                                                  <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                                     <h3>{{$cerveza->name}}</h3>
                                                                     <div itemprop="description">
                                                                        @if($cerveza->description != "")
                                                                           <p style="max-height: none;">{{$cerveza->description}}</p>
                                                                        @else
                                                                        @endif
                                                                     </div>
                                                                     <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                           <h3><span>Pick Size</span></h3>
                                                                           <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($cerveza->pricing) }}</span></span></div>
                                                                        </div>
                                                                     </div>
                                                                  </a>
                                                                  <div class="hover-area"><a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select Options</a></div>
                                                               </div>
                                                            </div>
                                                            <!-- /.product-inner -->
                                                         </div>
                                                         <!-- /.product-outer -->
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="kc-elm kc-css-157377 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-947967 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="kc-elm kc-css-478085 kc_shortcode kc_single_image">
                                             <figure><img src="assets\images\banner-bebidas.jpg" class="" alt=""></figure>
                                             <p class="scapt">BEBIDAS</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="kc-elm kc-css-463971 kc_row">
                              <div class="kc-row-container  kc-container">
                                 <div class="kc-wrap-columns">
                                    <div class="kc-elm kc-css-869677 kc_col-sm-12 kc_column kc_col-sm-12">
                                       <div class="kc-col-container">
                                          <div class="section-products">
                                             <div class="woocommerce columns-1">
                                                <ul class="products">
                                                   @foreach($bebidas as $bebida)
                                                      <li class="product first">
                                                         <div class="product-outer">
                                                            <div class="product-inner">
                                                               <div class="product-content-wrapper">
                                                                  <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                                     <h3>{{$bebida->name}}</h3>
                                                                     <div itemprop="description">
                                                                        @if($bebida->description != "")
                                                                           <p style="max-height: none;">{{$bebida->description}}</p>
                                                                        @else
                                                                        @endif
                                                                     </div>
                                                                     <div class="yith_wapo_groups_container">
                                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                           <h3><span>Pick Size</span></h3>
                                                                           <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($bebida->pricing) }}</span></span></div>
                                                                        </div>
                                                                     </div>
                                                                  </a>
                                                                  <div class="hover-area"><a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="82" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select Options</a></div>
                                                               </div>
                                                            </div>
                                                            <!-- /.product-inner -->
                                                         </div>
                                                         <!-- /.product-outer -->
                                                      </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>



                           
                        </div>
                        <!-- .entry-content -->
                     </div>
                  </main>
                  <!-- #main -->
               </div>
@endsection
