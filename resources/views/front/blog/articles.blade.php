@extends('front-template.page')
@section('title', 'Articles')
@section('breadcrumb1', 'Articles')
@section('breadcrumb2', 'Articles')
@section('content')
<section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @if(count($articles))
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
                                <p>{{ Str::limit($article->description, 300, '...') }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="{{ route('blog.category', $article->category->slug) }}"><i class="far fa-bookmark"></i> {{ $article->category->name }}</a></li>
                                    <li><a href="{{ route('blog.author', $article->users->id) }}"><i class="fas fa-user-alt"></i> {{ $article->users->name }}</a></li>
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
                        @else
                        <center>
                            <img style="max-width: 260px; object-fit: cover;" src="{{ asset('assets/img/sadly-not-found.jpg') }}">
                            <h2>Oops!</h2>
                            <p>Article Not Found</p>
                        </center>
                        @endif
                    </div>
                </div>
                @include('front-template.widgets')
            </div>
        </div>
    </section>
@endsection