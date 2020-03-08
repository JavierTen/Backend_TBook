$(document).ready(function() {
      
      $("#createInventarie").click(function(){
                                
                              var quantity = $("#productQuantity").val();    
                              var sku = $("#productSelect").val();        

                              $.post(
                                  '/manager/inventaries/store',
                                  {
                                      '_token':$('meta[name=csrf-token]').attr('content') ,
                                      'sku':sku,
                                      'quantity':quantity
                                  }, 
                                  function(data){ 

                                          loadListing();   
                                          $("#divNotifications").empty().html(data); 
                                          $('#modalInventarie').modal('hide');  

                                                   
                                  }
                              );

      });



      $("#updateInventarie").click(function(e){
            
            var token = $("#modalInventarie").find("input[name='tokenInventarie']").val();
            var quantity = $("#productQuantity").val();
                          
            $.post(
                '/manager/inventaries/update/'+token,

                {   '_token':$('meta[name=csrf-token]').attr('content'),
                    'token':token,     
                    'quantity':quantity,    
                }, 
                function(data){  
                    $('#modalInventarie').modal('hide'); 
                    $(".modal-backdrop").remove();  
                    $("#divNotifications").empty().html(data); 
                    loadListing(); 
                }
            );       
    });

    function loadListing() {

            $.ajax({           
                url:  '/manager/inventaries/listing',
                type: "GET",
                datatype: "html",

            }).done(function(data){       
               $("#listInventaries").empty().html(data);            
            })
            .fail(function(jqXHR, ajaxOptions, thrownError){
                console.log('No response from server');
            });
    };  


      $('#btnInventarie').click(function() {
             load(); 
            $("#modalProductUp").children('.modal-dialog').addClass('modal-lg');               
            $('#modalProductUp').modal('show');
            $('#modalProductUp').appendTo("body");
            $('#title').text('Crear Inventario');
            $('#updateInventarie').hide('0');
            $('#createInventarie').show('0');   
            $("#modalInventarie").children('.modal-dialog').addClass('modal-lg');               
            $('#modalInventarie').modal('show');
            $('#modalInventarie').appendTo("body");  


      });


     function load() {

              $.ajax({           
                  url:  '/manager/products/get',
                  type: "GET",
                  datatype: "html",

              }).done(function(data){       
                 $("#listProducts").empty().html(data);            
              })
              .fail(function(jqXHR, ajaxOptions, thrownError){
                  console.log('No response from server');
          });


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
                    var pricing = parseFloat(pricing);   
                }else{
                    var pricing = pricing.replace('.', ',');
                    var pricing = parseFloat(pricing);   
                }



                var total = amount*pricing;
                total = formatNumber.new(total);
                $("#totalGoods").text('$'+total);

    }).keyup();


  });



$(document).keypress(function(e) {
    if(e.which == 124) {
       $("#modalProductUp").children('.modal-dialog').addClass('modal-lg');               
                        $('#modalProductUp').modal('show');
                        $('#modalProductUp').appendTo("body");
    }
});  


