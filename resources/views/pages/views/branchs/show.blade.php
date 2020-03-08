@extends('layouts.pages')

@section('content')  

<!-- Page Header Section Start Here -->
<section class="page-header">
    <div class="shape-1">
        <img src="assets/images/banner/shape/01.png" alt="banner">
    </div>
    <div class="shape-2">
        <img src="assets/images/banner/shape/02.png" alt="banner">
    </div>
    <div class="container">
        <div class="page-title text-center">
            <h3>Sanzida Laila Trisha</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">HomeChef</a></li>
                <li>Sanzida Laila Trisha</li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Popular Home Chef Section Start Here -->
<div class="popular-chef single padding-tb">
 <div class="container">
    <div class="section-wrapper">
       <div class="row justify-content-center">
          <div class="col-xl-8 col-12">
                    <article>
                        <div class="chef-item">
                            <div class="chef-inner">
                                <div class="chef-thumb">
                                    <img src="assets/images/chef/01.jpg" alt="food-chef">
                                </div>
                                <div class="chef-content">
                                    <div class="chef-author">
                                        <img src="assets/images/chef/author/09.jpg" alt="chef-author">
                                    </div>
                                    <div class="chef-desc">
                                        <div class="chef-desc-top">
                                            <div class="title">
                                                <h5>Sanzida laila Trisha</h5>
                                                <p>Month Top <a href="#">Homechef</a></p>
                                            </div>
                                            <div class="scocial-share">
                                                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                                <a href="#" class="food-btn"><span><i class="icofont-ui-user"></i> follow</span></a>
                                            </div>
                                        </div>
                                        <div class="chef-desc-middle">
                                            <p>I love to cook for my friends and family . Special expertise of Making Pitha , achar , local food and have passonate to produce and promote organic food...</p>
                                            <ul>
                                                <li><span>Location</span>: 240 Block Road Mohakhali 1209</li>
                                                <li><span>Joined</span>: 02 December 2018</li>
                                                <li><span>Delivered</span>: 248+ Orders</li>
                                                <li><span>Earned</span>: Tk 1,21,000/=</li>
                                            </ul>
                                        </div>
                                        <div class="chef-footer">
                                            <div class="chef-menu chef-con">
                                                <h6>296</h6>
                                                <a href="#">Food Menu</a>
                                            </div>
                                            <div class="chef-recipe chef-con">
                                                <h6>33</h6>
                                                <a href="#">Recipe</a>
                                            </div>
                                            <div class="chef-followers chef-con">
                                                <h6>504</h6>
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="chef-following chef-con">
                                                <h6>333</h6>
                                                <a href="#">Following</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related">
                            <ul class="tab-bar">
                                <li class="tablinks" id="defaultOpen" onclick="openCity(event, 'food_menu')">
                                    <span>Food Menu</span>
                                </li>
                                <li class="tablinks" onclick="openCity(event, 'recipe')">
                                    <span>Recipes</span>
                                </li>
                                <li class="tablinks" onclick="openCity(event, 'followers')">
                                    <span>Followers</span>
                                </li>
                                <li class="tablinks" onclick="openCity(event, 'following')">
                                    <span>Following</span>
                                </li>
                            </ul>
                            <div id="food_menu" class="tabcontent">
                                <div class="popular-foods">
                                    <div class="section-wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-12">
                                                <div class="p-food-item">
                                                    <div class="p-food-inner">
                                                        <div class="p-food-thumb">
                                                            <img src="assets/images/popular-food/01.jpg" alt="p-food">
                                                            <span>$20 - $30</span>
                                                        </div>
                                                        <div class="p-food-content">
                                                            <div class="p-food-author">
                                                                <a href="#"><img src="assets/images/chef/author/01.jpg" alt="food-author"></a>
                                                            </div>
                                                            <h6><a href="#">Dragon Express</a></h6>
                                                            <div class="p-food-group">
                                                                <span>Type of food :</span>
                                                                <a href="#">Beef Roast</a>
                                                                <a href="#">Pizza</a>
                                                                <a href="#">Stakes</a>
                                                            </div>
                                                            <ul class="del-time">
                                                                <li>
                                                                    <i class="icofont-cycling-alt"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder">
                                                                            <span class="tooltip-label">Delivery time
                                                                            <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                                                        </span></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-stopwatch"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder">
                                                                            <span class="tooltip-label">Pickup time</span>
                                                                            <span class="tooltip-info">You can pickup order in 20 minutes.
                                                                        </span></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="p-food-footer">
                                                                <div class="left">
                                                                    <div class="rating">
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="p-food-item">
                                                    <div class="p-food-inner">
                                                        <div class="p-food-thumb">
                                                            <img src="assets/images/popular-food/02.jpg" alt="p-food">
                                                            <span>$20 - $30</span>
                                                        </div>
                                                        <div class="p-food-content">
                                                            <div class="p-food-author">
                                                                <a href="#"><img src="assets/images/chef/author/02.jpg" alt="food-author"></a>
                                                            </div>
                                                            <h6><a href="#">Dragon Express</a></h6>
                                                            <div class="p-food-group">
                                                                <span>Type of food :</span>
                                                                <a href="#">Beef Roast</a>
                                                                <a href="#">Pizza</a>
                                                                <a href="#">Stakes</a>
                                                            </div>
                                                            <ul class="del-time">
                                                                <li>
                                                                    <i class="icofont-cycling-alt"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder">
                                                                            <span class="tooltip-label">Delivery time
                                                                            <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                                                        </span></div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-stopwatch"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder">
                                                                            <span class="tooltip-label">Pickup time</span>
                                                                            <span class="tooltip-info">You can pickup order in 20 minutes.
                                                                        </span></div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="p-food-footer">
                                                                <div class="left">
                                                                    <div class="rating">
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                        <i class="icofont-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="right"><i class="icofont-home"></i>6th Avenue New York</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="recipe" class="tabcontent">
                                <div class="recent-recipe">
                                    <div class="section-wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-12">
                                                <div class="recipe-item">
                                                    <div class="recipe-thumb">
                                                        <a href="#"> <img src="assets/images/food-recipe/01.jpg" alt="food-recipe"></a>
                                                    </div>
                                                    <div class="recipe-content">
                                                        <div class="meta-tag">
                                                            <div class="categori">
                                                                <a href="#">Chicken</a>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(5.5)</span>
                                                            </div>
                                                        </div>
                                                        <h6><a href="#">Food Corner: Top Japanese Best Restaurants for Sushi</a></h6>
                                                        <div class="meta-post">
                                                            <ul>
                                                                <li>
                                                                    <img src="assets/images/meta-post/recipe/01.jpg" alt="food-recipe">
                                                                    <a href="#" class="author">Hunter Max </a>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-clock-time"></i>
                                                                    <a href="#" class="date">Time: 30 min</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="recipe-item">
                                                    <div class="recipe-thumb">
                                                        <a href="#"> <img src="assets/images/food-recipe/02.jpg" alt="food-recipe"></a>
                                                    </div>
                                                    <div class="recipe-content">
                                                        <div class="meta-tag">
                                                            <div class="categori">
                                                                <a href="#">Chicken</a>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <span>(5.5)</span>
                                                            </div>
                                                        </div>
                                                        <h6><a href="#">Food Corner: Top Japanese Best Restaurants for Sushi</a></h6>
                                                        <div class="meta-post">
                                                            <ul>
                                                                <li>
                                                                    <img src="assets/images/meta-post/recipe/01.jpg" alt="food-recipe">
                                                                    <a href="#" class="author">Hunter Max </a>
                                                                </li>
                                                                <li>
                                                                    <i class="icofont-clock-time"></i>
                                                                    <a href="#" class="date">Time: 30 min</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="followers" class="tabcontent">
                                <div class="product style-4">
                                    <div class="section-wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="assets/images/chef/author/07.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">Sanzida laila Trisha</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="assets/images/chef/author/08.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">Jinnat Raihun Sumi</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="assets/images/chef/author/09.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">Shahana Anam Khan</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="following" class="tabcontent">
                                <div class="product style-4">
                                    <div class="section-wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="assets/images/chef/author/09.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">Shahin Anam Khan</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="assets/images/chef/author/07.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">Jinnat Raihun</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="product-item">
                                                    <div class="product-thumb">
                                                        <img src="assets/images/chef/author/08.jpg" alt="food-product">
                                                    </div>
                                                    <div class="product-content">
                                                        <h6><a href="#">Shadhaf Khan</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
          <div class="col-xl-4 col-md-7 col-12">
                    <aside>
                        <div class="popular-chef-widget">
                            <div class="food-category">
                                <div class="section-header">
                                    <h6>Browse Food Category</h6>
                                </div>
                                <div class="section-wrapper">
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/01.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Breakfast</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/02.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Lunch</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/03.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Dinner</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/04.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Drink</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/05.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Juice</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/06.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Coffee</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/07.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Tea</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="food-item">
                                        <div class="food-inner">
                                            <div class="food-thumb">
                                                <a href="#"><img src="assets/images/food/08.png" alt="food"></a>
                                            </div>
                                            <div class="food-content">
                                                <a href="#">Beef Roast</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-from">
                                <div class="section-header">
                                    <h6>Register Now</h6>
                                </div>
                                <form action="https://www.foxcoders.com/">
                                    <input type="text" name="name" placeholder="Full Name*">
                                    <input type="email" name="email" placeholder="Your Eamil*">
                                    <input type="number" name="number" placeholder="Phone Number">
                                    <input type="submit" value="Contact Chef">
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
       </div>
    </div>
 </div>
</div>
<!-- Popular Home Chef Section Ending Here -->

@endsection


