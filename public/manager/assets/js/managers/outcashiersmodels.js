   $(document).ready(function() {

 $(".open-item").click(function(){
                                  var token = $(this).find("input[name='tokenCashier']").val();
                                  $("#openCashier").val(token);        
                                  $("#cashierToken").val(token); 
                                  
                                  $("#modalOpenUp").children('.modal-dialog').addClass('modal-lg');   
                                  $('#modalOpenUp').modal('show');
                                  $('#modalOpenUp').appendTo("body");

                              });   

                              $(".close-item").click(function(){
                                  var token = $(this).find("input[name='tokenCashier']").val();
                                  $("#tokenCashierClose").val(token); 
                                  get();

                                  $("#modalCloseUp").children('.modal-dialog').addClass('modal-lg');   
                                  $('#modalCloseUp').modal('show');
                                  $('#modalCloseUp').appendTo("body");
                                  
                              });  
                              
      function get() {

         //var token =  $("#closeCashier").val(); 
         var token = $("#tokenCashierClose").val();    

              $.ajax({           
                    url:  '/manager/closing/get/'+token,
                    //url:  '/seller/closing/get/'+token,
                    type: "GET",
                    datatype: "html",

                }).done(function(data){     
                   $("#divNotifications").empty().html(data);  

                    var name = data.name;
                    var closing = data.closing;
                    var cashier = data.cashier;
                    var base = data.base;
                    var total = data.total;
                    var count = data.count;
                    var card = data.card;
                    var cash = data.cash;

                    base = base.replace('.', ',');
                    base = parseFloat(base);  
                    
                    //var pricing = data.pricing;
                    //var name = data.name;
                    base = formatNumber.new(base);
                    total = formatNumber.new(total);
                    card = formatNumber.new(card);
                    cash = formatNumber.new(cash);

                    //$('#productSelect').attr("disabled", true);
                    //$("#select2-productSelect-container").text(name);
                    $("#tokenCashier").val(cashier);   
                    $("#tokenClosing").val(closing);    
                    $("#baseCashiers").val(base); 
                    $("#cardCashier").val(card);           
                    $("#cashCashier").val(cash);  
                    $("#totalCashier").val(total);  
                    $("#nameCashiers").text(name);  
                    //$("#productPricing").val(pricing);  
                    $("#totalGoods").text('$'+total);  

                    //$("#modalProductUp").children('.modal-dialog').addClass('modal-lg');     
                    //$('#modalProductUp').appendTo("body");            
                    //$('#modalProductUp').modal('show'); 
                   
            

                })
                .fail(function(jqXHR, ajaxOptions, thrownError){
                    console.log('No response from server');
                });
      }

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

 });