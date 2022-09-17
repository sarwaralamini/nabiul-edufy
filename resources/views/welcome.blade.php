@extends('layouts.frontend')

@section('title', 'Buliabazar College')

@section('content')
<!-- Slider Section-->
<section class="section-two">
    <div class="container">
        <div class="banner">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Place somewhere in the <body> of your page -->
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/1.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s1.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s2.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s3.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s4.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s5.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s6.jpg') }}" />
                            </li>
                            <li>
                                <img src="{{ asset('dist/frontend/img/home-slider/s7.jpg') }}" />
                            </li>
                        </ul>
                    </div>
                    <div class="newsticker mt-3 mt-lg-4 mt-xl-3 clearfix">
                        <div class="newstickercontent">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breaking-news-ticker" id="newsTicker">
                                        <div class="bn-label">জরুরী নোটিশ:</div>
                                        <div class="bn-news">
                                            <ul>

                                                <li><a href="#"><i class="fas fa-stop mr-2"></i>লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a></li>
                                                <li><a href="#"><i class="fas fa-stop mr-2"></i>লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a></li>
                                                <li><a href="#"><i class="fas fa-stop mr-2"></i>লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a></li>
                                                <li><a href="#"><i class="fas fa-stop mr-2"></i>লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a></li>
                                                <li><a href="#"><i class="fas fa-stop mr-2"></i>লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a></li>
                                                <li><a href="#"><i class="fas fa-stop mr-2"></i>লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a></li>

                                            </ul>
                                        </div>
                                        <div class="bn-controls">
                                            <button><span class="bn-arrow bn-prev"></span></button>
                                            <button><span class="bn-action"></span></button>
                                            <button><span class="bn-arrow bn-next"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="area">
                        <h1 class="area-title text-center">অধ্যক্ষের বাণী</h1>

                        <div class="text-center">
                            <img src="{{ asset('dist/frontend/img/teachers/principal.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <a href="#" class="d-block text-center mt-4">অধ্যক্ষ নাজমা শিরিন</a>
                        <p class="card-text mt-3 text-justify">
                            প্রত্যন্ত অঞ্চলে সঠিক দেশ প্রেম, মানবতা ও নৈতিকতা বোধ সম্পন্ন আলোকিত মানুষ গড়াই প্রতিষ্ঠানের মূল লক্ষ্য এবং এরই প্রেক্ষিতে নিরলস অবদান রেখে যাচ্ছে। <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider Section-->

