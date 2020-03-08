 <div class="section-events">
                        <h3 class="pre-title"><span>NO PIERDA NINGUNO DE NUESTROS</span></h3>
                        <h2 class="section-title"> EVENTOS</h2>
                        <div class="events">
                           @foreach($events as $event)  
                            <div class="post-item">                              

                              <div class="event">
                              <div class="media">
                                 <div class="media-left">
                                    <div class="event-date">
                                       <div class="date">05</div>
                                       <div class="month">Mar</div>
                                    </div>
                                 </div>
                                 <div class="media-body">
                                    <h2>
                                       <a class="tribe-event-url" href="#" title="5th International Pizza Festival with New Competitors." rel="bookmark">5th International Pizza Festival with New Competitors.</a>
                                    </h2>
                                    <div class="time-venue">
                                       <div class="time">8:00 am - 5:00 pm</div>
                                       <div class="venue">{{ $event->title }}</div>
                                    </div>
                                    <p>{{ $event->description }}.</p>
                                    <a class="btn-more" href="{{ route('events.show', array($event->slug)) }}">Leer mas</a>
                                 </div>
                              </div>
                           </div>
                           </div>
                           @endforeach
                        </div>
                     </div>