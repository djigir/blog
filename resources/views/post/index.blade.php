@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Статьи</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">
                                    Категория:
                                    <a href="{{ route('category.post.index', $post->category->id) }}" style="color: #F29431">{{ $post->category->title }}</a>
                                </p>
                                @auth()
                                    <div class="post-like-block">
                                        <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                            @csrf
                                            <span>{{ $post->liked_users_count }}</span>
                                            <button type="submit" class="border-0 bg-transparent">
                                                @if(auth()->user()->likePosts->contains($post->id))
                                                    <i class="fas fa-heart"></i>
                                                @else
                                                    <i class="far fa-heart"></i>
                                                @endif
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                                {{-- guest --}}
                                @guest()
                                    <div>
                                        <span>{{ $post->liked_users_count }}</span>
                                        <i class="far fa-heart"></i>
                                    </div>
                                @endguest
                            </div>
                            <p class="blog-post-category">
                                Тэги:
                                @foreach($post->tags()->get() as $tag)
                                    <a href="{{ route('tag.post.index', $post->category->id) }}" style="color: #F29431">
                                        {{ '#'.$tag->title }}
                                    </a>
                                @endforeach
                            </p>
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>

            <div class="pagination mb-5">
                <div class="container">
                    <div class="row">
                        <div class="offset-3">
                            {{ $posts->withQueryString()->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="edica-page-title" data-aos="fade-up">Случайные статьи</h1>
            <div class="row">
                <div class="col-md-8">
                    <section class="random-posts">
                        <div class="row blog-post-row">
                            @foreach($random_posts as $random_post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ asset('storage/' . $random_post->preview_image) }}" alt="blog post">
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="blog-post-category">{{ $random_post->category->title }}</p>
                                        @auth()
                                            <div class="post-like-block">
                                                <form action="{{ route('post.like.store', $random_post->id) }}" method="POST">
                                                    @csrf
                                                    <span>{{ $random_post->liked_users_count }}</span>
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        @if(auth()->user()->likePosts->contains($random_post->id))
                                                            <i class="fas fa-heart"></i>
                                                        @else
                                                            <i class="far fa-heart"></i>
                                                        @endif
                                                    </button>
                                                </form>
                                            </div>
                                        @endauth
                                        {{-- guest --}}
                                        @guest()
                                            <div>
                                                <span>{{ $random_post->liked_users_count }}</span>
                                                <i class="far fa-heart"></i>
                                            </div>
                                        @endguest
                                    </div>
                                    <a href="{{ route('post.show', $random_post->id) }}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $random_post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>

                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Популярные категории</h5>
                        <div class="post-carousel">
                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach($popular_categories as $key => $popular_category)
                                    <li data-target="#carouselId" data-slide-to="{{ $key }}" class="carousel-li {{ $key == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">

                                    @foreach($popular_categories as $key => $popular_category)
                                        <figure class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ $popular_category->image }}" alt="First slide">
                                            <figcaption class="post-title">
                                                <a href="{{ route('category.post.index', $popular_category->id) }}">{{ $popular_category->title }}</a>
                                            </figcaption>
                                        </figure>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Больше всего лайков</h5>
                        <ul class="post-list">
                            @foreach($most_liked_posts as $most_liked_post)
                                <li class="post">
                                    <a href="{{ route('post.show', $most_liked_post->id) }}" class="post-permalink media">
                                        <img src="{{ asset('storage/' . $most_liked_post->preview_image) }}"
                                             alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{ $most_liked_post->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories"
                             class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
