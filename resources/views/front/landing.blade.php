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
                                    <a class="nav-link" href="{{ url('gallery') }}">Galeri</a>
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
                            <h1>Desa Jati, <br>
                                Untuk <a class="typewrite" data-period="2000" data-type='[ "Aku", "Kamu", "Semua" ]'></a></h1>
                            <p>Jati adalah desa yang mayoritas penduduknya petani, tempat pendidikannya SD, MI dan SMPN Tarokan serta. beberapa Ponpes yang berada di kecamatan Tarokan, Kabupaten Kediri, Jawa Timur, Indonesia. Di desa ini terdapat industri rumah tangga yaitu tahu tempe bengkel pembuat alat pertanian seperti mesin perontok padi/jagung yang bergerak dalam pembuatan tempe.</p>
                            <a href="{{ url('#fuck') }}" class="btn_2" style="text-align: center;"><li class="fas fa-angle-double-down rotate"></li> Lanjutkan Membaca</a>
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
    <section class="use_sasu padding_top" id="fuck">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <!-- <img src="{{asset('front/img/icon/feature_icon_1.png') }}" alt=""> -->
                            <li class="fas fa-leaf" style="font-size: 30px; margin-bottom: 20px;"></li>
                            <h4>Tanah yang subur</h4>
                            <p>Desa ini cocok untuk lahan pertanian dan perkebunan. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <!-- <img src="{{asset('front/img/icon/feature_icon_2.png') }}" alt=""> -->
                            <li class="fas fa-cloud"  style="font-size: 30px; margin-bottom: 20px;"></li>
                            <h4>Cuaca yang bersahabat</h4>
                            <p>Desa Jati memiliki cuaca yang berawan dan terkadang hujan, yang menjadikan
                            desa ini memiliki udara bersih dan sejuk. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <!-- <img src="{{asset('front/img/icon/feature_icon_3.png') }}" alt=""> -->
                            <li class="fas fa-book"  style="font-size: 30px; margin-bottom: 20px;"></li>
                            <h4>Desa Pendidikan</h4>
                            <p>Lebih dari 1 sekolah tersebar di desa ini. </p>
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
                        <h2>Anda memiliki info dan ingin membagikannya?</h2>
                        <p>Lelah menjadi individu kesepian? Mulailah menulis artikel anda sendiri, dan berbagilah informasi
                        kepada teman-teman anda.</p>
                        <a href="{{ url('login') }}" class="btn_2">Bergabung</a>
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
                            <img src="{{asset('front/img/client_logo/mariadb.png')}}" alt="">
                        </div>
                        <!-- <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/heroku.png')}}" alt="">
                        </div>
                        <div class="single_client_logo">
                            <img src="{{asset('front/img/client_logo/docker.png')}}" alt="">
                        </div> -->
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
    <script>
        $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
    </script>
</body>

</html>