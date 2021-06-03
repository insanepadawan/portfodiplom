@extends('layouts.theme')

@section('content')
<div class="super_container">

    <!-- Header -->

    @include('partials/header')


    <div class="content_container">
        <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- General Information -->
        @include('partials/info')

        <!-- Main Content -->

            <div class="main_content">
                <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                    <div class="main_subtitle">What clients say</div>
                    <div class="main_title">Testimonials</div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                    <!-- Testimonials -->

                    <div class="testimonials">

                        <!-- Testimonials Slider -->
                        <div class="test_slider_container">
                            <div class="owl-carousel owl-theme test_slider">

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">5* Functionality</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_1.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">Fast & Friendly Guy</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_2.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">Great to work with</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_3.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">5* Functionality</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_1.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">Fast & Friendly Guy</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_2.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">Great to work with</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_3.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">5* Functionality</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_1.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">Fast & Friendly Guy</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_2.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item test_item">
                                    <div class="test_title">Great to work with</div>
                                    <div class="test_text">
                                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
                                    </div>
                                    <div class="test_image"><a href="#"><img src="images/test_3.jpg" alt=""></a></div>
                                    <div class="test_info"><a href="#">Diane Smith</a><span>Customer</span></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div align='center'>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
    </div>
</div>
@stop
