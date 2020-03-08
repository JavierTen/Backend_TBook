<div id="tag_cloud-2" class="widget widget_tag_cloud">
                     <span class="gamma widget-title">Tags Populares</span>
                     <div class="tagcloud">
                        @foreach($sortings as $sorting)   
                          <a href='{{ route('events.sorting', array($sorting->slug)) }}' class='tag-link-39 tag-link-position-1' title='1 topic'>{{ $sorting->name }}</a>
                        @endforeach                        
                     </div>
</div>
