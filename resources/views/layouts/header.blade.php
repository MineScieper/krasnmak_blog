<header class="header">
    <div class="header_container">
        <div class="header-background"></div>
        <a href="{{ route('home') }}" class="logo">
{{--            <img src="{{ asset('images/logo.png') }}" alt="Наш логотип." class="logo_img">--}}
            <img src="{{ asset('images/logo_3.png') }}" alt="Наш логотип." class="logo_img">
        </a>
        <div class="header-menu">
            <ul>
                <li><a href="{{ route('article.index', 'ucebnyi-kurs') }}" class="nav-link"> Учебный курс </a></li>
                <li><a href="{{ route('article.index', 'landsaftnyi-dizain') }}" class="nav-link"> Ландшафтный дизайн </a></li>
                <li><a href="{{ route('article.index', 'interer-s-prirodoi') }}" class="nav-link"> Интерьер с природой </a></li>
                <li><a href="{{ route('article.index', 'klub-zdorovya-v-udmurtii') }}" class="nav-link"> Клуб здоровья в Удмуртии </a></li>
                <li><a href="{{ route('article.index', 'turisticeskii-marsrut') }}" class="nav-link"> Туристический маршрут </a></li>
                <li><a href="{{ route('article.index', 'fotootkrytki') }}" class="nav-link"> Фотооткрытки </a></li>
            </ul>
        </div>
        <svg class="burger-icon visible"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             width="43px" height="30px">
            <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                  d="M-0.000,30.000 L-0.000,24.000 L43.000,24.000 L43.000,30.000 L-0.000,30.000 ZM-0.000,12.000 L43.000,12.000 L43.000,18.000 L-0.000,18.000 L-0.000,12.000 ZM-0.000,-0.000 L43.000,-0.000 L43.000,6.000 L-0.000,6.000 L-0.000,-0.000 Z"/>
        </svg>
        <svg class="cross-icon"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             width="35px" height="36px">
            <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                  d="M35.012,5.277 L22.016,18.273 L34.824,31.081 L30.581,35.324 L17.773,22.516 L4.277,36.012 L-0.012,31.723 L13.484,18.227 L0.176,4.919 L4.419,0.676 L17.727,13.984 L30.723,0.988 L35.012,5.277 Z"/>
        </svg>
    </div>
</header>

