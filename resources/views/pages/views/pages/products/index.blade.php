@extends('layouts.pages')

@section('content')
   



<!-- Banner Section Start Here -->
<section class="banner">
    <div class="shape-1">
        <img src="assets/images/banner/shape/01.png" alt="banner">
    </div>
    <div class="shape-2">
        <img src="assets/images/banner/shape/02.png" alt="banner">
    </div>
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12">
                    <div class="banner-content">
                        <h2>Unique Food Network...</h2>
                        <form action="https://www.foxcoders.com/">
                            <div class="codexcoder-selectoption">
                                <select name="text">
                                    <option value="1">Find A Food</option>
                                    <option value="2">Find A Chef</option>
                                </select>
                            </div>
                            <input type="text" name="type" placeholder="Enter your food name">
                            <button type="submit"><i class="icofont-search-2"></i></button>
                        </form>
                        <ul>
                            <li><span>700+</span>Restaurant</li>
                            <li><span>6900+</span>People Served</li>
                            <li><span>6900+</span>Registered Users</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ending Here -->


<!-- Popular Food Section Start Here -->
<section class="popular-foods padding-tb style-2">
    <div class="container">
        <div class="section-wrapper">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12">
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
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
                                <h6><a href="#">Meat Lovers</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/03.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/03.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Subway</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/04.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/04.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Hardee’s</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/05.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/05.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Nando’s</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/06.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/06.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Pizza Hut</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
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
                                <h6><a href="#">Meat Lovers</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/03.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/03.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Subway</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/04.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/04.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Hardee’s</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/05.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/05.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Nando’s</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="p-food-item">
                        <div class="p-food-inner">
                            <div class="p-food-thumb">
                                <img src="assets/images/popular-food/06.jpg" alt="p-food">
                                <span>$20 - $30</span>
                            </div>
                            <div class="p-food-content">
                                <div class="p-food-author">
                                    <a href="#"><img src="assets/images/chef/author/06.jpg" alt="food-author"></a>
                                </div>
                                <h6><a href="#">Pizza Hut</a></h6>
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
                                                <span class="tooltip-label">Delivery time</span>
                                                <span class="tooltip-info">Your order will be delivered in 20 minutes.</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="icofont-stopwatch"></i>
                                        <div class="time-tooltip">
                                            <div class="time-tooltip-holder">
                                                <span class="tooltip-label">Pickup time</span>
                                                <span class="tooltip-info">You can pickup order in 20 minutes.</span>
                                            </div>
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
</section>
<!-- Popular Food Section Ending Here -->




@endsection
