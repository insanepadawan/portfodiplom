<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
    <div>
        <div class="general_info_image">
            <div class="background_image" style="background-image:url({{ url('i/smith.jpg') }})"></div>
            <div class="header_button_2">
                <a href="#">Жүкету</a>
                <div class="d-flex flex-column align-items-center justify-content-center"><img src="{{ url('i/download.png') }}" alt=""></div>
            </div>
        </div>
    </div>
    <div class="general_info_content">
        <div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
            <div class="general_info_title">Негізгі ақпараттар</div>
            <ul class="general_info_list">
                <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_1.png') }}" alt=""></div>
                    <div class="general_info_text">Аты-жөні: <span>{{ auth()->user()->name.' '.auth()->user()->data->surname }}</span></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
                    <div class="general_info_text">Мекен-жайы: <span>{{ auth()->user()->data->city }}</span></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_2.png') }}" alt=""></div>
                    <div class="general_info_text">Туған күні: <span>{{ auth()->user()->data->bday }}</span></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_3.png') }}" alt=""></div>
                    <div class="general_info_text"><a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a></div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_4.png') }}" alt=""></div>
                    <div class="general_info_text">{{ auth()->user()->data->phone }}</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_5.png') }}" alt=""></div>
                    <div class="general_info_text"><a href="{{ auth()->user()->data->website }}" target="_blank">{{ auth()->user()->data->website }}</a></div>
                </li>
            </ul>

            <!-- Social -->
            <div class="social_container">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
