<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ App\Sites::first()->sitename }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('front/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('front/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('front/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="index.html"> <img src="{{asset('front/img/HaruBiru.png') }}" alt="logo"> </a>
                        <a class="navbar-brand single_page_logo" href="index.html"> <img src="{{asset('front/img/HaruBiru_footer.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Ingin Menulis?</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="features.html">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="elements.html">Portofolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.html">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
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
                                Untuk Semua</h1>
                            <p>Anda sedang berada dalam mesin inkubator,
                                dan mesin ini akan membantu anda tetap bertahan
                                hidup. Lalu bertumbuh kembang menghadapi dunia.</p>
                            <a href="#" class="btn_2">Ayo Mempelajarinya</a>
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
    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 col-lg-5">
                    <div class="single_footer_part">
                        <a href="index.html" class="footer_logo_iner"> <img src="{{asset('front/img/HaruBiru_footer.png')}}" alt="#"> </a>
                        <p>Didedikasikan untuk semua yang ingin belajar tentang
                            pengetahuan dan teknologi. Ketidaktahuan memperbudak, pengetahuan membebaskan.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-1">
                    <div class="single_footer_part">
                        
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Hall Of Fame</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Report Bug</a></li>
                            <li><a href="">Heroes</a></li>
                            <li><a href="">Patched</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">License</a></li>
                            <li><a href="">Privacy & Policy</a></li>
                            <li><a href="">Contribute</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="http://owrt.ddns.my.id:8080/webui-aria2/">Aria2 Downloader</a></li>
                            <li><a href="ftp://owrt.ddns.my.id">FTP Server</a></li>
                            <li><a href="http://www.onlinux.me">OnLinux</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyleft &copy <script>document.write(new Date().getFullYear());</script> | Made with <svg class="mx-1" height="16" width="16" viewBox="0 0 47.5 47.5" style="enable-background:new 0 0 47.5 47.5"><clipPath id="clipPath16" clipPathUnits="userSpaceOnUse"><path id="path18" d="M0 38H38V0H0V38z" /></clipPath></defs><g transform="matrix(1.25,0,0,-1.25,0,47.5)" id="g10"><g id="g12"><g clip-path="url(#clipPath16)" id="g14"><g transform="translate(36.8848,25.1665)" id="g20"><path id="path22" style="fill:#be1931;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m0 0c0 5.45-4.418 9.868-9.867 9.868-3.308.0-6.227-1.633-8.018-4.129-1.79 2.496-4.71 4.129-8.017 4.129-5.45.0-9.868-4.418-9.868-9.868.0-.772.098-1.52.266-2.241 1.371-8.512 10.835-17.494 17.619-19.96 6.783 2.466 16.249 11.448 17.617 19.96C-.098-1.52.0-.772.0.0" /></g></g></g></g></svg> by <a href="http://127.0.0.1" target="_blank">HaruBiru</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-telegram"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('front/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('front/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('front/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('front/js/slick.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('front/js/contact.js')}}"></script>
    <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.form.js')}}"></script>
    <script src="{{asset('front/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('front/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('front/js/custom.js')}}"></script>
</body>

</html>