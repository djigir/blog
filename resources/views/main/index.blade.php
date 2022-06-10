@extends('layouts.main')

@section('content')


    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up-right">
                        <h4 class="edica-landing-section-subtitle-alt">ABOUT US</h4>
                        <h2 class="edica-landing-section-title">1000+ customer using Our application.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim que minim veniam, quis nostrud exercitation.</p>
                        <ul class="landing-about-list">
                            <li>Powerful and flexible theme</li>
                            <li>Simple, transparent pricing</li>
                            <li>Build tools and full documention</li>
                        </ul>
                    </div>
                    <div class="col-md-6 aos-init aos-animate" data-aos="fade-up-left">
                        <img src="assets/images/phone-copy.png" width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-clients">
            <div class="container">
                <h4 class="edica-landing-section-subtitle-alt">PARTNER WITH US</h4>
                <div class="partners-wrapper">
                    <img src="assets/images/Partner_1.png" alt="client logo" data-aos="flip-right" data-aos-delay="250" class="aos-init">
                    <img src="assets/images/Partner_2.png" alt="client logo" data-aos="flip-right" data-aos-delay="500" class="aos-init">
                    <img src="assets/images/Partner_3.png" alt="client logo" data-aos="flip-right" data-aos-delay="750" class="aos-init">
                    <img src="assets/images/Partner_4.png" alt="client logo" data-aos="flip-right" data-aos-delay="1000" class="aos-init">
                    <img src="assets/images/Partner_5.png" alt="client logo" data-aos="flip-right" data-aos-delay="1250" class="aos-init">
                    <img src="assets/images/Partner_6.png" alt="client logo" data-aos="flip-right" data-aos-delay="1500" class="aos-init">
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-services">
            <div class="container">
                <h4 class="edica-landing-section-subtitle">Service We Offer</h4>
                <h2 class="edica-landing-section-title">What features you will <br> Get from App.</h2>
                <div class="row">
                    <div class="col-md-6 landing-service-card aos-init" data-aos="fade-right">
                        <img src="assets/images/picture.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Live Video</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card aos-init" data-aos="fade-left">
                        <img src="assets/images/internet.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Secure and Reliable</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card aos-init" data-aos="fade-right">
                        <img src="assets/images/goal.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Fast. Instantly.</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card aos-init" data-aos="fade-left">
                        <img src="assets/images/chat-bubble.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Built-in Messenger</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-testimonials aos-init" data-aos="fade-up">
            <div class="container">
                <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel" data-ride="carousel">
                    <div class="text-center py-4">
                        <img src="assets/images/quote.svg" alt="quote">
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item active">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="0" class="">
                            <img src="assets/images/oval-copy-3.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="1" class="">
                            <img src="assets/images/oval-copy-4.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="2" class="">
                            <img src="assets/images/oval.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>

                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="3" class="active">
                            <img src="assets/images/oval-copy.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="4" class="">
                            <img src="assets/images/oval-copy-2.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle aos-init" data-aos="fade-up">Blog posts</h4>
                <h2 class="edica-landing-section-title aos-init" data-aos="fade-up">Check our app latest blog post <br> for more update.</h2>
                <div class="row">
                    <div class="col-md-4 landing-blog-post aos-init" data-aos="fade-right">
                        <img src="assets/images/rectangle.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post aos-init" data-aos="fade-up">
                        <img src="assets/images/rectangle-copy.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post aos-init" data-aos="fade-left">
                        <img src="assets/images/rectangle-copy-2.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-1 mb-4 mb-md-0 aos-init" data-aos="fade-right">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-2 aos-init" data-aos="fade-left">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


{{--<main class="blog">--}}
{{--    <div class="container">--}}
{{--        <h1 class="edica-page-title" data-aos="fade-up">Статьи</h1>--}}
{{--        <section class="featured-posts-section">--}}
{{--            <div class="row">--}}
{{--                @foreach($posts as $post)--}}
{{--                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">--}}
{{--                    <div class="blog-post-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">--}}
{{--                    </div>--}}
{{--                    <p class="blog-post-category">{{ $post->category->title }}</p>--}}
{{--                    <a href="#" class="blog-post-permalink">--}}
{{--                        <h6 class="blog-post-title">{{ $post->title }}</h6>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <div class="pagination mb-5">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="offset-3">--}}
{{--                        {{ $posts->withQueryString()->links('pagination::bootstrap-4') }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-8">--}}

{{--                <section>--}}
{{--                    <div class="row blog-post-row">--}}
{{--                        @foreach($random_posts as $random_post)--}}
{{--                            <div class="col-md-6 blog-post" data-aos="fade-up">--}}
{{--                                <div class="blog-post-thumbnail-wrapper">--}}
{{--                                    <img src="{{ asset('storage/' . $random_post->preview_image) }}" alt="blog post">--}}
{{--                                </div>--}}
{{--                                <p class="blog-post-category">{{ $random_post->category->title }}</p>--}}
{{--                                <a href="#!" class="blog-post-permalink">--}}
{{--                                    <h6 class="blog-post-title">{{ $random_post->title }}</h6>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </section>--}}

{{--            </div>--}}
{{--            <div class="col-md-4 sidebar" data-aos="fade-left">--}}
{{--                <div class="widget widget-post-carousel">--}}
{{--                    <h5 class="widget-title">Post Lists</h5>--}}
{{--                    <div class="post-carousel">--}}
{{--                        <div id="carouselId" class="carousel slide" data-ride="carousel">--}}
{{--                            <ol class="carousel-indicators">--}}
{{--                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>--}}
{{--                                <li data-target="#carouselId" data-slide-to="1"></li>--}}
{{--                                <li data-target="#carouselId" data-slide-to="2"></li>--}}
{{--                            </ol>--}}
{{--                            <div class="carousel-inner" role="listbox">--}}
{{--                                <figure class="carousel-item active">--}}
{{--                                    <img src="{{ asset('assets/images/blog_widget_carousel.jpg') }}" alt="First slide">--}}
{{--                                    <figcaption class="post-title">--}}
{{--                                        <a href="#!">Front becomes an official Instagram Marketing Partner</a>--}}
{{--                                    </figcaption>--}}
{{--                                </figure>--}}
{{--                                <figure class="carousel-item">--}}
{{--                                    <img src="{{ asset('assets/images/blog_7.jpg') }}" alt="First slide">--}}
{{--                                    <figcaption class="post-title">--}}
{{--                                        <a href="#!">Front becomes an official Instagram Marketing Partner</a>--}}
{{--                                    </figcaption>--}}
{{--                                </figure>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img src="{{ asset('assets/images/blog_5.jpg') }}" alt="First slide">--}}
{{--                                    <figcaption class="post-title">--}}
{{--                                        <a href="#!">Front becomes an official Instagram Marketing Partner</a>--}}
{{--                                    </figcaption>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="widget widget-post-list">--}}
{{--                    <h5 class="widget-title">Больше всего лайков</h5>--}}
{{--                    <ul class="post-list">--}}
{{--                        @foreach($most_liked_posts as $most_liked_post)--}}
{{--                        <li class="post">--}}
{{--                            <a href="#!" class="post-permalink media">--}}
{{--                                <img src="{{ asset('storage/' . $most_liked_post->preview_image) }}" alt="blog post">--}}
{{--                                <div class="media-body">--}}
{{--                                    <h6 class="post-title">{{ $most_liked_post->title }}</h6>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="widget">--}}
{{--                    <h5 class="widget-title">Categories</h5>--}}
{{--                    <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories" class="w-100">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</main>--}}
@endsection
