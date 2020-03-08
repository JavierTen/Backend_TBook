
<div id="pizzaro_recent_posts_widget-2" class="widget pizzaro_recent_posts_widget">
                     <span class="gamma widget-title">Eventos Recientes</span>
                     <ul>
                        @foreach($recents as $recent)
                            <li>
                                @if ($recent->hasThumbnail())   
                                    <div class="post-thumbnail">
                                      <a href="{{ route('events.show', array($recent->slug)) }}">
                                      <img width="300" height="153" src="/assets/images/events/{{ $recent->thumbnail()->filename }}" class="attachment-medium size-medium wp-post-image" alt="{{ $recent->sku }}">
                                      </a>
                                    </div>
                                @endif    

                               
                               <div class="post-content">
                                  <span class="comments-link">
                                  <a href="blog-single.html">&nbsp;</a>
                                  </span>
                                  <span class="post-date">{{ humanize_date($recent->created_at) }}</span>
                                  <a class="post-name" href="{{ route('events.show', array($recent->slug)) }}">{{ $recent->title }}</a>
                               </div>
                            </li>
                        @endforeach
                     </ul>
</div>

