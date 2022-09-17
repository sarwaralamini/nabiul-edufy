<section class="section-six">
    <div id="sidebar-side-nav" class="sidebar-side-nav">
        <div class="sidebar-side-nav-container">
            <div class="sidebar-side-nav-menu">
                <div class="sidebar-side-nav-header">
                    <span class="sidebar-side-nav-title">
                        <a href="{{ route('homepage') }}"><img src="assets/img/logo.png" alt=""></a>
                    </span>
                    <a href="javascript:void(0)" class="close-sidebar-nav" id="close-sidebar-nav"><i class="fas fa-times"></i></a>
                </div>
                <div class="sidebar-side-nav-content" id="sidebar-side-nav-content">
                    <div class="sidebar-side-nav-items">
                        <div id="sidebar-side-nav-item-navbar" class="sidebar-side-nav-tab-content" style="display:block;">
                            <ul class="navbar-common">
                                <li>
                                    <a href="{{ route('homepage') }}">হোম</a>
                                </li>
                                <li class="sidebar-side-nav-dropdown">
                                    <a href="#">আমাদের কথা</a>
                                    <i class="fas fa-angle-right"></i>
                                    <ul class="sidebar-side-nav-dropdown-content">
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> পরিচিতি</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> লক্ষ্য ও উদ্দেশ্য</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ম্যানেজিং কমিটি</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> প্রতিষ্ঠাতা মণ্ডলী</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> অর্জন সমূহ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-side-nav-dropdown">
                                    <a href="#">একাডেমিক</a>
                                    <i class="fas fa-angle-right"></i>
                                    <ul class="sidebar-side-nav-dropdown-content">
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ক্লাস রুটিন</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> পরীক্ষার রুটিন</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ফলাফল</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> শিক্ষক অনুষদ</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> আইন বিধি ও নিতি মালা</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-side-nav-dropdown">
                                    <a href="#">ভর্তি</a>
                                    <i class="fas fa-angle-right"></i>
                                    <ul class="sidebar-side-nav-dropdown-content">
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ভর্তির তথ্য</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ভর্তির রেজাল্ট</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ভর্তি ফি</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> ভর্তি প্রক্রিয়া</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span>- &nbsp;</span> অনলাইনে টাকা জমা</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="{{ (request()->is('notice')) ? 'active': ''}}" href="{{ route('notice') }}">নোটিশ</a>
                                </li>
                                <li>
                                    <a class="{{ (request()->is('contact')) ? 'active' : ''}}" href="{{ route('contact') }}">যোগাযোগ</a>
                                </li>
                                <li>
                                    <a class="{{ (request()->is('gallery')) ? 'active' : ''}}" href="{{ route('gallery') }}">ইভেন্ট গ্যালারী</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">লগইন</a>
                                </li>
                            </ul>
                            <div class="footer">
                                <div class="row">
                                    <div class="col-12 footer-content">
                                        <span>
                                            <img src="{{ asset('dist/frontend/img/icon/icon-head-set.png') }}" alt="">
                                        </span>
                                        <span>
                                            <p>মোবাইল</p>
                                            <p>০১৭১৪৫-৬৯৫-৮৯</p>
                                        </span>
                                    </div>
                                    <div class="col-12 footer-content">
                                        <span>
                                            <img src="{{ asset('dist/frontend/img/icon/icon-rocket.png') }}" alt="">
                                        </span>
                                        <span>
                                            <p>ইমেইল</p>
                                            <p>contact@buliabazarcollege.edu.bd</p>
                                        </span>
                                    </div>
                                    <div class="col-12 footer-copyright">
                                        <p>
                                            <a href="#">আইন বিধি ও নিতি মালা</a> .
                                            <a href="#">অনলাইনে টাকা জমা</a>
                                        </p>
                                        <p>কপিরাইট &copy; বুলিয়া বাজার কলেজ ২০২০</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-seven">
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center text-md-left">
                    <div class="footer-item">
                        <div class="footer-title">
                            যোগাযোগ
                            <img src="{{ asset('dist/frontend/img/icon/mb-white.png') }}" alt="">
                        </div>

                        <div class="footer-content">
                            <span>
                                বুলিয়া বাজার কলেজ, <br>কাহারল, দিনাজপুর- ৫২২৬<br> ০১৭১৪-৫৬৯৫৮৯<br>
                                <a href="#">contact@buliabazarcollege.edu.bd</a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 text-center text-md-left">
                    <div class="footer-item">
                        <div class="footer-title">
                            গুরুত্বপূর্ণ লিংক
                            <img src="{{ asset('dist/frontend/img/icon/mb-white.png') }}" alt="">
                        </div>

                        <div class="footer-content">
                            <div class="footer-links">
                                <a href="#" class="d-block">ক্লাস রুটিন</a>
                                <a href="#" class="d-block">পরীক্ষার রুটিন</a>
                                <a href="#" class="d-block">ফলাফল</a>
                                <a href="#" class="d-block">নোটিশ</a>
                                <a href="#" class="d-block">আইন বিধি ও নিতি মালা</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 text-center text-md-left">
                    <div class="footer-item">
                        <div class="footer-title">
                            গুরুত্বপূর্ণ লিংক
                            <img src="{{ asset('dist/frontend/img/icon/mb-white.png') }}" alt="">
                        </div>

                        <div class="footer-content">
                            <div class="footer-links">
                                <a href="https://mopme.gov.bd/" class="d-block">শিক্ষা মন্ত্রণালয়</a>
                                <a href="http://www.dshe.gov.bd/" class="d-block">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a>
                                <a href="http://www.nu.ac.bd/" class="d-block">জাতীয় বিশ্ববিদ্যালয়</a>
                                <a href="https://www.youtube.com/watch?v=kb4hs2vRxrI" class="d-block">জাতীয় সংগীত</a>
                                <a href="http://onlinebanglanewspaperlist.com/" class="d-block">সকল পত্রিকা ও টিভি চ্যানেল</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-eight">
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-item copyright-author text-center text-lg-left">
                        <span>কপিরাইট © ২০২০ সর্বস্বত্ব সংরক্ষিত<br> বুলিয়া বাজার কলেজ</span>
                    </div>
                </div>

                <!--<div class="col-lg-6">-->
                <!--    <div class="copyright-item copyright-developer text-center text-lg-right">-->
                <!--        <span class="d-block">কারিগরি সহায়তায়:</span>-->
                <!--        <a href="#">মোঃ সারোয়ার আলম</a>-->
                <!--        <span>ও</span>-->
                <!--        <a href="#">তাজরিন জেরিন</a>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="col-lg-6">
                    <div class="copyright-item copyright-developer text-center text-lg-right">
                        <span class="d-block">কারিগরি সহায়তায়:</span>
                        <a href="#">InSource Software Solution</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
