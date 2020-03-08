 <div class="row col-sm-12">
                                            
                                            <div class="deal-item list-view">
                                                <div class="deal-icons">                                         
                                                    <a class=""></a>
                                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>   
                                                    <a  class=""></a>                                   
                                                </div>
                                                <div class="deal-content row">
                                                     <div class="col-sm-6">
                                                        <div class="deal-text">
                                                        <h4 class="sub-title">Destacados</h4>
                                                        <h2 class="fsz-30 pb-15"> <a href="{{ $customer->url }}"> <span class="light-font">{{ $customer->name }}</span> </a> </h2>
                                                        <p>{{ $customer->description }}</p> 
                                                        </div> 
                                                      </div>
                                                      <div class="col-sm-6">
                                                         @if ($customer->hasThumbnail())   
                                                            <a href="{{ route('events.show', array($customer->slug)) }}" class=""> 
                                                                <img class="prod-img" alt="{{ $customer->slug }}" src="/assets/img/customers/{{ $customer->thumbnail()->filename }}">
                                                            </a>  
                                                         @endif
                                                      </div>
                                                   

                                                   
                                                </div>
                                            </div>
 </div>
