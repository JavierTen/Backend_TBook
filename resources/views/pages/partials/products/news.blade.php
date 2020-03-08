<div class="col-sm-4">
    <h3 class="carousel-title">Nuevos</h3>                                               
                    <ul class="products-list">
                        @foreach($news as $new)
                            <li class="product">
                                                @if ($new->hasThumbnail())   
                                                  <figure class="product-image-container">
                                                        <a href="{{ route('products.show', array($new->sku)) }}">
                                                            <img  class="product-img" src="/assets/images/products/{{ $new->thumbnail()->filename }}" alt="{{ $new->sku }}">
                                                        </a>
                                                  </figure>
                                                @endif                                                
                                                <div>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .ratings-container -->
                                                    <h4 class="product-title">                                                        
                                                        <a href="{{ route('products.show', array($new->sku)) }}">{{ $new->name }}</a>
                                                    </h4>
                                                    <div class="product-price-container">
                                                        @if($new->promotion == 1)
                                                            <span class="product-price">${{ number_format(($new->pricing)+(($new->pricing)*$new->discount)/100)}}</span>
                                                            <span class="product-price">${{ number_format($new->pricing) }}</span>
                                                        @else
                                                            <span class="product-price">${{ number_format($new->pricing) }}</span>
                                                        @endif
                                                    </div><!-- End .product-price-container -->
                                                </div>
                            </li>
                        @endforeach
                    </ul>
</div>
                             
