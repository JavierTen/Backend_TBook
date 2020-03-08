   <div class="col-sm-12"> 
                                            <div class="deal-item list-view">
                                                <div class="deal-icons">                                         
                                                    <a class=""></a>
                                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>   
                                                    <a  class=""></a>                                   
                                                </div>
                                                <div class="deal-content">

                                                    <div class="deal-text">
                                                        <h4 class="sub-title">{{ $product->categorie->name }}</h4>
                                                        <h2 class="fsz-30 pb-15"> <a href="{{ route('products.show', array($product->sku)) }}"> <span class="light-font">{{ $product->name }}</span> </a> </h2>
                                                        <p>{{ $product->description }}</p>
                                                        <div class="price pt-15"> 
                                                            @if($product->promotion == 1)
                                                            	<strong class="clr-txt">${{ number_format(($product->pricing)+(($product->pricing)*$product->discount)/100)}}
                                                                                    <span class="red">Kilo</span> </strong> 
	                                                            <del class="light-font">${{ number_format($product->pricing) }}
                                                                                    <span class="red">Kilo</span> </del>
	                                                        @else
	                                                            <strong class="clr-txt">${{ number_format($product->pricing) }}
                                                                                    <span class="red">Kilo</span> </strong>
	                                                        @endif
                                                        </div>
                                                    </div>
                                                     @if ($product->hasThumbnail())
                                                    	<div class="img"> 
	                                                        <a href="{{ route('products.show', array($product->sku)) }}" title="{{ $product->sku }}" class="">
	                                                            <img  class="product-img" alt="{{ $product->sku }}" src="/assets/img/products/{{ $product->thumbnail()->filename }}">     
	                                                        </a>     
                                                    	</div>
                                                    @endif      
                                                </div>
                                            </div>
 </div>
