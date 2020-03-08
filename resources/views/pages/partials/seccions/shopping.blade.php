<div class="cart-hover">
                            <a href="#"> <img alt="" src="\assets\img\icons\cart-icon.png"> </a>
                            <span class="cnt crl-bg">{{ $count }}</span> <span class="price">$ {{ number_format($subtotal) }}</span>
                            <ul class="pop-up-box cart-popup">

                                @if(!empty($shoppings))
                                        @foreach($shoppings as $shopping)
                                             <li class="cart-list">
                                                <div class="cart-img"> <img src="/assets/img/products/{{  $shopping->product->thumbnail()->filename }}" alt=""> </div>
                                                <div class="cart-title">
                                                    <div class="fsz-16">
                                                        <a href="{{ route('products.show', array($shopping->product->slug)) }}"> <span class="light-font"> {{ $shopping->product->name }}</strong></a>
                                                        <h6 class="sub-title-1">Cantidad : <strong class="clr-txt">{{ $shopping->quantity }}</strong>
                                                            </h6>
                                                    </div>
                                                    <div class="price"> 
                                                        <strong class="clr-txt">${{ number_format( $shopping->total) }}</strong>
                                                    </div>
                                                </div>
                                                <div class="close-icon destroyShoppings"> <i class="fa fa-close clr-txt"></i> 
                                                    <input type="hidden" name="shopping" value="{{$shopping->id}}">
                                                </div>
                                            </li>                              
                                    @endforeach  
                                @else
                                   <li class="cart-list ">
                                            
                                            <div class="cart-center text-center ">
                                                <div class="fsz-16">
                                                    <a href="#"> <span class="light-font">  Vacio</span> </a>
                                                    <h6 class="sub-title-1">Mercosan <strong class="clr-txt">Carrito</strong></h6>
                                                </div>
                                            </div>
                                        </li>



                                @endif                              

                                <li class="cart-list sub-total">
                                    <div class="pull-left"> 
                                        <strong>SUBTOTAL</strong>
                                    </div>
                                    <div class="pull-right"> 
                                        <strong class="clr-txt">${{ number_format($subtotal) }}</strong>
                                    </div>
                                </li>
                                <li class="cart-list buttons">
                                    <div class="pull-left"> 
                                        <a href="{{ route('shoppings') }}" class="theme-btn-sm-2">Carrito</a>
                                    </div>
                                    <div class="pull-right"> 
                                        <a href="{{ route('checkouts') }}" class="theme-btn-sm-3"> Cotizar </a>
                                    </div>
                                </li>
                            </ul>
</div>


        <script type="text/javascript">

                            $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                            });

                            /* ================================================
----------------- Hustle Main.js ------------- */   

                
                            $('.cart-product-quantity').TouchSpin({
                                verticalbuttons: true,                   
                                verticalupclass: 'fa fa-angle-up',
                                verticaldownclass: 'fa fa-angle-down',
                                initval: 1,
                                min: 1,
                                max: 100,
                                stepinterval: 50,
                                maxboostedstep: 100

                            });


                            function getShoppings(shoppingcart) {

                                            var csrf = $('#csrf-token').val(); 

                                            $.post(
                                                '/purchase/shopping',
                                                {   
                                                    '_token': csrf,
                                                    'shoppingcart':shoppingcart, 
                                                }, 
                                                function(data){  
                                                    $("#divShoppings").empty().html(data);       
                                                }
                                            ); 
                            }; 
                                    
                            $(".destroyShoppings").click(function(e){                    
                                                   
                                                    var csrf = $('#csrf-token').val();  
                                                    var shopping = $(this).find("input[name='shopping']").val();                                                 
                                                    var shoppingcart = $("#updateShoppings").find("input[name='identifierShoppingcart']").val();  

                                                    e.preventDefault();
                                                    $.post(
                                                        '/purchase/destroy',
                                                        {   
                                                            '_token': csrf,
                                                            'shopping':shopping, 
                                                            'shoppingcart':shoppingcart
                                                        },function(data) {   
                                                            getShoppings(shoppingcart);     
                                                        }).done(function() { 
                                                           //alert('Request done!'); 
                                                        })
                                                        .fail(function(jqxhr, settings, ex) { 
                                                            
                                                        });
                            });                        

    </script>
