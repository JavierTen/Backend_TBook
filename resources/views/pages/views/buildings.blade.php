@extends('layouts.pages')

@section('content')

          
		<!-- coming soon section start here -->
        <section class="coming-soon d-flex align-items-center">
            <div class="container">
                <div class="row flex-row-reverse align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="coming-thumb">
                            <img src="assets/images/coming-soon/coming-soon.png" alt="coming-thumb">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="coming-area">
                            <div class="section-header">
                                <h2>Something Big Is Coming Soon...</h2>
                                <p>Integer at lorem eget diam facilisis laci and ides massa Nulas ornare facilisis exam non porttitor.</p>
                            </div>
                            <div class="section-wrapper">
                                <ul class="countdown d-flex flex-wrap align-items-center ">
                                    <li>
                                        <h3><span class="days">56</span></h3>
                                        <p class="days_text">Days</p>
                                    </li>
                                    <li>
                                        <h3><span class="hours">22</span></h3>
                                        <p class="hours_text">Hours</p>
                                    </li>
                                    <li>
                                        <h3><span class="minutes">56</span></h3>
                                        <p class="minu_text">minutes</p>
                                    </li>
                                    <li>
                                        <h3><span class="seconds">40</span></h3>
                                        <p class="seco_text">seconds</p>
                                    </li>
                                </ul>
                                <div class="news-letter">
                                    <div class="section-wrapper">
                                        <div class="news-form">
                                            <form action="https://www.foxcoders.com/">
                                                <label>
                                                    <input type="email" name="email" placeholder="Enter Your Email Address">
                                                </label>
                                                <input type="submit" name="submit" value="Notify Me">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- coming soon section ending here -->

@endsection
