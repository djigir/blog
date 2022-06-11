<div class="blog-post-thumbnail-wrapper">
    <img src="{{ asset('storage/' . $item->preview_image) }}" alt="blog post">
</div>
<div class="d-flex justify-content-between">
    <p class="blog-post-category">
        <b>Категория:</b>
        <a href="{{ route('category.post.index', $item->category->id) }}" style="color: #F29431">{{ $item->category->title }}</a>
    </p>
    @auth()
        <div class="post-like-block">
            <form action="{{ route('post.like.store', $item->id) }}" method="POST">
                @csrf
                <span>{{ $item->liked_users_count }}</span>
                <button type="submit" class="border-0 bg-transparent">
                    @if(auth()->user()->likePosts->contains($item->id))
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
            <span>{{ $item->liked_users_count }}</span>
            <i class="far fa-heart"></i>
        </div>
    @endguest
</div>
<p class="blog-post-category">
    <b>Тэги:</b>
    @foreach($item->tags()->get() as $tag)
        <a href="{{ route('tag.post.index', $item->category->id) }}" style="color: #F29431">
            {{ '#'.$tag->title }}
        </a>
    @endforeach
</p>
<a href="{{ route('post.show', $item->id) }}" class="blog-post-permalink">
    <h6 class="blog-post-title">{{ $item->title }}</h6>
</a>
