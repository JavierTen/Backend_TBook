        <div class="shopping-cart-element-wrap">
            
            <h5 class="title-shopping-cart">Detalle Orden</h5>
            
            <div class="shopping-cart-element-content">                
                    <table class="cart-total">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <td>Subtotal:</td>
                                                                    <td><span class="amount">${{ number_format($subtotal) }}</span></td>
                                                                </tr>
                                                                <tr class="shipping">
                                                                    <td>Costo de envío:</td>
                                                                    <td><span class="amount">${{ number_format($shipping) }}</span></td>
                                                                </tr>
                                                                @if($couppon!=0)
                                                                     <tr class="shipping">
                                                                        <td>Descuento:</td>
                                                                        <td><span class="amount">${{ number_format($couppon) }}</span></td>
                                                                     </tr>
                                                                @endif                                                         
                                                                <tr class="grand-total">
                                                                    <td>Total:</td>
                                                                    <td>${{ number_format($subtotal+$shipping+$couppon) }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
             </div>
         </div>


        @push('scripts')  

            <script>  
                    $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                    });
            </script>

            <script src="{{ asset('assets\js\calculate.js') }}" type="text/javascript"></script>  

           
        @endpush


