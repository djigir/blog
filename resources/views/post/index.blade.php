@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Статьи</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">

                            @include('partials.post-card', ['item' => $post])

                        </div>
                    @endforeach
                </div>
            </section>

            @include('partials.pagination', ['items' => $posts])

            <hr>

            <h1 class="edica-page-title" data-aos="fade-up">Случайные статьи</h1>
            <div class="row">
                <div class="col-md-8">
                    <section class="random-posts">
                        <div class="row blog-post-row">
                            @foreach($random_posts as $random_post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">

                                    @include('partials.post-card', ['item' => $random_post])

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
                                        <li data-target="#carouselId" data-slide-to="{{ $key }}"
                                            class="carousel-li {{ $key == 0 ? 'active' : '' }}"></li>
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
                                    <a href="{{ route('post.show', $most_liked_post->id) }}"
                                       class="post-permalink media">
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
                        <h5 class="widget-title">Топ тэги</h5>
                        @foreach($top_tags as $top_tag)
                            <a href="{{ route('tag.post.index', $top_tag->id) }}" style="color: #F29431">
                                {{ '#'.$top_tag->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
