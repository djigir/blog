@extends('layouts.main')

@section('content')
    <main class="blog mb-5">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($categories as $category)
                        @if($category->posts->count() > 0)
                            <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('storage/'. $category->image) }}" alt="blog post">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="blog-post-category">Количество постов: {{ $category->posts->count() }}</p>
                                </div>
                                <a href="{{ route('category.post.index', $category->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $category->title }}</h6>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>

            @include('partials.pagination', ['items' => $categories])

        </div>
    </main>
@endsection
