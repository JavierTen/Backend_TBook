<div class="widget">
    <h3 class="widget-title">Tags</h3>
    <div class="tagcloud">
        @foreach($tags as $tag)                                                        
            <a href="#">{{ $tag->name }}</a>
        @endforeach  
    </div><!-- End .tagcloud -->
</div><!-- End .widget-->