@extends('layouts.main')

@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $posts[0]->category->title }}</h1>
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

        </div>
    </main>
@endsection
