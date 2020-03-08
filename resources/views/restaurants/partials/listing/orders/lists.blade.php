 @if (!empty($orders))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:5%">Numero</th>
                <th style="width:15%">Cliente</th>     
                <th style="width:10%">Estado Orden</th>     
                <th style="width:10%">Estado Pago</th>           
                <th style="width:10%">Metodo Pago</th>                    
                <th style="width:20%">Fecha</th>
                <th style="width:15%">Acciones</th>
            </tr>
        </thead>
        <tbody>
              @foreach($orders as $order)
                        <tr>
                          <td class="v-align-middle semi-bold">
                            <p>{{ $order->id }}</p>
                          </td>
                          <td class="v-align-middle">
                              <p>{{ $order->user->name }}</p>
                          </td> 
                            <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">{{ $order->orderStatus->status }}</a>  
                            </td>
                            <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">{{ $order->payment->status }}</a>  
                            </td>                  
                          <td class="v-align-middle">                        
                              <a href="#" class="btn btn-tag">{{ $order->payment->method }}</a>                         
                          </td>                                               
                          <td class="v-align-middle">           
                                  <p>{{humanize_date($order->updated_at)}}</p>
                          </td>
                            <td class="v-align-middle"> 
                              <a  class="editFood" href="{{ route('restaurants.orders.show', array($order->token)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">   
                                <i class="fs-14 sl-screen-desktop"></i>
                              </a>  
                              <a  class="editFood" href="{{ route('restaurants.orders.edit', array($order->token)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">   
                                <i class="fs-14 sl-calculator"></i>
                              </a>   
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif

