<header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('') }}"> <img src="{{asset('front/img/image10.png') }}" alt="logo" width="120px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('') }}">BERANDA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('blog')}}">Artikel & Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('gallery') }}">Galeri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('about') }}">TENTANG desa KAMI</a>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ url('contact') }}" class="d-none d-sm-block btn_1"><i class="fas fa-phone"></i> HUBUNGI KAMI</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>