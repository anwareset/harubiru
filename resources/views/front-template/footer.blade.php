<footer class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-4 col-lg-5">
                <div class="single_footer_part">
                    <a href="{{ url('') }}" class="footer_logo_iner"> <img src="{{asset('front/img/HaruBiru_footer.png')}}" alt="#"> </a>
                    <p>Web Profil untuk Desa Jati dan Portal informasi seputar Desa Jati, Tarokan.
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-1">
                <div class="single_footer_part">
                    
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="single_footer_part">
                    <h4>Untuk Kami</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('report-bug') }}">Laporkan Bug</a></li>
                        <li><a href="{{ url('heroes') }}">Saran Anda</a></li>
                        <li><a href="{{ url('contribute') }}">Kontribusi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="single_footer_part">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('licensed') }}">License</a></li>
                        <li><a href="{{ url('help') }}">Panduan</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-2">
                <div class="single_footer_part">
                    <h4>Resources</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://kedirikab.go.id/">Situs Resmi Kab. Kediri</a></li>
                        <li><a href="https://id.wikipedia.org/wiki/Jati,_Tarokan,_Kediri">Wikipedia</a></li>
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
                        Copyleft &copy <script>document.write(new Date().getFullYear());</script> | Made with <svg class="mx-1" height="16" width="16" viewBox="0 0 47.5 47.5" style="enable-background:new 0 0 47.5 47.5"><clipPath id="clipPath16" clipPathUnits="userSpaceOnUse"><path id="path18" d="M0 38H38V0H0V38z" /></clipPath></defs><g transform="matrix(1.25,0,0,-1.25,0,47.5)" id="g10"><g id="g12"><g clip-path="url(#clipPath16)" id="g14"><g transform="translate(36.8848,25.1665)" id="g20"><path id="path22" style="fill:#be1931;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m0 0c0 5.45-4.418 9.868-9.867 9.868-3.308.0-6.227-1.633-8.018-4.129-1.79 2.496-4.71 4.129-8.017 4.129-5.45.0-9.868-4.418-9.868-9.868.0-.772.098-1.52.266-2.241 1.371-8.512 10.835-17.494 17.619-19.96 6.783 2.466 16.249 11.448 17.617 19.96C-.098-1.52.0-.772.0.0" /></g></g></g></g></svg> by <a href="{{ url('') }}" target="_blank">{{ App\Sites::first()->sitename }}</a>
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
                            <li><a href="https://github.com/ledleledle" class="single_social_icon"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>