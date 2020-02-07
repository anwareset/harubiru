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
                                <img class="card-img rounded-0" src="{{ asset($article->thumbnail) }}" style="height: 275px; width: 750px; object-fit: cover;" alt="">
                                <a href="{{ route('blog.details', $article->slug) }}" class="blog_item_date">
                                    <center>
                                    <h3>{{ substr($article->created_at->diffForHumans(), 0, 2) }}</h3>
                                    <p>{{ substr($article->created_at->diffForHumans(), 2) }}</p>
                                    </center>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.details', $article->slug) }}">
                                    <h2>{{ $article->title }}</h2>
                                </a>
                                <p>{!! Str::limit($article->content, 150, '...') !!}</p>
                                <ul class="blog-info-link">
                                    <li><a href="{{ route('blog.details', $article->slug) }}"><i class="far fa-bookmark"></i> {{ $article->category->name }}</a></li>
                                    <li><a href="{{ route('blog.details', $article->slug) }}"><i class="far fa-comment-alt"></i> 03 Comments</a></li>
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
                @include('front-template.widgets')
            </div>
        </div>
    </section>
@endsection