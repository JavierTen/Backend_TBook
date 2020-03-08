@extends('layouts/pages')

@push('body') 
    <body class="page-template-template-homepage-v1 home-v1">
@endpush


@section('content')

 <div class="col-full">

               <div id="primary" class="content-area">
                  <main id="main" class="site-main">

                    

                    @include('pages/partials/slider/v1')

                    @include('pages/partials/promotion/v1')

                     

                    <div class="section-tabs">
                        <ul class="nav nav-tabs pizzaro-nav-tabs">
                           <li class="nav-item">
                              <a href="#h1-tab-products-1" data-toggle="tab">Wraps</a>
                           </li>
                           <li class="nav-item active">
                              <a href="#h1-tab-products-2" class="active" data-toggle="tab">Pizza Sets</a>
                           </li>
                           <li class="nav-item">
                              <a href="#h1-tab-products-3" data-toggle="tab">Burgers</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane" id="h1-tab-products-1">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                       <ul class="products">
                                          <li class="product first">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p1.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Pepperoni Pizza</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product ">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p2.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Trio Cheese</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product last">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p3.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Apricot Chicken</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="tab-pane active" id="h1-tab-products-2">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                       <ul class="products">
                                          <li class="product first">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p4.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Italiano Original</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product ">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p5.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Chicken Hawaii</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product last">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p6.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Summer Pizza</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="h1-tab-products-3">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                       <ul class="products">
                                          <li class="product first">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p7.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Pepperoni Calzone</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product ">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p8.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Pepperoni Pizza</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                          <li class="product last">
                                             <div class="product-outer">
                                                <div class="product-inner">
                                                   <div class="product-image-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                      <img src="assets\images\products\p9.jpeg" class="img-responsive" alt="">
                                                      </a>
                                                   </div>
                                                   <div class="product-content-wrapper">
                                                      <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                         <h3>Trio Cheese</h3>
                                                         <div itemprop="description">
                                                            <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                         </div>
                                                         <div class="yith_wapo_groups_container">
                                                            <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                               <h3><span>Pick Size</span></h3>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">


                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                               </div>
                                                               <div class="ywapo_input_container ywapo_input_container_radio">

                                                                  <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                                  <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </a>
                                                      <div class="hover-area">
                                                         <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.product-outer -->
                                          </li>
                                          <!-- /.products -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /.panel -->
                        </div>
                     </div>

                    @include('pages/partials/promotion/v2')

                    <div class="section-products">
                        <h2 class="section-title">Goes Great With</h2>
                        <div class="columns-4">
                           <ul class="products">
                              <li class="product first">
                                 <div class="product-outer">
                                    <div class="product-inner">
                                       <div class="product-image-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                          <img src="assets\images\products\p9.jpeg" class="img-responsive" alt="">
                                          </a>
                                       </div>
                                       <div class="product-content-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <h3>Trio Cheese</h3>
                                             <div itemprop="description">
                                                <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                             </div>
                                             <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                   <h3><span>Pick Size</span></h3>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">


                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                   </div>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">

                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                      <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </a>
                                          <div class="hover-area">
                                             <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.product-outer -->
                              </li>
                              <!-- /.products -->
                              <li class="product ">
                                 <div class="product-outer">
                                    <div class="product-inner">
                                       <div class="product-image-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                          <img src="assets\images\products\p10.jpeg" class="img-responsive" alt="">
                                          </a>
                                       </div>
                                       <div class="product-content-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <h3>Trio Cheese</h3>
                                             <div itemprop="description">
                                                <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                             </div>
                                             <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                   <h3><span>Pick Size</span></h3>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">


                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                   </div>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">

                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                      <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </a>
                                          <div class="hover-area">
                                             <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.product-outer -->
                              </li>
                              <!-- /.products -->
                              <li class="product ">
                                 <div class="product-outer">
                                    <div class="product-inner">
                                       <div class="product-image-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                          <img src="assets\images\products\p2.jpeg" class="img-responsive" alt="">
                                          </a>
                                       </div>
                                       <div class="product-content-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <h3>Trio Cheese</h3>
                                             <div itemprop="description">
                                                <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                             </div>
                                             <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                   <h3><span>Pick Size</span></h3>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">


                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                   </div>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">

                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                      <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </a>
                                          <div class="hover-area">
                                             <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.product-outer -->
                              </li>
                              <!-- /.products -->
                              <li class="product last">
                                 <div class="product-outer">
                                    <div class="product-inner">
                                       <div class="product-image-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                          <img src="assets\images\products\p1.jpeg" class="img-responsive" alt="">
                                          </a>
                                       </div>
                                       <div class="product-content-wrapper">
                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <h3>Trio Cheese</h3>
                                             <div itemprop="description">
                                                <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                             </div>
                                             <div class="yith_wapo_groups_container">
                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                   <h3><span>Pick Size</span></h3>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">


                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span><span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                   </div>
                                                   <div class="ywapo_input_container ywapo_input_container_radio">

                                                      <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                      <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                   </div>
                                                </div>
                                             </div>
                                          </a>
                                          <div class="hover-area">
                                             <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /.product-outer -->
                              </li>
                              <!-- /.products -->
                           </ul>
                        </div>
                     </div>

                    @include('pages/partials/promotion/v3')


                    @include('pages/partials/sections/features-list')
                    
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>

    @push('scripts')  

        <script>  
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
            });
        </script>
                
         <script src="{{ asset('pages.js') }}" type="text/javascript"></script> 
         <script src="{{ asset('shopping.js') }}" type="text/javascript"></script>  

    @endpush



@endsection


