 @if (!empty($orders))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:20%">Number</th>
                <th style="width:10%">Cliente</th>     
                <th style="width:10%">Estado Orden</th>     
                <th style="width:10%">Estado Pago</th>           
                <th style="width:10%">Metodo Pago</th>                    
                <th style="width:25%">Fecha</th>
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
                                  <p>{{$order->updated_at}}</p>
                          </td>
                            <td class="v-align-middle"> 
                              <a  class="editFood" href="{{ route('managers.orders.show', array($order->id)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">    
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>  
                            <a  class="editFood" href="{{ route('managers.orders.edit', array($order->id)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">    
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>  
                            <a class="destroyFood" href="{{ route('managers.orders.destroy', array($order->id)) }}" data-original-title="Eliminar" style="margin:5px; color: #222222;">   
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>     
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif

