
 <div class="widget widget-box widget-shop-category active">
                                <h3 class="widget-title">CATEGORIAS</h3>

                                <ul class="shop-category-list accordion">                                    
                                   
                                    @foreach($scopecategories as $categorie)
                                        @if($categorie->subcategories()!=null)                           
                                            <li>
                                                <a href="">{{ $categorie->name }}</a> 
                                                <button class="accordion-btn collapsed" type="button" data-toggle="collapse" data-target="#accordion-ul-{{ $categorie->slug }}" aria-expanded="false" aria-controls="accordion-ul-{{ $categorie->slug }}"><span class="accordion-icon"></span></button>

                                                <ul class="collapse" id="accordion-ul-{{ $categorie->slug }}" aria-expanded="false">
                                                    @foreach($categorie->subcategories() as $subcategorie)      
                                                      <li><a href=""><i class="fa fa-caret-right"></i>{{ $subcategorie->name }}</a></li>
                                                    @endforeach                                                       
                                                </ul>
                                            </li>
                                        @else   
                                             <li>
                                                <a href="#" class="title">{{ $categorie->name }}</a>
                                             </li> 
                                        @endif
                                      @endforeach 
                                </ul>
                            </div><!-- End .widget -->

