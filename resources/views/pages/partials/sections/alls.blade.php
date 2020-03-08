
<?php 
$point = 0;
$count = 0;
?>

<section class="naturix-goods sec-space-bottom">
                <div class="container"> 
                    <div class="title-wrap">
                        <h4 class="sub-title"> NUESTROS PRODUCTOS </h4>
                        <h2 class="section-title"> <span class="round-shape">  <span class="light-font">Mer </span> <strong> organic goods <img src="assets\img\icons\logo-icon.png" alt=""></strong> </span> </h2>
                    </div>

                    <div class="tabs-box text-center">
                        <ul class="theme-tabs small">
                              @foreach($scopecategories as $categorie)
                                  <?php 
                                      $point++
                                ?>
                                  @if($point=5)
                                        <li class="active"><a href="#naturix-tab-{{ $point }}" data-toggle="tab"> <span class="light-font">{{ $categorie->name }} </span></a></li>    
                                  @else
                                        <li class=""><a href="#naturix-tab-{{ $point }}" data-toggle="tab"> <span class="light-font">{{ $categorie->name }} </span></a></li>    
                                  @endif 
                            @endforeach
                        </ul>
                    </div>

                    <div class="tab-content organic-content row"> 
                        @foreach($scopecategories as $categorie)
                            
                            <?php 
                              $count++
                            ?>

                            @if($point=5)
                            <div id="naturix-tab-{{ $count }}" class="tab-pane fade active in"> 
                                <div class="naturix-slider-{{ $count }} dots-{{ $count }}"> 
                                    @foreach($categorie->available as $product)
                                        <div class="item"> 
                                            <div class="product-box"> 
                                                @if ($product->hasThumbnail())   
                                                        <div class="product-media"> 
                                                            <a href="{{ route('products.show', array($product->slug)) }}" title="{{ $product->sku }}" class="">
                                                                <img class="prod-img" alt="{{ $product->sku }}" src="/assets/img/products/{{ $product->thumbnail()->filename }}">     
                                                            </a>
                                                            <img class="shape" alt="" src="/assets/img/icons/shap-small.png">  
                                                            <div class="prod-icons"> 
                                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                                <a href="#product-preview" data-toggle="modal" class="fa fa-expand modalProduct"></a>
                                                            </div>
                                                        </div> 
                                                @endif                                             
                                                <div class="product-caption"> 
                                                        <h3 class="product-title">
                                                            <a href="{{ route('products.show', array($product->slug)) }}"> <span class="light-font">{{ $product->name }}</a>
                                                        </h3>
                                                        <div class="price"> 
                                                            @if($product->promotion == 1)
                                                                <strong class="clr-txt">${{ number_format(($product->pricing)+(($product->pricing)*$product->discount)/100)}}</strong> 
                                                                <del class="light-font">${{ number_format($product->pricing) }}</del>
                                                            @else
                                                                <strong class="clr-txt">${{ number_format($product->pricing) }}</strong>
                                                            @endif
                                                        </div>
                                                </div>
                                            </div>                                            
                                        </div> 
                                    @endforeach                                   
                                </div>
                            </div>
                            @else
                                <div id="naturix-tab-{{ $count }}" class="tab-pane fade"> 
                                    <div class="naturix-slider-{{ $count }} dots-{{ $count }}"> 
                                        @foreach($scopecategorie->available as $product)
                                            <div class="item"> 
                                                <div class="product-box"> 
                                                    @if ($product->hasThumbnail())   
                                                            <div class="product-media"> 
                                                                <a href="{{ route('products.show', array($product->slug)) }}" title="{{ $product->sku }}" class="">
                                                                    <img class="prod-img" alt="{{ $product->sku }}" src="/assets/img/products/{{ $product->thumbnail()->filename }}">     
                                                                </a>
                                                                <img class="shape" alt="" src="/assets/img/icons/shap-small.png">  
                                                                <div class="prod-icons"> 
                                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand modalProduct"></a>
                                                                </div>
                                                            </div> 
                                                    @endif                                             
                                                    <div class="product-caption"> 
                                                            <h3 class="product-title">
                                                                <a href="{{ route('products.show', array($product->slug)) }}"> <span class="light-font">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="price"> 
                                                                @if($product->promotion == 1)
                                                                    <strong class="clr-txt">${{ number_format(($product->pricing)+(($product->pricing)*$product->discount)/100)}}</strong> 
                                                                    <del class="light-font">${{ number_format($product->pricing) }}</del>
                                                                @else
                                                                    <strong class="clr-txt">${{ number_format($product->pricing) }}</strong>
                                                                @endif
                                                            </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        @endforeach                                   
                                    </div>
                                </div>

                            @endif 
                        @endforeach

                    </div>

                </div>
            </section>


