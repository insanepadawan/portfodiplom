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
                    <div class="main_title">Менің жұмыстарым</div>
                </div>

                <!-- Sorting -->


                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                    <div class="portfolio_grid grid clearfix">


                        @if(isset(auth()->user()->data))
                            <div class="grid-item portfolio_item p_design">
                                <img src="{{ url('/i/photos/'.auth()->user()->data->portfolio_image) }}" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">{{ auth()->user()->data->portfolio }}</div>
                                    <div class="portfolio_item_link"><a href="{{ auth()->user()->data->portfolio_link }}">See More</a></div>
                                </div>
                            </div>
                        @else
                            <div style="color: black; font-size: 2.4rem">Мұнда әлі ештеңе жоқ...</div>
                        @endif
                    <!-- Portfolio Item -->


                    </div>

                </div>
            </div>
        </div>
        <div align='center'>
        </div>

    </div>
</div>
@stop
