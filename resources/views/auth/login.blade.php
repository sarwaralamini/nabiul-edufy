@extends('layouts.frontend')

@section('content')
<section class="section-container">
    <div class="container">
        <div class="row box-content">
            <div class="col-12 col-lg-5" style="padding-top:15px;padding-bottom:15px;">
                <div class="login-bg text-center text-white">
                    <div class="content">
                        <div class="logo">
                            <div class="login-img">
                                <img src="{{ asset('dist/frontend/img/logo.png') }}" alt="" width="100%">
                            </div>
                        </div>

                        <h1> <strong> - স্বাগতম - </strong> </h1>
                        <h5> লগইন </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7" style="padding-top:15px;padding-bottom:15px;">
                <div class="login-right text-center text-white">
                    <div class="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" class="form-control" placeholder="ইউজার আইডি">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="পাসওয়ার্ড">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="from-group">
                                <a href="#" class="forget-btn">পাসওয়ার্ড ভুলে গেছেন?</a>
                            </div>
                            <div class="from-group">
                                <button type="submit" class="custom-button">লগইন করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
