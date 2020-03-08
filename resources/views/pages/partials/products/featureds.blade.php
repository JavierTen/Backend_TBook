<div class="col-sm-4">
    <h3 class="carousel-title">Destacados</h3>                                               
                    <ul class="products-list">
                        @foreach($featureds as $featured)
                            <li class="product">
                                                @if ($featured->hasThumbnail())   
                                                  <figure class="product-image-container">
                                                        <a href="{{ route('products.show', array($featured->sku)) }}">
                                                            <img  class="product-img" src="/assets/images/products/{{ $featured->thumbnail()->filename }}" alt="{{ $featured->sku }}">
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
                                                        <a href="{{ route('products.show', array($featured->sku)) }}">{{ $featured->name }}</a>
                                                    </h4>
                                                    <div class="product-price-container">
                                                        @if($featured->promotion == 1)
                                                            <span class="product-price">${{ number_format(($featured->pricing)+(($featured->pricing)*$featured->discount)/100)}}</span>
                                                            <span class="product-price">${{ number_format($featured->pricing) }}</span>
                                                        @else
                                                            <span class="product-price">${{ number_format($featured->pricing) }}</span>
                                                        @endif
                                                    </div><!-- End .product-price-container -->
                                                </div>
                            </li>
                        @endforeach
                    </ul>
</div>
                             
