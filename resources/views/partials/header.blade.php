<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><span>Portfolio</span></div>
        <div class="main_nav d-flex flex-row align-items-end justify-content-start">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li class="{{ request()->path() == 'profile' ? 'active' : '' }}"><a href="{{ route('profile') }}">Басы</a></li>
                <li class="{{ request()->path() == 'services' ? 'active' : '' }}"><a href="{{ route('services') }}">Қызметтері</a></li>
                <li class="{{ request()->path() == 'experience' ? 'active' : '' }}"><a href="{{ route('experience') }}">Жұмыс тәжірибесі</a></li>
                <li class="{{ request()->path() == 'education' ? 'active' : '' }}"><a href="{{ route('education') }}">Білімі</a></li>
                <li ><a href="{{ url('/edit') }}">Акпарат озгерту</a></li>
                <li class="{{ request()->path() == 'portfolio' ? 'active' : '' }}"><a href="{{ route('portfolio') }}">Портфолио</a></li>
                <li class="{{ request()->path() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Кері байланыс</a></li>
                <li><a href="{{ route('exit') }}">Шығу</a></li>
            </ul>
            <div class="header_button ml-auto">
                <a href="{{ url('/gopdf') }}">Түйіндеме</a>
                <div class="d-flex flex-column align-items-center justify-content-center"><img src="{{ url('i//download.png') }}" alt=""></div>
            </div>
        </div>
        <!-- Menu -->
        <div class="menu">
            <div class="menu_content d-flex flex-row align-items-start justify-content-end">
                <div class="hamburger ml-auto">menu</div>
                <div class="menu_nav text-right">
                    <ul>
                        <li><a href="{{ route('profile') }}">Басы</a></li>
                        <li><a href="{{ route('services') }}">Қызметтері</a></li>
                        <li><a href="{{ route('experience') }}">Жұмыс тәжірибесі</a></li>
                        <li><a href="{{ route('education') }}">Білімі</a></li>
                        <li><a href="{{ route('portfolio') }}">Портфолио</a></li>
                        <li><a href="{{ route('contact') }}">Кері байланыс</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
