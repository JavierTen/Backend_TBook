                        <article id="post-359" class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">
                           <header class="entry-header">

                             @if ($event->hasThumbnail()) 
                               <div class="media-attachment">
                                 <div class="post-thumbnail">
                                    <a href="{{ route('events.show', array($event->slug)) }}">
                                    <img width="1619" height="827" src="/assets/images/events/{{ $event->thumbnail()->filename }}" class="attachment-full size-full wp-post-image" alt="{{ $event->slug }}">
                                    </a>
                                 </div>
                              </div>
                              @else

                              <div class="media-attachment">
                                  <iframe width="870" height="165" style="height=:165px; width:100%;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
                              </div>

                              <div class="media-attachment">
                                 <div class="video-container">
                                    <div class="embed-responsive embed-responsive-16by9">
                                       <iframe src="https://player.vimeo.com/video/153747736" width="870" height="490" allowfullscreen=""></iframe>
                                    </div>
                                 </div>
                              </div>
                             @endif                                                                                      
                              
                              <h1 class="alpha entry-title">
                                 <a href="{{ route('events.show', array($event->slug)) }}" rel="bookmark">{{ $event->title }}</a>
                              </h1>
                              <div class="entry-meta">
                                 <div class="cat-links">
                                    <a href="blog-single.html" rel="category tag">{{ $event->sorting->name }}</a>
                                 </div>
                                 <span class="posted-on">
                                 <a href="blog-single.html" rel="bookmark">
                                 <time class="entry-date published" datetime="2016-10-13T14:53:25+00:00">{{ humanize_date($event->created_at) }}</time>
                                 </a>
                                 </span>
                                 <div class="author">
                                    <div class="label">Posted by:</div>
                                    <a href="" title="Posts by farook" rel="author">Administrador</a>
                                 </div>
                              </div>
                           </header>
                           <!-- .entry-header -->
                           <div class="entry-content">
                              <p>{{ $event->description }}</p>
                              <div class="post-readmore">
                                 <a href="{{ route('events.show', array($event->slug)) }}" class="read-more-text">Read More</a>
                              </div>
                              <span class="comments-link">
                              <a href="#">Leave a comment</a>
                              </span>
                           </div>
                        </article>
                        <!-- #post-## -->
                      

