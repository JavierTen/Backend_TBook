 @if (!empty($categories))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:20%">Nombre</th>   
                <th style="width:10%">Estado</th>                       
                <th style="width:25%">Fecha</th>
                <th style="width:15%">Acciones</th>
            </tr>
        </thead>
        <tbody>
              @foreach($categories as $categorie)
                        <tr>
                          <td class="v-align-middle semi-bold">
                            <p>{{ $categorie->name }}</p>
                          </td>                   
                          @if($categorie->authorization == 1)
                          <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">Activo</a>  
                            </td>
                          @else
                            <td class="v-align-middle">                            
                              <a href="#" class="btn btn-tag">Inactivo</a>  
                            </td>
                          @endif                                               
                          <td class="v-align-middle">                          
                                  <p>{{$categorie->updated_at}}</p>
                          </td>
                          <td class="v-align-middle"> 
                            <a   href="{{ route('managers.faqcategories.edit', array($categorie->token)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">   
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>  
                            <a  href="{{ route('managers.faqcategories.destroy', array($categorie->token)) }}" data-original-title="Eliminar" style="margin:5px; color: #222222;">    
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>     
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif
