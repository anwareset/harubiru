@extends('front-template.page')
@section('title', 'Blog')
@section('breadcrumb1', 'Articles')
@section('breadcrumb2', 'Blog')
@section('content')
<section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($articles as $article)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ $article->thumbnail }}" style="height: 275px; width: 750px; object-fit: cover;" alt="">
                                <a href="#" class="blog_item_date">
                                    <center>
                                    <h3>{{ substr($article->created_at->diffForHumans(), 0, 2) }}</h3>
                                    <p>{{ substr($article->created_at->diffForHumans(), 2) }}</p>
                                    </center>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>{{ $article->title }}</h2>
                                </a>
                                <p>{{ substr($article->content, 3, 160) }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-bookmark"></i> {{ $article->category->name }}</a></li>
                                    <li><a href="#"><i class="far fa-comment-alt"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <div class="container">
                                    {{ $articles->links() }}
                                </div>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Find Something'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Find Something'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach($categories as $category)
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>{{ $category->name }}</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach($articles as $article)
                            <div class="media post_item">
                                <img src="{{ $article->thumbnail }}" style="width: 85px; height: 85px; object-fit: cover;" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>{{ $article->title }}</h3>
                                    </a>
                                    <p>{{ $article->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tags</h4>
                            <ul class="list">
                                @foreach($tags as $tag)
                                <li>
                                    <a href="#">{{ $tag->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection