$(document).ready(function() {
        

      $("#addOrder").click(function(){
                                  
                                var firstname = $("#modalOrderUp").find("input[name='firstname']").val(); 
                                var cellphone = $("#modalOrderUp").find("input[name='cellphone']").val();  
                                var email = $("#modalOrderUp").find("input[name='email']").val();  
                                var place = $("#placeSelect").val();     

                                $.post(
                                    '/manager/orders/order/store',
                                    {
                                        '_token':$('meta[name=csrf-token]').attr('content') ,
                                        'place':place,
                                        'firstname':firstname,
                                        'cellphone':cellphone,
                                        'email':email,
                                    }, 
                                    function(data){                               
                                            load();    
                                            total();  
                                            $("#divNotifications").empty().html(data); 
                                            $('#modalOrderUp').modal('hide');  

                                                     
                                    }
                                );

     });


     function load() {

                $.ajax({           
                    url:  '/manager/orders/goods/load',
                    type: "GET",
                    datatype: "html",

                }).done(function(data){       
                   $("#listGoods").empty().html(data);            
                })
                .fail(function(jqXHR, ajaxOptions, thrownError){
                    console.log('No response from server');
                });
      }; 

      function total() {

                    $.ajax({           
                        url:  '/manager/orders/goods/total',
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

