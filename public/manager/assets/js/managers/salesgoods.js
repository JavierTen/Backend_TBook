$(document).ready(function() {
  
           
                 
      $("#addGood").click(function(){

                              var amount = $("#productAmount").val(); 
                              var pricing = $("#productPricing").val();   
                              var discount = $("#productDiscount").val();       
                              var sku = $("#productSelect").val();    

                              var pricing = pricing.replace('.', ',');
                              var pricing = parseFloat(pricing);   
                           
                              $.ajax({           
                                  url:  "/manager/sales/goods/store",
                                  type: "POST",
                                  datatype: "html",
                                  data: {
                                      _token: $('meta[name=csrf-token]').attr('content'),
                                      amount: amount, 
                                      pricing: pricing,  
                                      discount: discount, 
                                      sku: sku,                                     
                                    },
                                  success: function (data) {             

                                     $("#divNotifications").empty().html(data); 

                                    clearModalProducts();      
                                    //$('#modalProductUp').modal('hide');    
                                    load();    
                                    total();  

                                  },
                                  error: function (jqXHR, textStatus, errorThrown) {
                                      if (jqXHR.status == 500) {
                                          //alert('Internal error: ' + jqXHR.responseText);
                                      } else {
                                          //alert('Unexpected error.');
                                      }
                                  }
                              });




                           
      });


      $("#updateGood").click(function(e){
            
            var token = $("#modalProductUp").find("input[name='tokenGood']").val();
           
                  var amount = $("#productAmount").val(); 
                  var pricing = $("#productPricing").val();   
                  var discount = $("#productDiscount").val();   
                          
            $.post(
                '/manager/sales/goods/update/'+token,

                {   '_token':$('meta[name=csrf-token]').attr('content'),
                    'token':token,     
                    'amount':amount,   
                    'pricing':pricing,     
                    'discount':discount,     
                }, 
                function(data){  
                    $('#modalProductUp').modal('hide'); 
                    $(".modal-backdrop").remove();  
                    $("#divNotifications").empty().html(data); 
                    load(); 
                    total(); 
                }
            );       
      });



      function clearModalProducts() {

                $("#productAmount").val(0); 
                $("#productPricing").val(0);   
                $("#productDiscount").val(0);  
                $("#productDiscount").val(0);  
                $("#select2-productSelect-container").text(''); 
                $("#totalGoods").text('$'+0);
              
    }; 
      

      var formatNumber = {
                 separador: ".", // separador para los miles
                 sepDecimal: ',', // separador para los decimales
                 formatear:function (num){
                  num +='';
                  var splitStr = num.split('.');
                  var splitLeft = splitStr[0];
                  var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
                  var regx = /(\d+)(\d{3})/;
                  while (regx.test(splitLeft)) {
                  splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
                  }
                  return this.simbol + splitLeft  +splitRight;
                 },
                 new:function(num, simbol){
                  this.simbol = simbol ||'';
                  return this.formatear(num);
                 }
        }

       $("#productAmount").on('keyup', function(){

                var amount = $(this).val();
                var amount = amount.replace(/,/g, "");           

                var amount  =  $("#modalProductUp").find("input[name='amount']").val(); 

                if (amount == "") {
                    amount = 1;
                    var amount = parseFloat(amount);   
                }else{
                    var amount = amount.replace('.', ',');
                    var amount = parseFloat(amount);   
                }

                var pricing  =  $("#modalProductUp").find("input[name='pricing']").val(); 

                if (pricing == "") {
                    pricing = 0;
                    pricing = parseFloat(pricing);   
                }else{
                    pricing = pricing.replace(',', '');
                    pricing = parseFloat(pricing);   
                }

                var discount  =  $("#modalProductUp").find("input[name='discount']").val(); 

                if (discount == "") {
                    discount = 0;
                    discount = parseFloat(discount);   
                }

                var total = amount*(pricing-(pricing*discount)/100);
                total = formatNumber.new(total);
                $("#totalGoods").text('$'+total);
    }).keyup();


    $("#productDiscount").on('keyup', function(){

                var discount = $(this).val();
                var discount = discount.replace(/,/g, "");           

                var amount  =  $("#modalProductUp").find("input[name='amount']").val(); 

                if (amount == "") {
                    amount = 1;
                    var amount = parseFloat(amount);   
                }else{
                    var amount = amount.replace('.', ',');
                    var amount = parseFloat(amount);   
                }

                var pricing  =  $("#modalProductUp").find("input[name='pricing']").val(); 

                if (pricing == "") {
                    pricing = 0;
                    pricing = parseFloat(pricing);   
                }else{
                    pricing = pricing.replace(',', '');
                    pricing = parseFloat(pricing);   
                }


                if (discount == "") {
                    discount = 0;
                    discount = parseFloat(discount);   
                }

                var total = amount*(pricing-(pricing*discount)/100);
                total = formatNumber.new(total);
                $("#totalGoods").text('$'+total);

    }).keyup();

   
    $("#productPricing").on('keyup', function(){

                var pricing = $(this).val();      

                var amount  =  $("#modalProductUp").find("input[name='amount']").val(); 

                if (amount == "") {
                    amount = 1;
                    var amount = parseFloat(amount);   
                }else{
                    var amount = amount.replace('.', ',');
                    var amount = parseFloat(amount);   
                }


                if (pricing == "") {
                    pricing = 0;
                    pricing = parseFloat(pricing);   
                }else{
                    pricing = pricing.replace(',', '');
                    pricing = parseFloat(pricing);   
                }


                var discount  =  $("#modalProductUp").find("input[name='discount']").val(); 
                
                if (discount == "") {
                    discount = 0;
                    discount = parseFloat(discount);   
                }

                var total = amount*(pricing-(pricing*discount)/100);
                total = formatNumber.new(total);
                $("#totalGoods").text('$'+total);

    }).keyup();




    function loadListing() {

                var amount = $(this).val();
                var amount = amount.replace(/,/g, "");           

                var amount  =  $("#modalProductUp").find("input[name='amount']").val(); 

                if (amount == "") {
                    amount = 0;
                    var amount = parseFloat(amount);   
                }else{
                    var amount = amount.replace('.', ',');
                    var amount = parseFloat(amount);   
                }


                var pricing  =  $("#modalProductUp").find("input[name='pricing']").val(); 

                if (pricing == "") {
                    pricing = 0;
                    var pricing = parseFloat(pricing);   
                }else{
                    var pricing = pricing.replace('.', ',');
                    var pricing = parseFloat(pricing);   
                }


                total = amount*pricing;
                $("#totalGoods").text('$'+total);


    };  

  
            
});