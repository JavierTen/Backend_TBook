@extends('layouts.pages')


@section('content')  
<!-- Page Header Section Start Here -->
<section class="page-header style-2">
    <div class="container">
        <div class="page-title text-center">
            <h3>404 Eorror Page</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>404 page</li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->


<!-- fore zero fore page start here -->
<section class="fore-zero padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="zero-item">
                <div class="zero-thumb">
                    <img src="assets/images/404.png" alt="404">
                </div>
                <div class="zero-content">
                    <h3>Oops! The Page You Are Looking For Could Not Be Found</h3>
                    <a href="index-2.html" class="food-btn style-2"><span>Back to Home</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fore zero fore page ending here -->

<!-- Newsletter Section Start Here -->
<div class="news-letter">
    <div class="container">
        <div class="section-wrapper">
            <div class="news-title">
                <h3>For Newsletter</h3>
            </div>
            <div class="news-form">
                <form action="https://www.foxcoders.com/">
                    <label>
                        <input type="email" name="email" placeholder="Enter Your Email">
                    </label>
                    <input type="submit" name="submit" value="Subscribe now">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section Ending Here -->


@endsection


