 <table class="product-table">
                                <thead class="">
                                    <tr>                                                                       
                                        <th>Detalle</th>  
                                        <th></th> 
                                        <th>Precio</th> 
                                        <th>Cantidad</th>
                                        <th>Total</th>                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($shoppings as $shopping)

                                     <tr>
                                        <td class="image" style="    width: 210px !important;    height: 80px !important;">
                                            <div class="white-bg">
                                                <a class="media-link" href="{{ route('products.show', array($shopping->product->slug)) }}">
                                                    <img class="product-img" src="/assets/img/products/{{  $shopping->product->thumbnail()->filename }}" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="description">
                                            <div class="rating">
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>
                                                <span class="star active"></span>                                               
                                            </div>
                                            <h6 class="fsz-12 gray-color"> Overall Rating : 5/5 </h6>
                                            <div class="divider-2"></div>
                                            <h3 class="product-title no-margin"> <a href="{{ route('products.show', array($shopping->product->slug)) }}"> <span class="light-font">{{ $shopping->product->name }}</strong> </a> </h3>
                                            <h6>{{ strtoupper($shopping->product->categorie->name) }}</h6>                                                                                                                             
                                        </td>    
                                        <td> 
                                            <div class="price fontbold-2"> 
                                                @if($shopping->product->promotion == 1)
                                                    <strong class="fsz-20">${{ number_format(($shopping->product->pricing)+(($shopping->product->pricing)*$shopping->product->discount)/100)}}</strong> 
                                                    <del class="light-font">${{ number_format($shopping->product->pricing) }}</del>
                                                @else
                                                    <strong class="fsz-20">${{ number_format($shopping->product->pricing) }}</strong>
                                                @endif


                                            </div>
                                        </td> 
                                        <td>
                                            <div class="prod-btns fontbold-2">
                                                <div class="quantity" id="quantityShopping" >
                                                    <button class="btn minus"><i class="fa fa-minus-circle"></i></button>
                                                        <input title="Qty" value="{{ $shopping->quantity }}" class="form-control qty" type="text"disabled>
                                                        <input type="hidden" class="purchase" value="{{$shopping->id}}"></input>
                                                    <button class="btn plus"><i class="fa fa-plus-circle"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 
                                            <strong class="clr-txt fsz-20 fontbold-2">${{ number_format($shopping->total) }}</strong> 
                                            <a class="remove fa fa-close clr-txt destroyPurchases">
                                                <input type="hidden" name="purchase" value="{{$shopping->id}}">
                                            </a>
                                        </td>                                       
                                    </tr> 
                                    @endforeach  

                                        
                                    
                                </tbody>                               
                            </table>



         <script type="text/javascript">

                  

                     $(".destroyPurchases").click(function(e){                    
                                           
                                            var csrf = $('#csrf-token').val();  
                                            var purchase = $(this).find("input[name='purchase']").val();
                                            var shoppingcart = $("#updatePurchases").find("input[name='identifierShoppingcart']").val();  

                                            $.post(
                                                '/purchase/destroy',
                                                {   
                                                    '_token': csrf,
                                                    'shopping':purchase, 
                                                    'shoppingcart':shoppingcart
                                                },function(data) {   
                                                    getPurchases(shoppingcart);    
                                                    getShoppings(shoppingcart);                                 
                                                    getCalculate(shoppingcart); 

                                                }).done(function() { 
                                                   //alert('Request done!'); 
                                                })
                                                .fail(function(jqxhr, settings, ex) { 
                                                    
                                                });
                    });


                    function getCalculate(shoppingcart) {

                                    var csrf = $('#csrf-token').val(); 

                                    $.post(
                                        '/purchase/calculate',
                                        {   
                                            '_token': csrf,
                                            'shoppingcart':shoppingcart, 
                                        }, 
                                        function(data){  
                                            $("#divCalculate").empty().html(data);       
                                        }
                                    ); 
                    }; 

                    function getPurchases(shoppingcart) {

                                    var csrf = $('#csrf-token').val(); 

                                    $.post(
                                        '/purchase/purchases',
                                        {   
                                            '_token': csrf,
                                            'shoppingcart':shoppingcart, 
                                        }, 
                                        function(data){  
                                            $("#divPurchases").empty().html(data);      
                                        }
                                    ); 
                    }; 


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

        </script>

