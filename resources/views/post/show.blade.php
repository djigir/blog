@extends('layouts.main')

@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">
                Категория: {{ $post->category->title }}
                • Опубликованно: {{ \Str::ucfirst($post_created_date->translatedFormat('F')) }}
                {{ $post_created_date->day }},
                {{ $post_created_date->year }} • {{ $post_created_date->format('H:i') }}
                • Коментарии {{ $post->comments->count() }}
            </p>
            <section class="blog-post-featured-img text-center" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $post->main_image) }}" alt="featured image" class="w-75">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p>{!! $post->content !!}</p>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">

                    <section class="like-post-section py-3">
                        @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                            @csrf
                            <span>{{ $post->liked_users_count }}</span>
                            <span class="float-right">Тэги: @foreach($post->tags as $tag) <a href="{{ route('tag.post.index', $tag->id) }}" style="color: #F29431">{{ '#'.$tag->title }}</a> @endforeach</span>
                            <button type="submit" class="border-0 bg-transparent">
                                    @if(auth()->user()->likePosts->contains($post->id))
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                            </button>
                        </form>
                        @endauth
                            @guest()
                                <div>
                                    <span>Лайков: {{ $post->liked_users_count }}</span>
                                    <span class="float-right">Тэги: @foreach($post->tags as $tag) <a href="{{ route('tag.post.index', $tag->id) }}" style="color: #F29431">{{ '#'.$tag->title }}</a> @endforeach</span>
                                    <i class="far fa-heart"></i>
                                </div>
                            @endguest
                    </section>

                    @if($related_posts->count() > 0)
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                            <div class="row">
                                @foreach($related_posts as $related_post)
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <img src="{{ asset('storage/' . $related_post->preview_image) }}" alt="related post"
                                             class="post-thumbnail">
                                        <p class="post-category">{{ $related_post->category->title }}</p>
                                        <a href="{{ route('post.show', $related_post->id) }}"><h5
                                                class="post-title">{{ $related_post->title }}</h5></a>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                    <section class="comment-lists mb-4">
                        <h2 class="section-title mb-5" data-aos="fade-up">Коментарии ({{ $post->comments->count() }}
                            )</h2>

                        @foreach($post->comments as $comment)
                            <div class="comment-text mb-3">
                        <span class="username">
                      <div>
                          <b>{{ $comment->user->name }}</b>
                      </div>
                      <span class="text-muted float-right">{{ $comment->dateCarbon->diffForHumans() }}</span>
                        </span>
                                {{ $comment->message }}
                            </div>
                            <hr>
                        @endforeach

                        @auth()
                            <section class="comment-section">
                                <form action="{{ route('post.comment.store', $post->id) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12" data-aos="fade-up">
                                            <label for="comment" class="sr-only">Comment</label>
                                            <textarea name="message" id="comment" class="form-control"
                                                      placeholder="Коментарий"
                                                      rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" data-aos="fade-up">
                                            <input type="submit" value="Отправить" class="btn btn-warning">
                                        </div>
                                    </div>
                                </form>
                            </section>
                        @endauth
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
