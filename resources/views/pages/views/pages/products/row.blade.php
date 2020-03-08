<div class="row mb-60">

   @foreach($products as $product)
   <div class="col-sm-6 col-md-6 col-lg-6">
       <div class="category-item">
           <div class="category--img">
                  @if ($product->hasThumbnail())
                     <img alt="{{ $product->sku }}" src="/assets/images/products/{{ $product->thumbnail()->filename }}" alt="category">
                  @else                  
                      <img src="/assets/images/categories/cat9/1.jpg" alt="category">
                  @endif   

               <span class="featured-item featured-item2">new</span>
           </div>
           <!-- .category-img end -->
           <div class="category--content">
               <div class="category--title">
                   <h3><a href="{{ route('products.show', array($product->sku)) }}">{{ $product->name }}</a></h3>
               </div>
               <!-- .category-title end -->
               <div class="category--price">
                   <span>${{ number_format($product->pricing) }}</span>
               </div>
               <!-- .category-price end -->
           </div>
           <!-- .category-content end -->
           <div class="category--hover">
               <div class="category--action">
                   <a href="page-cart.html" class="btn btn--primary btn--rounded"><i class="icon-bag"></i>ADD TO CART</a>
                   <div class="category--action-content">
                       <div class="category--action-icons">
                           <a data-toggle="modal" data-target="#product-popup"><i class="ti-search"></i></a>
                           <a href="#"><i class="ti-heart"></i></a>
                           <a href="#" class="compare" data-toggle="modal" data-target="#compare-popup"><i class="ti-control-shuffle"></i></a>
                       </div>
                       <!-- .category-action-icons end -->
                       <div class="category--hover-info">
                           <div class="category--title">
                               <h3><a href="{{ route('products.show', array($product->sku)) }}">{{ $product->name }}</a></h3>
                           </div>
                           <!-- .category-title end -->
                           <div class="category--price">
                               <span>$ 42.00</span>
                           </div>
                           <!-- .category-price end -->
                       </div>
                       <!-- .category-hover-info end -->
                       <div class="category--colors">
                           <a href="#" class="color-1"></a>
                           <a href="#" class="color-2"></a>
                           <a href="#" class="color-3"></a>
                           <a href="#" class="color-4"></a>
                       </div>
                       <!-- .category-colors end -->
                   </div>
                   <!-- .category-action-content end -->
               </div>
               <!-- .category-action end -->
           </div>
           <!-- .category-hover end -->
       </div>
   </div>
   @endforeach
</div>