<!-- Notice Section-->
<section class="section-three">
    <div class="container">
        <div class="notice bg-purple">
            <div class="row">
                <div class="col-lg-6">
                    <div class="area text-light pb-0">
                        <h1 class="area-title">আমাদের প্রতিষ্ঠান</h1>

                        <p class="text-white">
                            ১৯৯৮ ইং সালের কতিপয় সচেতন ব্যক্তিত্ব অত্র অঞ্চলের পিছিয়ে পড়া জনগােষ্ঠীর মধ্যে উচ্চ শিক্ষার আলাে ছড়িয়ে দিতে কাহারােলে বুলিয়া বাজার নামক স্থানটিতে একটি কলেজ করার সিদ্ধান্ত গ্রহণ করা হয়। ১ম শিক্ষা বর্ষে ১২৫ জন শিক্ষার্থী নিয়ে অগ্রযাত্রা শুরু হয়।
                            ২০০৫ইং সালে পার্শ্ববর্তী ৫ টি উপজেলার মধ্যে শুধু মাত্র বুলিয়া বাজার কলেজ থেকে জিপিএ- ৫ অর্জন করে সেই সময় এলাকাবাসীর আশ্বস্ত করতে সক্ষম হয় এবং আরও পরে ধারাবহিকভাবে বেশ কিছু শিক্ষার্থী জিপিএ-৫ অর্জন করে সরকারী মেডিকেল
                            কলেজ থেকে এম.বি.বি.এস. ডিগ্রী অর্জন করে দেশের বিভিন্ন প্রতিষ্ঠানে সেবা দিয়ে যাচ্ছে। উল্লেখ্য অনেক শিক্ষার্থী ঢাকা বিশ্ববিদ্যালয়, রাজশাহী বিশ্ববিদ্যালয়, জগত্নাথ বিশ্ববিদ্যালয়, জাহাঙ্গীর নগর বিশ্ববিদ্যালয়, কুমিল্লা বিশ্ববিদ্যালয়,
                            চট্টগ্রাম বিশ্ববিদ্যালয়, গােপাল গঞ্জ বিজ্ঞান প্রযুক্তি বিশ্ববিদ্যালয়, রােকেয়া বিশ্ববিদ্যালয়, হাজী মােহাম্মদ দানেশ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে ভর্তি পরীক্ষায় প্রথম দিকে মেধাক্রম অর্জন করে। কেউ কেউ লেখাপড়া শেষ
                            করে ভালাে ভালাে চাকুরি করছে এবং শুরু থেকে আজ <a href="#" class="text-green" data-toggle="modal" data-target="#aboutModal">...বিস্তারিত</a>
                        </p>

                        <!-- Modal -->
                        <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="aboutModalLabel">আমাদের প্রতিষ্ঠান</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="area">
                                            <p>
                                                ১৯৯৮ ইং সালের কতিপয় সচেতন ব্যক্তিত্ব অত্র অঞ্চলের পিছিয়ে পড়া জনগােষ্ঠীর মধ্যে উচ্চ শিক্ষার আলাে ছড়িয়ে দিতে কাহারােলে বুলিয়া বাজার নামক স্থানটিতে একটি কলেজ করার সিদ্ধান্ত গ্রহণ করা হয়। ১ম শিক্ষা বর্ষে ১২৫ জন শিক্ষার্থী নিয়ে অগ্রযাত্রা শুরু হয়।
                                                ২০০৫ইং সালে পার্শ্ববর্তী ৫ টি উপজেলার মধ্যে শুধু মাত্র বুলিয়া বাজার কলেজ থেকে জিপিএ- ৫ অর্জন করে সেই সময় এলাকাবাসীর আশ্বস্ত করতে সক্ষম হয় এবং আরও পরে ধারাবহিকভাবে বেশ কিছু শিক্ষার্থী জিপিএ-৫ অর্জন
                                                করে সরকারী মেডিকেল কলেজ থেকে এম.বি.বি.এস. ডিগ্রী অর্জন করে দেশের বিভিন্ন প্রতিষ্ঠানে সেবা দিয়ে যাচ্ছে। উল্লেখ্য অনেক শিক্ষার্থী ঢাকা বিশ্ববিদ্যালয়, রাজশাহী বিশ্ববিদ্যালয়, জগত্নাথ বিশ্ববিদ্যালয়, জাহাঙ্গীর
                                                নগর বিশ্ববিদ্যালয়, কুমিল্লা বিশ্ববিদ্যালয়, চট্টগ্রাম বিশ্ববিদ্যালয়, গােপাল গঞ্জ বিজ্ঞান প্রযুক্তি বিশ্ববিদ্যালয়, রােকেয়া বিশ্ববিদ্যালয়, হাজী মােহাম্মদ দানেশ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে
                                                ভর্তি পরীক্ষায় প্রথম দিকে মেধাক্রম অর্জন করে। কেউ কেউ লেখাপড়া শেষ করে ভালাে ভালাে চাকুরি করছে এবং শুরু থেকে আজ অবধি থানা পর্যায়ে জাতীয় পরীক্ষায় সম্মানজনক অবস্থান ধরে রাখতে সক্ষম হয়েছে। স্থানীয়
                                                সংসদ সদস্য, বাের্ড চেয়ারম্যান সহ দিনাজপুর জেলার গুণী-মানী ব্যক্তিদের কাছে যথেষ্ঠ সমাদৃত এই প্রতিষ্ঠানটি। বি.এম শাখা সহ রােভার জাতীয় কার্যক্রম চালু থাকায় এলাকাবাসীর মধ্যে প্রানের সঞ্চার হয়েছে। আগামী
                                                দিন গুলােতে এভাবেই সকলের আন্তরিক সহযােগীতা কামনা করে- পথ চলতে চাই।
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="area text-light pb-0">
                        <div class="area-title notice-title">
                            <span>
                                <a href="#">নোটিশ বোর্ড</a>
                            </span>
                        </div>

                        <div class="notice-area">
                            <table class="table">
                                <tbody>
                                    <tr class="text-white">
                                        <td>০২ অক্টোবর ২০২০</td>
                                        <td>
                                            <a href="#" class="text-white">
                                                লরেম ইপসাম কেবল মুদ্রণ...
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="text-white">
                                        <td>০২ অক্টোবর ২০২০</td>
                                        <td>
                                            <a href="#" class="text-white">
                                                লরেম ইপসাম কেবল মুদ্রণ...
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="text-white">
                                        <td>০২ অক্টোবর ২০২০</td>
                                        <td>
                                            <a href="#" class="text-white">
                                                লরেম ইপসাম কেবল মুদ্রণ...
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="text-white">
                                        <td>০২ অক্টোবর ২০২০</td>
                                        <td>
                                            <a href="#" class="text-white">
                                                লরেম ইপসাম কেবল মুদ্রণ...
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="text-white">
                                        <td>০২ অক্টোবর ২০২০</td>
                                        <td>
                                            <a href="#" class="text-white">
                                                লরেম ইপসাম কেবল মুদ্রণ...
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="text-white">
                                        <td>০২ অক্টোবর ২০২০</td>
                                        <td>
                                            <a href="#" class="text-white">
                                                লরেম ইপসাম কেবল মুদ্রণ...
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notice Section-->

<!--Link Section-->
<section class="section-four">
    <div class="container">
        <div class="box-section">
            <div class="row">
                <div class="col-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="box-item">
                        <a href="#">
                            <i class="fas fa-link"></i> ক্লাস রুটিন
                        </a>
                    </div>
                </div>

                <div class="col-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="box-item">
                        <a href="#">
                            <i class="fas fa-link"></i> পরীক্ষার রুটিন
                        </a>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="box-item">
                        <a href="#">
                            <i class="fas fa-link"></i> ফলাফল
                        </a>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="box-item">
                        <a href="#">
                            <i class="fas fa-link"></i> ভর্তির রেজাল্ট
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Link Section-->

<!-- Event Section-->
<section class="section-five">
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
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="button-large text-center">
                        <a href="#">সকল ইভেন্ট</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Section-->
@endsection
