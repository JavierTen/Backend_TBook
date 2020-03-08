           <div class="right"> 
        <strong class="fsz-20 fontbold-2">SUBTOTAL : 
            <span class="clr-txt"> ${{ number_format($subtotal) }}</span> 
        </strong> 
    </div>


        @push('scripts')  

            <script>  
                    $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                    });
            </script>

            <<script src="{{ asset('assets\js\calculate.js') }}" type="text/javascript"></script>  

           
        @endpush


