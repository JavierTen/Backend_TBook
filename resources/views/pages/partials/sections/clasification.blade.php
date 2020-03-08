     <section class="organic-all sec-space-bottom">
                <div class="pattern"> 
                    <img alt="" src="assets\img\icons\white-pattern.png">
                </div>
               
                <div class="container">                    
                    <div class="organic-wrap"> 
                        <img class="logo-img" alt="" src="assets\img\logo\logo-1.png" style="max-height: 100%;">
                        <div class="tabs-box">
                            <ul class="theme-tabs">
                                <li class=""><a href="#product-tab-1" data-toggle="tab">  <span class="light-font"> TODOS</span></a></li>                                
                                <li class="active"><a href="#product-tab-2" data-toggle="tab"> <span class="light-font"> NUEVOS</span></a></li>                               
                                <li class=""><a href="#product-tab-3" data-toggle="tab"> <span class="light-font"> DESTACADOS</span></a></li>
                                <li class=""><a href="#product-tab-4" data-toggle="tab"> <span class="light-font"> PROMOCIONES </span>  </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container"> 
                    <div class="col-md-12"> 
                        <div class="tab-content organic-content row"> 
                            <div id="product-tab-1" class="tab-pane fade active in"> 
                                   <div class="product-slider-1 dots-1">
                                    @foreach($alls as $all)
                                    <div class="item"> 
                                        <div class="product-box"> 
                                                     @if ($all->hasThumbnail())   
                                                        <div class="product-media"> 
                                                            <a href="{{ route('products.show', array($all->sku)) }}" title="{{ $all->sku }}" class="">
                                                                <img class="prod-img" alt="{{ $all->sku }}" src="/assets/img/products/{{ $all->thumbnail()->filename }}">     
                                                            </a>
                                                            <img class="shape" alt="" src="assets\img\icons\shap-small.png">  
                                                            <div class="prod-icons"> 
                                                                
                                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                                <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                            </div>
                                                        </div> 
                                                    @endif                                                                                        
                                                    <div class="product-caption"> 
                                                        <h3 class="product-title">
                                                            <a href="{{ route('products.show', array($all->sku)) }}"> <span class="light-font">{{ $all->name }}</a>
                                                        </h3>
                                                        <div class="price"> 
                                                            @if($all->promotion == 1)
                                                                <strong class="clr-txt">${{ number_format(($all->pricing)+(($all->pricing)*$all->discount)/100)}}</strong> 
                                                                <del class="light-font">${{ number_format($all->pricing) }}</del>
                                                            @else
                                                                <strong class="clr-txt">${{ number_format($all->pricing) }}</strong>
                                                            @endif
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                @endforeach
                                   </div>
                            </div>
                            <div id="product-tab-2" class="tab-pane fade"> 
                                <div class="product-slider-1 dots-1"> 
                                    @foreach($news as $new)
                                        <div class="item"> 
                                            <div class="product-box"> 
                                                        @if ($new->hasThumbnail())   
                                                            <div class="product-media"> 
                                                                <a href="{{ route('products.show', array($new->sku)) }}" title="{{ $new->sku }}" class="">
                                                                    <img class="prod-img" alt="{{ $new->sku }}" src="/assets/img/products/{{ $new->thumbnail()->filename }}">     
                                                                </a>
                                                                <img class="shape" alt="" src="assets\img\icons\shap-small.png">  
                                                                <div class="prod-icons"> 
                                                                    
                                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                                </div>
                                                            </div> 
                                                        @endif                                                                                        
                                                        <div class="product-caption"> 
                                                            <h3 class="product-title">
                                                                <a href="{{ route('products.show', array($new->sku)) }}"> <span class="light-font">{{ $new->name }}</a>
                                                            </h3>
                                                            <div class="price"> 
                                                                @if($new->promotion == 1)
                                                                    <strong class="clr-txt">${{ number_format(($new->pricing)+(($new->pricing)*$new->discount)/100)}}</strong> 
                                                                    <del class="light-font">${{ number_format($new->pricing) }}</del>
                                                                @else
                                                                    <strong class="clr-txt">${{ number_format($new->pricing) }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="product-tab-3" class="tab-pane fade"> 
                                <div class="product-slider-1 dots-1"> 
                                    @foreach($featureds as $featured)
                                        <div class="item"> 
                                            <div class="product-box"> 
                                                        @if ($featured->hasThumbnail())   
                                                            <div class="product-media"> 
                                                                <a href="{{ route('products.show', array($featured->sku)) }}" title="{{ $featured->sku }}" class="">
                                                                    <img class="prod-img" alt="{{ $featured->sku }}" src="/assets/img/products/{{ $featured->thumbnail()->filename }}">     
                                                                </a>
                                                                <img class="shape" alt="" src="assets\img\icons\shap-small.png">  
                                                                <div class="prod-icons"> 
                                                                    
                                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                                </div>
                                                            </div> 
                                                        @endif                                                                                        
                                                        <div class="product-caption"> 
                                                            <h3 class="product-title">
                                                                <a href="{{ route('products.show', array($featured->sku)) }}"> <span class="light-font">{{ $featured->name }}</a>
                                                            </h3>
                                                            <div class="price"> 
                                                                @if($featured->promotion == 1)
                                                                    <strong class="clr-txt">${{ number_format(($featured->pricing)+(($featured->pricing)*$featured->discount)/100)}}</strong> 
                                                                    <del class="light-font">${{ number_format($featured->pricing) }}</del>
                                                                @else
                                                                    <strong class="clr-txt">${{ number_format($featured->pricing) }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="product-tab-4" class="tab-pane fade"> 
                                <div class="product-slider-1 dots-1"> 
                                    @foreach($bests as $best)
                                        <div class="item"> 
                                            <div class="product-box"> 
                                                         @if ($best->hasThumbnail())   
                                                            <div class="product-media"> 
                                                                <a href="{{ route('products.show', array($best->sku)) }}" title="{{ $best->sku }}" class="">
                                                                    <img class="prod-img" alt="{{ $best->sku }}" src="/assets/img/products/{{ $best->thumbnail()->filename }}">     
                                                                </a>
                                                                <img class="shape" alt="" src="assets\img\icons\shap-small.png">  
                                                                <div class="prod-icons"> 
                                                                    
                                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                                </div>
                                                            </div> 
                                                        @endif                                                                                        
                                                        <div class="product-caption"> 
                                                            <h3 class="product-title">
                                                                <a href="{{ route('products.show', array($best->sku)) }}"> <span class="light-font">{{ $best->name }}</a>
                                                            </h3>
                                                            <div class="price"> 
                                                                @if($best->promotion == 1)
                                                                    <strong class="clr-txt">${{ number_format(($best->pricing)+(($best->pricing)*$best->discount)/100)}}</strong> 
                                                                    <del class="light-font">${{ number_format($best->pricing) }}</del>
                                                                @else
                                                                    <strong class="clr-txt">${{ number_format($best->pricing) }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
