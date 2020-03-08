 <section class="section-recent-posts">
                        <h3 class="pre-title"><span>ULTIMAS PUBLICACIONES</span></h3>
                        <h2 class="section-title">LEE NUESTROs EVENTOS</h2>
                        <div class="post-items">
                          @foreach($events as $event)  
                            <div class="post-item">
                               @if ($event->hasThumbnail())   
                                  <a class="post-thumbnail" href="{{ route('events.show', array($event->slug)) }}">
                                     <img width="1619" height="827" src="/assets/images/events/{{ $event->thumbnail()->filename }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="{{ $event->slug }}">
                                   </a>
                               @endif  
                              <div class="post-info">
                                 <h3 class="post-title">
                                    <a href="{{ route('events.show', array($event->slug)) }}">{{ $event->title }}</a>
                                 </h3>
                                 <p>{{ $event->description }}.</p>
                                 <a class="btn-more" href="{{ route('events.show', array($event->slug)) }}">Leer</a>
                              </div>
                           </div>
                        @endforeach 

                        </div>
</section>
