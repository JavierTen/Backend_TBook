 @if (!empty($reviews))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:20%">Comentario</th>
                <th style="width:10%">Calificación</th>     
                <th style="width:10%">Usuario</th>         
                <th style="width:10%">Producto</th>     
                <th style="width:10%">Estado</th>                    
                <th style="width:25%">Fecha</th>
                <th style="width:15%">Acciones</th>
            </tr>
        </thead>
        <tbody>
              @foreach($reviews as $review)
                        <tr>
                          <td class="v-align-middle semi-bold">
                            <p>{!! $review->review !!}</p>
                          </td>
                          <td class="v-align-middle">    
                              <p>{{ $review->rate }}</p>
                          </td> 
                          <td class="v-align-middle">    
                              <a href="#" class="btn btn-tag">{{ $review->user->name }}</a>  
                          </td> 
                          <td class="v-align-middle">    
                              <a href="#" class="btn btn-tag">{{ $review->food->name }}</a>  
                          </td>                    
                          @if($review->authorization == 1)
                          <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">Activo</a>  
                            </td>
                          @else
                            <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">Inactivo</a>  
                            </td>
                          @endif                                               
                          <td class="v-align-middle">                          
                              <p>{{$review->updated_at}}</p>
                          </td>
                          <td class="v-align-middle"> 
                            <a href="{{ route('restaurants.foodreviews.edit', array($review->id)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;"> 
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>  
                            <a href="{{ route('restaurants.foodreviews.destroy', array($review->id)) }}" data-original-title="Eliminar" style="margin:5px; color: #222222;">  
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>     
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif

