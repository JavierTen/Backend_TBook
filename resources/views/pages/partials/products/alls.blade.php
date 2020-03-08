 <div class="section-products">
                        <h2 class="section-title">Productos</h2>
                        <div class="columns-4">
                           <ul class="products">
                              @foreach($alls as $all)

                                              <li class="product">
                                                 <div class="product-outer">
                                                    <div class="product-inner">
                                                       @if ($all->hasThumbnail())   
                                                           <div class="product-image-wrapper">
                                                              <a href="{{ route('products.show', array($all->sku)) }}" class="woocommerce-LoopProduct-link">
                                                              <img src="/assets/images/products/{{ $all->thumbnail()->filename }}" class="img-responsive" alt="{{ $all->sku }}">
                                                              </a>
                                                           </div> 
                                                        @endif    


                                                        
                                                       <div class="product-content-wrapper">
                                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                             <h3>{{ $all->name }}</h3>
                                                             <div itemprop="description">
                                                                <p style="max-height: none;">{{ $all->description }}</p>
                                                             </div>
                                                             <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                   <h3><span>Precio</span></h3>
                                                                   @if($all->promotion == 1)
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($all->pricing) }}</span></del>
                                                                                  <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>${{ number_format(($all->pricing)+(($all->pricing)*$all->discount)/100)}}</span></ins>
                                                                               </p>
                                                                            </div>
                                                                        @else
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($all->pricing) }}</span></del>
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
                           </ul>
                        </div>
                     </div>


