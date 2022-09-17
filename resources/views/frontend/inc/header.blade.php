<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="topbar">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="topbar-date">
                            <p class="text-center text-lg-left" href="#">
                                শুক্রবার, ০২ অক্টোবর ২০২০, ১৬ আশ্বিন ১৪২৭
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="topbar-info">
                            <p class="text-center text-lg-right" href="#">
                                ই আই আই এন:
                                <b>১২০৬০৩</b> | মোবাইল:
                                <b><a href="tel:+8801714569569">০১৭১৪৫-৬৯৫-৮৯</a></b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="menu">
                <div class="row">
                    <div class="col-3">
                        <a href="{{ route('homepage') }}">
                            <div class="logo">
                                <img src="{{ asset('dist/frontend/img/logo.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-9">
                        <div class="navigation d-none d-lg-block">
                            <ul class="navbar-common">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        আমাদের কথা
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <span>-</span> পরিচিতি
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> লক্ষ্য ও উদ্দেশ্য
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> ম্যানেজিং কমিটি
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> প্রতিষ্ঠাতা মণ্ডলী
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> অর্জন সমূহ
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        একাডেমিক
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <span>-</span> ক্লাস রুটিন
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> পরীক্ষার রুটিন
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> ফলাফল
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> শিক্ষক অনুষদ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> আইন বিধি ও নিতি মালা
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        ভর্তি
                                        <i class="fas fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <span>-</span> ভর্তির তথ্য
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> ভর্তির রেজাল্ট
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> ভর্তি ফি
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> ভর্তি প্রক্রিয়া
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>-</span> অনলাইনে টাকা জমা
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="{{ (request()->is('notice')) ? 'active': ''}}" href="{{ route('notice') }}">নোটিশ</a>
                                </li>
                                <li>
                                    <a class="{{ (request()->is('contact')) ? 'active': ''}}" href="{{ route('contact') }}">যোগাযোগ</a>
                                </li>
                                <li>
                                    <a class="{{ (request()->is('gallery')) ? 'active': ''}}" href="{{ route('gallery') }}">ইভেন্ট গ্যালারী</a>
                                </li>
                                @guest
                                    <li class="login-menu">
                                        <a href="{{ route('login') }}">লগইন</a>
                                    </li>
                                @else
                                @endif
                            </ul>
                        </div>
                        <div class="sidebar-toggle d-lg-none">
                            <span style="cursor:pointer" class="open-sidebar-nav">
                                <i class="fa fa-bars"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
