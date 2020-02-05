<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>@yield('breadcrumb1')</h2>
                        <h5><a href="{{ url('') }}" style="color: white;">HOME</a><span></span><a href="@yield('breadcrumb-link')" style="color: white;">@yield('breadcrumb2')</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>