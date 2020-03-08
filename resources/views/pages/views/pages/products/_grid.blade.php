
 <li class="post-82 product type-product status-publish has-post-thumbnail product_cat-pizza  instock shipping-taxable purchasable product-type-simple addon-product">
                           <div class="product-outer">
                              <div class="product-inner">

                                 @if ($product->hasThumbnail())   
                                     <div class="product-image-wrapper">
                                       <a href="{{ route('products.show', array($product->sku)) }}" class="woocommerce-LoopProduct-link">
                                          <img width="" height="" src="/assets/images/index/side.png" style=" position: absolute;  z-index: 0;">

                                          <img  src="/assets/images/products/{{ $product->thumbnail()->filename }}" class="attachment-pizzaro-product-list-fw-col-1 size-pizzaro-product-list-fw-col-1" alt="{{ $product->sku }}" title="{{ $product->sku }}" style=" z-index: -1;"></a>
                                     </div>                                          
                                 @endif   
                                 
                                 <div class="product-content-wrapper product-center">
                                    <a href="{{ route('products.show', array($product->sku)) }}" class="woocommerce-LoopProduct-link">
                                       <h3>{{ $product->name }}</h3>
                                       <div >
                                          <p style="max-height: none;">{{ $product->description }}.</p>
                                       </div>
                                       <div class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide product-price" data-requested="1" data-type="radio" data-id="1" data-condition="">
                                             @if($product->promotion == 1)
                                                <p class="price text-center ">
                                                   <span class="woocommerce-Price-amount amount red">
                                                   <span class="woocommerce-Price-currencySymbol ">$</span>{{ number_format(($product->pricing)-($product->pricing*$product->discount))}}
                                                                                    <span class="red">Kilo</span> </span>    
                                                   <span class="woocommerce-Price-amount amountdecoration"><span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($product->pricing) }}
                                                                                    <span class="red">Kilo</span> </span>
                                                </p>
                                             @else
                                                   <p class="price text-center ">
                                                         <span class="woocommerce-Price-amount amount">
                                                         <span class="woocommerce-Price-currencySymbol">$</span>{{ number_format($product->pricing) }}
                                                         <span class="red">Kilo</span> </span>
                                                   </p>
                                             @endif
                                          </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>



