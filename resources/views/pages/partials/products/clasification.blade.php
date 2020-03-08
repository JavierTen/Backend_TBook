 <div class="section-tabs">
                        <ul class="nav nav-tabs pizzaro-nav-tabs">
                           <li class="nav-item">
                              <a href="#h1-tab-products-1" data-toggle="tab">Destacados</a>
                           </li>
                           <li class="nav-item active">
                              <a href="#h1-tab-products-2" class="active" data-toggle="tab">Todos</a>
                           </li>
                           <li class="nav-item">
                              <a href="#h1-tab-products-3" data-toggle="tab">Nuevos</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane" id="h1-tab-products-1">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                       <ul class="products">
                                                                                    
                                          @foreach($featureds as $featured)

                                              <li class="product">
                                                 <div class="product-outer">
                                                    <div class="product-inner">
                                                       @if ($featured->hasThumbnail())   
                                                           <div class="product-image-wrapper">
                                                              <a href="{{ route('products.show', array($featured->sku)) }}" class="woocommerce-LoopProduct-link">
                                                              <img src="/assets/images/products/{{ $featured->thumbnail()->filename }}" class="img-responsive" alt="{{ $featured->sku }}">
                                                              </a>
                                                           </div> 
                                                        @endif    


                                                        
                                                       <div class="product-content-wrapper">
                                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                             <h3>{{ $featured->name }}</h3>
                                                             <div itemprop="description">
                                                                <p style="max-height: none;">{{ $featured->description }}</p>
                                                             </div>
                                                             <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                   <h3><span>Precio</span></h3>
                                                                   @if($featured->promotion == 1)
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                    {{ number_format($featured->pricing) }}
                                                                                    <span class="red">Kilo</span> </span>
                                                                                  </del>
                                                                                  <ins>
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                                                    ${{ number_format(($featured->pricing)+(($featured->pricing)*$featured->discount)/100)}}  
                                                                                    <span class="red">Kilo</span> 
                                                                                  </span></span></ins>
                                                                               </p>
                                                                            </div>
                                                                        @else
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($featured->pricing) }} 
                                                                                    <span class="red">Kilo</span> 
                                                                                  </span></del>
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
                              </div>
                           </div>  
                           <div class="tab-pane active" id="h1-tab-products-2">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
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
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($all->pricing) }}
                                                                                    <span class="red">Kilo</span> </span></del>
                                                                                  <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>${{ number_format(($all->pricing)+(($all->pricing)*$all->discount)/100)}}
                                                                                    <span class="red">Kilo</span> </span></ins>
                                                                               </p>
                                                                            </div>
                                                                        @else
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($all->pricing) }}
                                                                                    <span class="red">Kilo</span> </span></del>
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
                              </div>
                           </div>
                           <div class="tab-pane" id="h1-tab-products-3">
                              <div class="section-products">
                                 <div class="woocommerce columns-3">
                                    <div class="columns-3">
                                       <ul class="products">
                                                                                    
                                          @foreach($news as $new)

                                              <li class="product">
                                                 <div class="product-outer">
                                                    <div class="product-inner">
                                                       @if ($new->hasThumbnail())   
                                                           <div class="product-image-wrapper">
                                                              <a href="{{ route('products.show', array($new->sku)) }}" class="woocommerce-LoopProduct-link">
                                                              <img src="/assets/images/products/{{ $new->thumbnail()->filename }}" class="img-responsive" alt="{{ $new->sku }}">
                                                              </a>
                                                           </div> 
                                                        @endif    


                                                        
                                                       <div class="product-content-wrapper">
                                                          <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                             <h3>{{ $new->name }}</h3>
                                                             <div itemprop="description">
                                                                <p style="max-height: none;">{{ $new->description }}</p>
                                                             </div>
                                                             <div class="yith_wapo_groups_container">
                                                                <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                                   <h3><span>Precio</span></h3>
                                                                   @if($new->promotion == 1)
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($new->pricing) }}
                                                                                    <span class="red">Kilo</span> </span></del>
                                                                                  <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>${{ number_format(($new->pricing)+(($new->pricing)*$new->discount)/100)}}
                                                                                    <span class="red">Kilo</span> </span></ins>
                                                                               </p>
                                                                            </div>
                                                                        @else
                                                                            <div itemprop="offers">
                                                                               <p class="price">
                                                                                  <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($new->pricing) }}
                                                                                    <span class="red">Kilo</span> </span></del>
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
                              </div>
                           </div>                        
                        </div>
                     </div>


