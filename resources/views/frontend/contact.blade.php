@extends('layouts.frontend')

@section('title', 'যোগাযোগ')

@section('content')
<section class="section-breadcrum">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">হোম</a></li>
              <li class="breadcrumb-item active" aria-current="page">যোগাযোগ</li>
            </ol>
          </nav>
    </div>
</section>
<!-- Common Section-->
<section class="section-common">
    <div class="container">
        <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ6Re3Tq235DkRvplpd4_n8cs&key=AIzaSyAyLwganOYT0W9dE50vWRAv-_j4LGFuqsM"></iframe>
    </div>
</section>
<!-- Common Section-->

<!-- Contact Section -->
<section class="section-common mt-5 mb-5">
    <div class="container">
        <div class="row common-box-content">
            <div class="col-12 col-lg-5" style="padding-top:15px;padding-bottom:15px;background-color:#8cc63f;">
                <div class="contact-item text-center">
                    <div class="contact-item-title">
                        যোগাযোগ
                        <img src="{{ asset('dist/frontend/img/icon/mb-white.png') }}" alt="">
                    </div>

                    <div class="contact-item-content">
                        <span>
                            বুলিয়া বাজার কলেজ, <br>কাহারল, দিনাজপুর- ৫২২৬<br> ০১৭১৪-৫৬৯৫৮৯<br>
                            <a href="#">contact@buliabazarcollege.edu.bd</a>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7" style="padding-top:15px;padding-bottom:15px;">
                <div class="text-center text-white">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="" class="form-control @error('name') is-invalid @enderror" class="form-control" placeholder="নাম">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="মোবাইল নম্বর">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="" class="form-control @error('subject') is-invalid @enderror" placeholder="বিষয়">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="বার্তা"></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                @captcha
                                <input type="text" id="captcha" class="form-control @error('password') is-invalid @enderror mt-2" name="captcha" autocomplete="off" placeholder="উপরের লিখাটি লিখুন">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <span class="form-text text-justify text-muted" style="font-size:14px;">
                                    <span class="text-danger">**বিঃদ্রঃ: </span>
                                    <span>
                                        নতুন ক্যাপচা ছবি পুনরায় তৈরি করতে ক্যাপচা ছবির উপর ক্লিক করুন।
                                    </span>
                                </span>
                            </div>
                            <div class="from-group">
                                <button type="submit" class="custom-button">বার্তা পাঠান</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
@endsection

