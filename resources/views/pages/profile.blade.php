@extends('layouts.theme')

@section('content')
<div class="super_container">

    <!-- Header -->

    @include('partials.header')

    <div class="content_container">
        <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- General Information -->

        @include('partials.info')


        <!-- Main Content -->

            <div class="main_content">
                <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                    <div class="main_subtitle">Портфолио</div>
                    <div class="main_title">{{ auth()->user()->name }} {{ isset(auth()->user()->data) ? auth()->user()->data->surname : '' }}</div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                    <div class="about_content">
                        @if(isset(auth()->user()->data))
                        <div class="about_title">Мінездеме</div>
                        <div class="about_text">
                            {!! auth()->user()->data->characteristic !!}
                        </div>
                        @endif

                        <!-- Loaders -->

                        <div class="loaders clearfix">

                            <!-- Loader -->
                            <div class="loader_container">
                                <div class="loader" data-perc="0.75"></div>
                                <div class="loader_content text-center">
                                    <div class="loader_title">Интуиция</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class="loader_container">
                                <div class="loader" data-perc="0.83"></div>
                                <div class="loader_content text-center">
                                    <div class="loader_title">Шығармашылық</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class="loader_container">
                                <div class="loader" data-perc="0.25"></div>
                                <div class="loader_content text-center">
                                    <div class="loader_title">Жауапкершілік</div>
                                </div>
                            </div>

                            <!-- Loader -->
                            <div class="loader_container">
                                <div class="loader" data-perc="0.95"></div>
                                <div class="loader_content text-center">
                                    <div class="loader_title">Біліктілік</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div align='center'>
        Алматы, 2021
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

</div>
@stop
