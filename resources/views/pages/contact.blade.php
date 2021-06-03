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
                    <div class="main_subtitle"></div>
                    <div class="main_title">Кері байланыс</div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                    <!-- Contact -->

                    <div class="contact">
                        <div class="container-fluid">
                            <div class="row">

                                <!-- Contact Form -->
                                <div class="col-xl-6">
                                    <div class="contact_text">
                                        <p>Маған сұрақ қойыңыз</p>
                                    </div>
                                    <div class="contact_form_container">
                                        <form action="insert.php" method="POST" id="contact_form" class="contact_form clearfix">
                                            <div><input type="text" name="name" class="contact_input" placeholder="Аты" required="required"></div>
                                            <div><input type="email" name="email" class="contact_input" placeholder="E-mail" required="required"></div>
                                            <input type="text" name="text" class="contact_input" placeholder="Тақырыбы" required="required">
                                            <textarea name="message" class="contact_input contact_textarea" placeholder="Сұрақ" required="required"></textarea>
                                            <button class="contact_button">Сұрақты жіберу</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Contact Map -->
                                <div class="col-xl-6">
                                    <div class="contact_map">
                                        <!-- Google Map -->
                                        <div class="map">
                                            <div id="google_map" class="google_map">
                                                <div class="map_container">
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div align='center'></div>

    </div>
</div>
@stop
