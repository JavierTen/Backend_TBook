  <div class="section-products">
                           <h2 class="section-title">Relacionados</h2>
                           <div class="columns-4">
                              <ul class="products">
                                 @foreach($relateds as $related)
                                    <li class="product">
                                        <div class="product-outer">
                                           <div class="product-inner">
                                            @if ($related->hasThumbnail())   
                                              <div class="product-image-wrapper">
                                                 <a href="{{ route('products.show', array($related->sku)) }}" class="woocommerce-LoopProduct-link">
                                                  <img width="" height="" src="/assets/images/index/side.png" style=" position: absolute;  z-index: 0;">
                                                  <img src="/assets/images/products/{{ $related->thumbnail()->filename }}" class="img-responsive" alt="{{ $related->sku }}"  style=" z-index: -1;">
                                                 </a>
                                              </div>       
                                            @endif   

                                              <div class="product-content-wrapper">
                                                 <a href="{{ route('products.show', array($related->sku)) }}" class="woocommerce-LoopProduct-link">
                                                    <h3>{{ $related->name }}</h3>
                                                    <div itemprop="description">
                                                       <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                    </div>
                                                    <div class="yith_wapo_groups_container">
                                                       <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                             @if($related->promotion == 1)
                                                                   <div itemprop="offers">
                                                                   <p class="price">
                                                                      <span class="woocommerce-Price-amount amount red">
                                                                      <span class="woocommerce-Price-currencySymbol ">$</span>{{ number_format(($related->pricing)-($related->pricing*$related->discount))}}
                                                                                                                      <span class="red">Kilo</span> </span>    
                                                                      <span class="woocommerce-Price-amount amountdecoration"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($related->pricing) }}
                                                                                                                      <span class="red">Kilo</span> </span>
                                                                   </p>
                                                                </div>
                                                                @else
                                                                   <div itemprop="offers">
                                                                      <p class="price">
                                                                      <span class="woocommerce-Price-amount amount">
                                                                      <span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($related->pricing) }}
                                                                                                                      <span class="red">Kilo</span> </span>
                                                                   </p>
                                                                   </div>
                                                                @endif
                                                       </div>
                                                    </div>
                                                 </a>
                                              </div>
                                           </div>
                                        </div>
                                        <!-- /.product-outer -->
                                     </li>
                                 @endforeach                              
                                
                                 <!-- /.products -->
                              </ul>
                           </div>
                        </div>
