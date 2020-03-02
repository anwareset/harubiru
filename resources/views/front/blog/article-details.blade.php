@extends('front-template.page')
@foreach ($contents as $content)
@section('title', $content->title)
@endforeach
@section('breadcrumb1', 'Detail Artikel')
@section('breadcrumb2', 'Artikel')
@section('breadcrumb-link', url('blog'))
@section('content')
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  @foreach ($contents as $content)
                  <div class="feature-img">
                     <img class="img-fluid" style="object-fit: cover" src="{{ asset($content->thumbnail) }}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{ $content->title }}</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-bookmark"></i> {{ $content->category->name }}</a></li>
                        <li><a href="#"><i class="fas fa-tags"></i> Digae, tags, ae, pye?</a></li>
                     </ul>
                     {!! $content->content !!}
                  </div>
                  @endforeach
               </div>
               <div class="navigation-top">
                  <div class="navigation-area">
                     <div class="row">
                        @if($previousPost)
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="{{ route('blog.details', $previousPost->slug) }}">
                                 <img class="img-fluid" style="height: 60px; width: 60px; object-fit: cover;" src="{{ asset($previousPost->thumbnail) }}" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="{{ route('blog.details', $previousPost->slug) }}">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="{{ route('blog.details', $previousPost->slug) }}">
                                 <h4>{{ $previousPost->title }}</h4>
                              </a>
                           </div>
                        </div>
                        @endif

                        @if(!isset($previousPost))
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p></p>
                              <a href="#">
                                 <h4></h4>
                              </a>
                           </div>
                        </div>
                        @endif
                        @if(!isset($nextPost))
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p></p>
                              <a href="#">
                                 <h4></h4>
                              </a>
                           </div>
                        </div>
                        @endif

                        @if($nextPost)
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="{{ route('blog.details', $nextPost->slug) }}">
                                 <h4>{{ $nextPost->title }}</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="{{ route('blog.details', $nextPost->slug) }}">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="{{ route('blog.details', $nextPost->slug) }}">
                                 <img class="img-fluid" style="height: 60px; width: 60px; object-fit: cover;" src="{{ asset($nextPost->thumbnail) }}" alt="">
                              </a>
                           </div>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                     @foreach ($contents as $content)
                     <img src="{{ asset(App\User::findorfail($content->users->id)->avatar) }}" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>{{ $content->users->name }} </h4>
                        </a>
                        <p>{{ $content->users->bio }}</p>
                     </div>
                     @endforeach
                  </div>
               </div>
               <!--<div class="comments-area">
                  <h4>05 Comments</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="{{ asset('front/img/comment/comment_2.png') }}" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="{{ asset('front/img/comment/comment_3.png') }}" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <div id="disqus_thread"></div>
                     <script>
                     /*
                     var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                     };
                     */
                     (function() { // DON'T EDIT BELOW THIS LINE
                     var d = document, s = d.createElement('script');
                     s.src = 'https://portaljati.disqus.com/embed.js';
                     s.setAttribute('data-timestamp', +new Date());
                     (d.head || d.body).appendChild(s);
                     })();
                     </script>
                     <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                  <!--<form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Send Message <i
                              class="flaticon-right-arrow"></i> </button>
                     </div>
                  </form>-->
               </div>
            </div>
            @include('front-template.widgets')
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
@endsection