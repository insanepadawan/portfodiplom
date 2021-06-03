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
                    <div class="main_subtitle">What I am good at</div>
                    <div class="main_title">My Skills</div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                    <!-- Skills Content -->
                    <div class="skills">
                        <div class="skills_text">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit.</p>
                                    </div>
                                    <div class="col-xl-6">
                                        <p>Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bars -->
                        <div class="progress_bars">
                            <div class="container-fluid">
                                <div class="row">

                                    <!-- Progress Bar -->
                                    <div class="col-xl-4 col-lg-6 pb_col">
                                        <div class="pb_item">
                                            <div class="p_bar_title">Developement</div>
                                            <div id="skill_1_pbar" class="skill_bars" data-perc="0.70" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="col-xl-4 col-lg-6 pb_col">
                                        <div class="pb_item">
                                            <div class="p_bar_title">Developement</div>
                                            <div id="skill_2_pbar" class="skill_bars" data-perc="0.60" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="col-xl-4 col-lg-6 pb_col">
                                        <div class="pb_item">
                                            <div class="p_bar_title">Developement</div>
                                            <div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="col-xl-4 col-lg-6 pb_col">
                                        <div class="pb_item">
                                            <div class="p_bar_title">Developement</div>
                                            <div id="skill_4_pbar" class="skill_bars" data-perc="1.0" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="col-xl-4 col-lg-6 pb_col">
                                        <div class="pb_item">
                                            <div class="p_bar_title">Developement</div>
                                            <div id="skill_5_pbar" class="skill_bars" data-perc="0.90" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
                                        </div>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="col-xl-4 col-lg-6 pb_col">
                                        <div class="pb_item">
                                            <div class="p_bar_title">Developement</div>
                                            <div id="skill_6_pbar" class="skill_bars" data-perc="1.0" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Milestones -->

                        <div class="milestones clearfix">

                            <!-- Milestone -->
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="{{ url('i/icon_6.png') }}" alt=""></div>
                                <div class="milestone_counter" data-end-value="14">0</div>
                                <div class="milestone_text">Years of Experience</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="{{ url('i/icon_7.png') }}" alt=""></div>
                                <div class="milestone_counter" data-end-value="1000" data-sign-before="+">0</div>
                                <div class="milestone_text">Happy Clients</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="{{ url('i/icon_8.png') }}" alt=""></div>
                                <div class="milestone_counter" data-end-value="14" data-sign-after="k">0</div>
                                <div class="milestone_text">Followers on FB</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone text-center">
                                <div class="milestone_icon"><img src="{{ url('i/icon_9.png') }}" alt=""></div>
                                <div class="milestone_counter" data-end-value="732">0</div>
                                <div class="milestone_text">Finished Projects</div>
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
