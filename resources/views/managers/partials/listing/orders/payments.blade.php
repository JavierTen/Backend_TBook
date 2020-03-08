 @if (!empty($payments))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:20%">Valor</th>
                <th style="width:10%">Descripción</th>     
                <th style="width:10%">Usuario</th>     
                <th style="width:10%">Metodo Pago</th>           
                <th style="width:10%">Estado Pago</th>                    
                <th style="width:25%">Fecha</th>
                <th style="width:15%">Acciones</th>
            </tr>
        </thead>
        <tbody>
              @foreach($payments as $payment)
                        <tr>
                          <td class="v-align-middle semi-bold">
                            <p>$ {{ number_format($payment->price) }}</p>
                          </td>
                          
                          <td class="v-align-middle">                            
                            <p>{{ $payment->description }}</p>
                          </td>
                          <td class="v-align-middle">                            
                            <a href="#" class="btn btn-tag">{{ $payment->user->name }}</a>  
                          </td>              
                 
                          <td class="v-align-middle">                        
                            <a href="#" class="btn btn-tag">{{ $payment->method }}</a>                         
                          </td> 

                          <td class="v-align-middle">                            
                            <a href="#" class="btn btn-tag">{{ $payment->status }}</a>  
                          </td> 
                                                              
                          <td class="v-align-middle">                          
                                  <p>{{$payment->updated_at}}</p>
                          </td>
                          <td class="v-align-middle"> 
                            <a  href="{{ route('managers.payments.edit', array($payment->id)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">     
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>  
                            <a href="{{ route('managers.payments.destroy', array($payment->id)) }}" data-original-title="Eliminar" style="margin:5px; color: #222222;">   
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>     
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif
