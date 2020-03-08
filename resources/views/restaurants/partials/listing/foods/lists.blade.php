 @if (!empty($foods))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:20%">Nombre</th>
                <th style="width:10%">Sku</th>     
                <th style="width:10%">Precio</th>     
                <th style="width:10%">Estado</th>           
                <th style="width:10%">Categoria</th>       
                <th style="width:10%">Restaurante</th>                    
                <th style="width:25%">Fecha</th>
                <th style="width:15%">Acciones</th>
            </tr>
        </thead>
        <tbody>
              @foreach($foods as $food)
                        <tr>
                          <td class="v-align-middle semi-bold">
                            <p>{{ $food->name }}</p>
                          </td>
                          <td class="v-align-middle">
                              <p>{{ $food->sku }}</p>
                          </td> 
                          <td class="v-align-middle">
                            <p>${{ number_format($food->price) }}
                              </p>
                          </td>                       
                          @if($food->featured == 1)
                          <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">Activo</a>  
                            </td>
                          @else
                            <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">Inactivo</a>  
                            </td>
                          @endif                        
                          <td class="v-align-middle">                        
                              <a href="#" class="btn btn-tag">{{ $food->category->name }}</a>                         
                          </td>     
                                             
                          <td class="v-align-middle">                        
                            <a href="#" class="btn btn-tag">{{ $food->restaurant->name }}</a>                         
                          </td>                                                 
                          <td class="v-align-middle">                          
                                  <p>{{$food->updated_at}}</p>
                          </td>
                          <td class="v-align-middle"> 
                            <a  class="editFood" href="{{ route('restaurants.foods.edit', array($food->sku)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">                        
                                <input type="hidden" name="tokenFood" value="{{ $food->token }}" > 
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>  
                            <a class="destroyFood" href="{{ route('restaurants.foods.destroy', array($food->sku)) }}" data-original-title="Eliminar" style="margin:5px; color: #222222;">                        
                              <input type="hidden" name="tokenFood" value="{{ $food->token }}" > 
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>     
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif


  <script type="text/javascript">
        
        $('.outGood').click(function() {  

              $('#title').text('Editar Product');
              $('#productSelect').attr("disabled", true);
              $('#updateGood').show('0');
              $('#addGood').hide('0');   

              var token = $(this).find("input[name='tokenGood']").val(); 
              //console.log(token);
              $("#modalProductUp").find("input[name='tokenQuotations']").val(token);  
                  
              $.ajax({           
                    url:  '/advisers/quotations/goods/get/'+token,
                    type: "GET",
                    datatype: "html",

                }).done(function(data){     
                    
                    var amount = data.amount;
                    var pricing = data.pricing;
                    var discount = data.discount;
                    var description = data.description;
                    var name = data.name;
                    var total = data.total;
                    var token = data.token;

                    total = formatNumber.new(total);

                    $("#select2-productSelect-container").text(name);
                    $("#productAmount").val(amount); 
                    $("#productDescription").code(description);
                    $("#productPricing").val(pricing);           
                    $("#productDiscount").val(discount);  
                    $("#totalGoods").text('$'+total);  

                    $("#modalProductUp").children('.modal-dialog').addClass('modal-lg');     
                    $('#modalProductUp').appendTo("body");            
                    $('#modalProductUp').modal('show'); 
                    //$("#tokenQuotations").text(token);
            

                })
                .fail(function(jqXHR, ajaxOptions, thrownError){
                    console.log('No response from server');
                });

        });    


        $(".outDestroy").click(function(e){ 
                      
                  var token = $(this).find("input[name='tokenGood']").val(); 
                  
                  $.ajax({           
                      url: '/advisers/quotations/goods/destroy/'+token,
                      type: "GET",
                      datatype: "html",

                  }).done(function(data){   
                    load();
                    total();   
                  })
                  .fail(function(jqXHR, ajaxOptions, thrownError)
                  {
                      console.log('No response from server');
                  });

        });   



     function loadProducts() {

              $.ajax({           
                  url:  '/advisers/quotations/products/load',
                  type: "GET",
                  datatype: "html",

              }).done(function(data){       
                 $("#divProducts").empty().html(data);            
              })
              .fail(function(jqXHR, ajaxOptions, thrownError){
                  console.log('No response from server');
              });
    }; 


    function load() {

              $.ajax({           
                  url:  '/advisers/quotations/goods/load',
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
                  url:  '/advisers/quotations/goods/total',
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
      

    </script>

