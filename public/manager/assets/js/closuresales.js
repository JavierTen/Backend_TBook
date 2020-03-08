$(document).ready(function() {
        

     $("#paymentSale").on('keyup', function(){

                  var total  =  $("#totalSale").val(); 

                  var payment = $(this).val();
                  var payment = payment.replace(/,/g, "");           
                 
                  if (payment == "") {
                      payment = 0;
                      var amount = parseFloat(payment);   
                  }else{
                      var payment = payment.replace('.', ',');
                      var payment = parseFloat(payment);   
                  }


                   if (payment == 0) {
                       var returned = 0;
                        
                  }else{ 
                     var returned = payment-total;
                  }

                  $("#returnSale").val(returned);
                  returned = formatNumber.new(returned);
                  $("#returnedSale").text('$'+returned);

      }).keyup();




      $('#discountsSelect').select2();
      $('#methodsSelect').select2();

      $('#btnProducts').click(function() {
              $("#modalProductUp").children('.modal-dialog').addClass('modal-lg');               
              $('#modalProductUp').modal('show');
              $('#modalProductUp').appendTo("body");
      });


      $("#btnSave").click(function(){
                                
                              var token = $("#tokenOrder").val();     

                              $.post(
                                  '/manager/sales/sale/sale',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'token':token,
                                  }, 
                                  function(data){                               
                                          load();    
                                          total();  
                                          $("#divNotifications").empty().html(data); 
                                          $('#modalOrderUp').modal('hide');                                                   
                                  }
                              );

      });



      $("#btnSale").click(function(){
                       
                  returns = validationTotal(); 

                  if (returns == true) {

                      alert("si cubre el valor");
                      updateOrder(); 
                      storeSale(); 

                    }else{  
                      alert("No cubre el valor");
                    }


                              

      });

      $('#btnOrder').click(function() {

              loadPlace();

              $("#modalOrderUp").children('.modal-dialog').addClass('modal-lg');               
              $('#modalOrderUp').modal('show');
              $('#modalOrderUp').appendTo("body");

      });
            
      $('.autonumeric').autoNumeric('init', { 
          mDec: 0 ,
          vMin: '0.00',
          vMax: '9999999999999.99'
        });



      $("#addGood").click(function(){

                              var amount = $("#modalProductUp").find("input[name='amount']").val();    
                              var sku = $("#productSelect").val();        

                              $.post(
                                  '/manager/sales/store',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'status':amount,
                                  }, 
                                  function(data){         
                                    load();    
                                    total();          
                                  }
                              );

      });

       function loadPlace() {

              $.ajax({           
                  url:  '/manager/places/get',
                  type: "GET",
                  datatype: "html",

              }).done(function(data){       
                 $("#divPlace").empty().html(data);            
              })
              .fail(function(jqXHR, ajaxOptions, thrownError){
                  console.log('No response from server');
              });
        }; 


       

        function storeSale() {

                              var token = $("#tokenOrder").val(); 
                              var payment = $("#paymentSale").val();  

                              var lastname = $("#lastnameSale").val(); 
                              var firstname = $("#firstnameSale").val(); 
                              var cellphone = $("#cellphoneSale").val();
                              var email = $("#emailSale").val();   
                              var coupon = $("#couponSale").val(); 
                              var payment = $("#paymentSale").val();
                              var discount = $("#discountsSelect").val();
                              var method = $("#methodsSelect").val();      

                              $.post(
                                  '/manager/sales/sale/store',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'token':token,
                                      'payment':payment,
                                      'lastname':lastname,
                                      'firstname':firstname,
                                      'token':token,
                                      'cellphone':cellphone,
                                      'email':email,
                                      'coupon':coupon,
                                      'discount':discount,
                                      'method':method,
                                  }, 
                                  function(data){   
                                          $("#divNotifications").empty().html(data);                                                    
                                  }
                              );
        }; 

        function updateOrder() {

                          var token = $("#tokenOrder").val();     

                              $.post(
                                  '/manager/sales/order/update',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'token':token,
                                  }, 
                                  function(data){ 

                                  }
                              );

             
        }; 



        function validationTotal() {

                   var returnsale = $("#returnSale").val();
                   var total = $("#totalSale").val();    

                   if (returnsale >= 0) {
                       return true;
                        
                  }else{ 
                       return false;
                  }


             
        }; 



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

$(document).keypress(function(e) {
    if(e.which == 124) {
       $("#modalProductUp").children('.modal-dialog').addClass('modal-lg');               
                        $('#modalProductUp').modal('show');
                        $('#modalProductUp').appendTo("body");
    }
});  


