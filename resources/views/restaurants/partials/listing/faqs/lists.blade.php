 @if (!empty($faqs))
      
      <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
        <thead>
            <tr>
                <th style="width:30%">Pregunta</th>
                <th style="width:30%">Respuesta</th>       
                <th style="width:10%">Categoria</th>                    
                <th style="width:10%">Fecha</th>
                <th style="width:15%">Acciones</th>
            </tr>
        </thead>
        <tbody>
              @foreach($faqs as $faq)
                        <tr>
                          <td class="v-align-middle semi-bold">
                            <p>{!! $faq->question !!}</p>
                          </td>
                          <td class="v-align-middle">
                              <p>{!! $faq->answer !!}</p>
                          </td>                            
                          <td class="v-align-middle">                        
                              <a href="#" class="btn btn-tag">{{ $faq->category->name }}</a>                         
                          </td>                                               
                          <td class="v-align-middle">                          
                                  <p>{{humanize_date($faq->updated_at)}}</p>
                          </td>
                          <td class="v-align-middle"> 
                            <a href="{{ route('restaurants.faqs.show', array($faq->token)) }}"" data-original-title="Editar" style="margin:5px; color: #222222;">     
                                <i class="fs-14 sl-screen-desktop"></i>
                            </a>      
                          </td>
                        </tr>
              @endforeach
        </tbody>
      </table>
@endif
