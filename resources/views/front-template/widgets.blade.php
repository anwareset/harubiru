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
            <h3 class="widget_title">Popular Post</h3>
            @foreach($widgets as $widget)
            <div class="media post_item">
                <img src="{{ asset($widget->thumbnail) }}" style="width: 85px; height: 85px; object-fit: cover;" alt="post">
                <div class="media-body">
                    <a href="{{ route('blog.details', $widget->slug) }}">
                        <h3>{{ $widget->title }}</h3>
                    </a>
                    <p>{{ $widget->created_at->diffForHumans() }}</p>
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