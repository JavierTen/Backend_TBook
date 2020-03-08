
              <section class="main-slide ">
                <div id="naturix-slider" class="owl-carousel nav-1">
                            @foreach($sliders as $slider)

                                    @if($slider->modalitie = "1")
                                                    <div class="item">                        
                                                            <img alt=".." src="assets\img\slider\slide-1.jpg">
                                                            <div class="tbl-wrp slide-1">
                                                                <div class="text-middle">
                                                                    <div class="tbl-cell">
                                                                        <div class="slide-caption container text-center">
                                                                            <div class="slide-title">
                                                                                <img src="assets\img\icons\slide-txt-1.png" alt="">
                                                                                <span>100% Guarantee</span>
                                                                            </div>
                                                                            <div class="slide-title2 pb-50">
                                                                                <h2 class="section-title"> <span class="light-font">Live </span> <strong>organic </strong> <span class="light-font">for live </span> <strong>healthy </strong> </h2>
                                                                                <h4 class="sub-title"> ORGANIC FRUITS, VEGETABLES, AND LOT MORE TO YOUR DOOR </h4>
                                                                            </div>
                                                                            <div class="slide">
                                                                                <a href="#" class="slide-btn"> Shop Now</a>  
                                                                            </div>
                                                                        <div class="social-icon">
                                                                            <a href="#" class="fa fa-facebook"></a>
                                                                            <a href="#" class="fa fa-twitter"></a>
                                                                            <a href="#" class="fa fa-google-plus"></a>
                                                                            <a href="#" class="fa fa-instagram"></a>
                                                                            <a href="#" class="fa fa-behance"></a>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                    @elseif($slider->modalitie = "2")  
                                                        <div class="item">                       
                                                            <img alt=".." src="assets\img\slider\slide-2.jpg">
                                                            <div class="tbl-wrp slide-1">
                                                                <div class="text-middle">
                                                                    <div class="tbl-cell">
                                                                        <div class="slide-caption container text-center">                                
                                                                            <div class="slide-title2 pb-50">
                                                                                <img alt="" src="assets\img\icons\slide-txt-3.png">
                                                                                <h4 class="sub-title"> WE ARE NATURIX, ORGANIC STORE SINCE 1990,<strong> LIVE <span class="clr-txt"> ORGANIC.</span></strong> <strong> LIVE <span class="clr-txt"> HEALTHY.</span></strong> </h4>
                                                                            </div>
                                                                            <div class="slide">
                                                                                <a href="#" class="theme-btn upper-text btn"> <b> Shop Now </b> </a>  
                                                                            </div>
                                                                        <div class="social-icon">
                                                                            <a href="#" class="fa fa-facebook"></a>
                                                                            <a href="#" class="fa fa-twitter"></a>
                                                                            <a href="#" class="fa fa-google-plus"></a>
                                                                            <a href="#" class="fa fa-instagram"></a>
                                                                            <a href="#" class="fa fa-behance"></a>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                          
                                    @elseif($slider->modalitie = "3")
                                                        <div class="item">                       
                                                            <img alt=".." src="assets\img\slider\slide-3.jpg">
                                                            <div class="tbl-wrp slide-1">
                                                                <div class="text-middle">
                                                                    <div class="tbl-cell">
                                                                        <div class="slide-caption container text-center">                                
                                                                            <div class="slide-title2 pb-50">
                                                                                <h2 class="section-title"> <strong>organic <img src="assets\img\icons\logo-icon-big.png"> </strong> <span class="light-font">food</span> </h2>
                                                                                <h4 class="sub-title"> ORGANIC FRUITS, VEGETABLES, AND LOT MORE TO YOUR DOOR </h4>
                                                                            </div>
                                                                            <div class="slide">
                                                                                <a href="#" class="slide-btn"> Shop Now</a>  
                                                                            </div>
                                                                        <div class="social-icon">
                                                                            <a href="#" class="fa fa-facebook"></a>
                                                                            <a href="#" class="fa fa-twitter"></a>
                                                                            <a href="#" class="fa fa-google-plus"></a>
                                                                            <a href="#" class="fa fa-instagram"></a>
                                                                            <a href="#" class="fa fa-behance"></a>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                    @elseif($slider->modalitie = "4")
                                                         <div class="item">                       
                                                            <img alt=".." src="assets\img\slider\slide-6.jpg">
                                                            <div class="tbl-wrp slide-1">
                                                                <div class="text-middle">
                                                                    <div class="tbl-cell">
                                                                        <div class="slide-caption container text-center">                                
                                                                            <div class="slide-title2">
                                                                                <img alt="" src="assets\img\icons\slide-txt-3.png">
                                                                                <h4 class="sub-title"> WE ARE NATURIX, ORGANIC STORE SINCE 1990,LIVE <strong>ORGANIC.</strong> LIVE<strong> HEALTHY. </strong> </h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="social-icon">
                                                                            <a href="#" class="fa fa-facebook"></a>
                                                                            <a href="#" class="fa fa-twitter"></a>
                                                                            <a href="#" class="fa fa-google-plus"></a>
                                                                            <a href="#" class="fa fa-instagram"></a>
                                                                            <a href="#" class="fa fa-behance"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                    @endif          
                                                        
                            @endforeach
                </div>               
            </section>