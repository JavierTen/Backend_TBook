
                <div class="list-view section-products" style="margin-top: 50px">
                    <div class="woocommerce columns-2">
                        <ul class="products">

                             @foreach($featureds as $featured)
                                        
                                <li class="product">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <div class="product-image-wrapper">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                    <a href="{{ route('products.show', array($featured->sku)) }}" class="woocommerce-LoopProduct-link">
                                                        <img width="" height="" src="/assets/images/index/side.png" style=" position: absolute;  z-index: 0;">
                                          
                                                        <img src="/assets/images/products/{{ $featured->thumbnail()->filename }}" class="img-responsive" alt="{{ $featured->sku }}"  style=" z-index: -1;">
                                                    </a>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <a class="woocommerce-LoopProduct-link" href="single-product-v1.html">
                                                    <h3>
                                                        {{ $featured->name }}
                                                    </h3>
                                                    <div itemprop="description">
                                                        <p style="max-height: none;">
                                                                 {{ $featured->description }}
                                                        </p>
                                                    </div>
                                                    <div class="yith_wapo_groups_container">
                                                        <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-condition="" data-id="1" data-requested="1" data-type="radio">
                                                            
                                                            @if($featured->promotion == 1)
                                                                     <div itemprop="offers">
                                                                     <p class="price">
                                                                        <span class="woocommerce-Price-amount amount red">
                                                                        <span class="woocommerce-Price-currencySymbol ">$</span>{{ number_format(($featured->pricing)-($featured->pricing*$featured->discount))}}
                                                                                                                        <span class="red">Kilo</span> </span>    
                                                                        <span class="woocommerce-Price-amount amountdecoration"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($featured->pricing) }}
                                                                                                                        <span class="red">Kilo</span> </span>
                                                                     </p>
                                                                  </div>
                                                                  @else
                                                                     <div itemprop="offers">
                                                                        <p class="price">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($featured->pricing) }}
                                                                                                                        <span class="red">Kilo</span> </span>
                                                                     </p>
                                                                     </div>
                                                                  @endif
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="hover-area">
                                                    <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="82" data-product_sku="" data-quantity="1" href="single-product-v1.html" rel="nofollow">
                                                        Agregar
                                                    </a>
                                                </div>
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