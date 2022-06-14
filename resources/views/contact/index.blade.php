@extends('layouts.main')

@section('content')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">Контакты</h1>
                    <section class="edica-contact py-5 mb-5">
                        <div class="row">
                            <div class="col-md-8 contact-form-wrapper">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissable custom-success-box"
                                         style="margin: 15px;">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong> {{ session('success') }} </strong>
                                    </div>
                                @endif
                                <h5 data-aos="fade-up" class="aos-init aos-animate">Форма контактов</h5>
                                <form action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="is_registered" value="{{ !is_null(auth()->user()) ? 1 : 0 }}">
                                    <div class="row">
                                        <div class="form-group col-md-6 aos-init aos-animate" data-aos="fade-up">
                                            <label for="name">Имя</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Ваше имя" value="{{ !is_null(auth()->user()) ? auth()->user()->name : old('name') }}">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 aos-init" data-aos="fade-up"
                                             data-aos-delay="100">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Email" value="{{ !is_null(auth()->user()) ? auth()->user()->email : old('email') }}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12 aos-init" data-aos="fade-up" data-aos-delay="200">
                                            <label for="message">Сообщение</label>
                                            <textarea name="message" id="message" rows="9" class="form-control"
                                                      placeholder="Сообщение">{{ old('message') }}</textarea>
                                            @error('message')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-lg aos-init" data-aos="fade-up"
                                            data-aos-delay="300">Отправить
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-4 contact-sidebar aos-init aos-animate" data-aos="fade-left">
                                <h5>Contact us</h5>
                                <p>Need assistance? Our customer service is here to assist you Monday through Friday
                                    from 9 am EST to 10 pm EST.</p>
                                <p>56 Livingston Street,<br> Brooklyn, NY 11201</p>
                                <div class="embed-responsive embed-responsive-1by1 contact-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12090.496282731767!2d-73.98517381282224!3d40.74829681924569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259041366262b%3A0xfdac298467953648!2sMurray%20Hill%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1588137209658!5m2!1sen!2sin"
                                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
