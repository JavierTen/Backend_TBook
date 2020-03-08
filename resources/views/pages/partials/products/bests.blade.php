   <div id="woocommerce_products-2" class="widget woocommerce widget_products">
                     <span class="gamma widget-title">Destacados</span>
                     <ul class="product_list_widget">
                         @foreach($bests as $best)
                             <li>
                               <a href="#" title="{{ $best->slug }}">
                               <a href="{{ route('products.show', array($best->sku)) }}" class="woocommerce-LoopProduct-link">
                                                  <img class="product_list_widget wp-post-sider" src="/assets/images/index/side.png" style=" position: absolute;  z-index: 0;">
                                                  <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/{{ $best->thumbnail()->filename }}" class="img-responsive" alt="{{ $best->sku }}"  style=" z-index: -1;">
                                </a>

                               <span class="product-title">{{ $best->name }}</span>
                               </a>
                               @if($best->promotion == 1)  
                                                     <span class="widget-price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>${{ number_format($best->pricing) }}
                                                                <span class="red"> Kilo</span>
                                                            </span>
                                                                &ndash;
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>${{ number_format(($best->pricing)+(($best->pricing)*$best->discount)/100)}}
                                                                <span class="red"> Kilo</span>
                                                            </span>
                                                     </span>                                                       
                                                @else 
                                                    <span class="widget-price">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol"></span>
                                                            ${{ number_format($best->pricing) }}
                                                            <span class="red"> Kilo</span>
                                                        </span>
                                                    </span>                                                                
                                                @endif  
                            </li>
                        @endforeach
                        
                     </ul>
                  </div>


