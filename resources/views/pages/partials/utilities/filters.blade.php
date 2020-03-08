 <div class="col-md-3 pt-15">

                            <div class="widget-wrap">
                                <h2 class="widget-title"> <span class="light-font">Ordernar por</span> <strong>Categorias</strong> </h2>
                                <div class="divider-full-1"></div>
                                <ul class="cate-widget">                                    
                                    @foreach($scopecategories as $categorie)
                                    <li> <i class="fa fa-arrow-circle-o-right clr-txt"></i> <a href="{{ route('products.categories', array($categorie->slug)) }}">{{ $categorie->name }}</a> </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget-wrap">
                                <h2 class="widget-title"> <span class="light-font">Ordernar por</span> <strong>Porción</strong> </h2>
                                <div class="divider-full-1"></div>
                                <ul class="checkbox-widget">
                                    @foreach($scopeportions as $portion)
                                    <li class="form-group"><label class="checkbox-inline">
                                        <input value="" type="checkbox" > <span>{{ $portion->name }}</span></label> 
                                    </li>
                                    @endforeach                                   
                                                                   
                                </ul>
                            </div>
                            
                            @include('pages/partials/products/bests')

                            <div class="widget-wrap">
                                <h2 class="widget-title"> <span class="light-font">Ordenar por</span> <strong>Tags</strong> </h2>
                                <div class="divider-full-1"></div>
                                <ul class="tags-widget">
                                    @foreach($scopetags as $tag)
                                    <li> <a href="{{ route('products.tags', array($tag->slug)) }}">{{ $tag->name }}</a> </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


