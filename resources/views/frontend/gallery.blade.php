@extends('layouts.frontend')

@section('title', 'ইভেন্ট গ্যালারী')

@section('content')
<section class="section-breadcrum">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">হোম</a></li>
              <li class="breadcrumb-item active" aria-current="page">ইভেন্ট গ্যালারী</li>
            </ol>
          </nav>
    </div>
</section>
<!-- Common Section-->
<section class="section-common">
    <div class="container">
        <div class="events">
            <div class="row">
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="event-title">
                            ২১শে ফেব্রুয়ারি
                            <img src="{{ asset('dist/frontend/img/icon/mb.png') }}" alt="">
                        </div>
                        <div class="event-content pt-4 pl-4 pr-4 pl-md-0 pr-md-0 pt-lg-0">
                            <img src="{{ asset('dist/frontend/img/events/21.jpg') }}" alt="" class="img-fluid">
                            <a href="#">অমর ২১ শে ফেব্রুয়ারি উৎযাপন। মোদের গরব মোদের আশা</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="event-title">
                            ২৬ শে মার্চ
                            <img src="{{ asset('dist/frontend/img/icon/mb.png') }}" alt="">
                        </div>
                        <div class="event-content pt-4 pl-4 pr-4 pl-md-0 pr-md-0 pt-lg-0">
                            <img src="{{ asset('dist/frontend/img/events/26.jpg') }}" alt="" class="img-fluid">
                            <a href="#">২৬ শে মার্চ মহান স্বাধীনতা দিবস ১৯৭১ সালের এই দিনে বিশ্ব মানচিত্রে আবির্ভাব হয় বাংলাদেশ নামক রাষ্ট্রের ।</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="event-title">
                            ১৬ই ডিসেম্বর
                            <img src="{{ asset('dist/frontend/img/icon/mb.png') }}" alt="">
                        </div>
                        <div class="event-content pt-4 pl-4 pr-4 pl-md-0 pr-md-0 pt-lg-0">
                            <img src="{{ asset('dist/frontend/img/events/16.jpg') }}" alt="" class="img-fluid">
                            <a href="#">আজ ১৬ই ডিসেম্বর, মহান বিজয় দিবস। বাঙালি জাতির জীবনের সবচেয়ে বড় আনন্দ এবং অর্জনের দিনটি আজ।</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="event-title">
                            ২১শে ফেব্রুয়ারি
                            <img src="{{ asset('dist/frontend/img/icon/mb.png') }}" alt="">
                        </div>
                        <div class="event-content pt-4 pl-4 pr-4 pl-md-0 pr-md-0 pt-lg-0">
                            <img src="{{ asset('dist/frontend/img/events/21.jpg') }}" alt="" class="img-fluid">
                            <a href="#">অমর ২১ শে ফেব্রুয়ারি উৎযাপন। মোদের গরব মোদের আশা</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="event-title">
                            ২৬ শে মার্চ
                            <img src="{{ asset('dist/frontend/img/icon/mb.png') }}" alt="">
                        </div>
                        <div class="event-content pt-4 pl-4 pr-4 pl-md-0 pr-md-0 pt-lg-0">
                            <img src="{{ asset('dist/frontend/img/events/26.jpg') }}" alt="" class="img-fluid">
                            <a href="#">২৬ শে মার্চ মহান স্বাধীনতা দিবস ১৯৭১ সালের এই দিনে বিশ্ব মানচিত্রে আবির্ভাব হয় বাংলাদেশ নামক রাষ্ট্রের ।</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="event-title">
                            ১৬ই ডিসেম্বর
                            <img src="{{ asset('dist/frontend/img/icon/mb.png') }}" alt="">
                        </div>
                        <div class="event-content pt-4 pl-4 pr-4 pl-md-0 pr-md-0 pt-lg-0">
                            <img src="{{ asset('dist/frontend/img/events/16.jpg') }}" alt="" class="img-fluid">
                            <a href="#">আজ ১৬ই ডিসেম্বর, মহান বিজয় দিবস। বাঙালি জাতির জীবনের সবচেয়ে বড় আনন্দ এবং অর্জনের দিনটি আজ।</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination-area">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Common Section-->
@endsection

