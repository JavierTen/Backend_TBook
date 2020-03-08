<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
      <thead>
          <tr>
              <th>Titulo</th>
              <th>Slug</th>
              <th>Descripcion</th>                        
              <th>Fecha</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
            @foreach($counselings as $counseling)
                      <tr>
                        <td class="v-align-middle semi-bold">
                          <p>{{ $counseling->title }}</p>
                        </td>
                        <td class="v-align-middle">
                          <p>{{ ucwords($counseling->slug) }}</p>
                        </td> 
                        <td class="v-align-middle">
                          <p>{{ $counseling->description }}</p>
                        </td>                        
                        <td class="v-align-middle">
                          <p>{{ humanize_date($counseling->created_at) }}</p>
                        </td>
                        <td class="v-align-middle">
                          <a  href="{{ route('manager.counselings.edit', array($counseling)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          </a>  
                          <a  href="{{ route('manager.counselings.destroy', array($counseling)) }}" data-original-title="Eliminar" style="margin:5px; color: #222222;">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </a>     
                        </td>
                      </tr>
            @endforeach
      </tbody>
</table>
