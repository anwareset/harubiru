<!doctype html>
<html lang="zxx">
@section('title', 'Home')
@include('front-template.head')

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="{{ url('') }}"><img src="{{asset('front/img/HaruBiru.png') }}" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="{{ url('') }}"> <img src="{{asset('front/img/HaruBiru_footer.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('') }}">beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('galeri') }}">Galeri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}">tentang kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">hubungi kami</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="d-none d-sm-block btn_1 home_page_btn">Sedang Beruntung?</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    <!--::banner part start::-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <img src="{{asset('front/img/banner_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Hadirkan Teknologi
                                Untuk <a class="typewrite" data-period="2000" data-type='[ "Aku", "Kamu", "Semua" ]'></a></h1>
                            <p>Jati adalah desa yang mayoritas penduduknya petani, tempat pendidikannya sd,mi dan smpn tarokan serta. beberapa ponpes yang berada di kecamatan Tarokan, Kabupaten Kediri, Jawa Timur, Indonesia. Di desa ini terdapat industri rumah tangga yaitu tahu tempe bengkel pembuat alat pertanian seperti mesin perontok padi/jagung yang bergerak dalam pembuatan tempe.</p>
                            <a href="{{ url('blog') }}" class="btn_2" style="text-align: center;"><li class="fas fa-angle-double-down"></li> Lanjutkan Membaca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('front/img/animate_icon/Ellipse_7.png') }}" alt="" class="feature_icon_1 custom-animation1">
        <img src="{{asset('front/img/animate_icon/Ellipse_8.png') }}" alt="" class="feature_icon_2 custom-animation2">
        <img src="{{asset('front/img/animate_icon/Ellipse_1.png') }}" alt="" class="feature_icon_3 custom-animation3">
        <img src="{{asset('front/img/animate_icon/Ellipse_2.png') }}" alt="" class="feature_icon_4 custom-animation4">
        <img src="{{asset('front/img/animate_icon/Ellipse_3.png') }}" alt="" class="feature_icon_5 custom-animation5">
        <img src="{{asset('front/img/animate_icon/Ellipse_4.png') }}" alt="" class="feature_icon_6 custom-animation6">
    </section>
    <!--::banner part start::-->

    <!--::use sasu part end::-->
    <section class="use_sasu padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="{{asset('front/img/icon/feature_icon_1.png') }}" alt="">
                            <h4>Amankan Diri</h4>
                            <p>Mari mencari tahu bagaimana suatu hal dapat bekerja lalu belajar
                            cara mengamankannya agar tetap terlindungi dari berbagai kemungkinan
                            buruk. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="{{asset('front/img/icon/feature_icon_2.png') }}" alt="">
                            <h4>Bebaskan Diri</h4>
                            <p>Melepaskan diri dari hal mainstream.
                            Tuangkan ide ke suatu hal, dan temukan sebuah
                            inovasi. Karena setiap individu adalah unik. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="{{asset('front/img/icon/feature_icon_3.png') }}" alt="">
                            <h4>Tumpukan Teknologi</h4>
                            <p>Sudahi kebiasaan konsumeris, karena diluar sana
                            ada banyak tumpukan teknologi yang dapat digunakan untuk membangun
                            kebutuhanmu sendiri. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('front/img/animate_icon/Ellipse_1.png') }}" alt="" class="feature_icon_1 custom-animation1">
    </section>
    <!--::use sasu part end::-->

    <!--::about_us part start::-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <img src="{{asset('front/img/icon/Icon_1.png') }}" alt="">
                        <h2>Kami akan berada di<br>
                            berbagai Media Sosial</h2>
                        <p>Supaya kita dapat terus berinteraksi, HaruBiru
                        akan membuat akun di beberapa Media Sosial seperti Facebook, Instagram,
                        Twitter, dan tentu saja bahkan di YouTube.</p>
                        <a href="#" class="btn_2">Temukan Kami</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="{{asset('front/img/about_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('front/img/animate_icon/Ellipse_4.png')}}" alt="" class="feature_icon_1 custom-animation1">
    </section>
    <!--::about_us part end::-->

    <!--::about_us part start::-->
    <section class="about_us right_time">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="{{asset('front/img/kedua.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <img src="{{asset('front/img/icon/Icon_2.png')}}" alt="">
                        <h2>Berkumpul dan berdiskusi bersama</h2>
                        <p>Lelah menjadi individu kesepian? Ayo berkumpul dalam lingkungan diskusi komunal.
                        Bertukar pikiran pada komune bersama-sama di Telegram.</p>
                        <a href="#" class="btn_2">Bergabung</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('front/img/animate_icon/Ellipse_5.png')}}" alt="" class="feature_icon_2 custom-animation2">
    </section>
    <!--::about_us part end::-->

    <!--::client logo part end::-->
    <br><br><br>
    <section class="client_logo">
        <img src="{{asset('front/img/animate_icon/Ellipse_1.png')}}" alt="" class="feature_icon_1 custom-animation1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h3>Beberapa teknologi yang digunakan di HaruBiru</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="owl-carousel d-flex justify-content-between">
                        <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/laravel.png')}}" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/nginx.png')}}" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/heroku.png')}}" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/mariadb.png')}}" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/docker.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::client logo part end::-->

    <!--::footer_part start::-->
    @include('front-template.footer')
    <!--::footer_part end::-->

    <!-- JavaScript -->
    @include('front-template.js')
</body>

</html>