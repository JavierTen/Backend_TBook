$(document).ready(function() {
                    
      $('#productSelect').select2();


       $("#productSelect").on('change', function (e) {

                  var sku = $(this).val();
                                
                  $.ajax({           
                      url: '/manager/sales/goods/finger/'+sku,
                      type: "GET",
                      datatype: "html",
                  }).done(function(data){   

                    var pricing = data.pricing;

                    $("#modalProductUp").find("input[name='amount']").val(1); 
                    $("#productPricing").val(pricing);                   

                      var total = pricing*1;
                      total = formatNumber.new(total);
                      $("#totalGoods").text('$'+total);
   
                      //$("#contentHeader").empty().html(data);            
                  })
                  .fail(function(jqXHR, ajaxOptions, thrownError){
                      
                  });
              
      });
      
      $("#addGood").click(function(){

                              var amount = $("#modalProductUp").find("input[name='amount']").val();    
                              var sku = $("#productSelect").val();        

                              $.post(
                                  '/manager/orders/goods/store',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'amount':amount,
                                      'sku':sku,
                                  }, 
                                  function(data){         
                                    load();    
                                    total();          
                                  }
                              );

      });

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
                    var pricing = parseFloat(pricing);   
                }else{
                    var pricing = pricing.replace('.', ',');
                    var pricing = parseFloat(pricing);   
                }



                var total = amount*pricing;
                total = formatNumber.new(total);
                $("#totalGoods").text('$'+total);

    }).keyup();


    function load() {

              $.ajax({           
                  url:  '/manager/sales/goods/load',
                  type: "GET",
                  datatype: "html",

              }).done(function(data){       
                 $("#listGoods").empty().html(data);            
              })
              .fail(function(jqXHR, ajaxOptions, thrownError){
                  console.log('No response from server');
              });
    }; 


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

  function total() {

              $.ajax({           
                  url:  '/manager/sales/goods/total',
                  type: "GET",
                  datatype: "html",

              }).done(function(data){       

                var total = data;
                  $("#totalSale").val(total); 
                total = formatNumber.new(total);
                $("#saleTotal").text('$'+total);         
              })
              .fail(function(jqXHR, ajaxOptions, thrownError){
                  console.log('No response from server');
          });

  };
            
});