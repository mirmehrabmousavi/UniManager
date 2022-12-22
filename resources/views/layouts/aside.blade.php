<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('dashboard')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Uni Manager</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Route::is('dashboard') ? 'active' : '' }} nav-item">
                <a href="{{route('dashboard')}}"><i class="feather icon-home"></i>
                    <span class="menu-title">داشبورد</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{ route('university.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت دانشگاه</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('university.index') ? 'active' : '' }}">
                        <a href="{{ route('university.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست دانشگاه ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('university.create') ? 'active' : '' }}">
                        <a href="{{ route('university.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن دانشگاه</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('collegian.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت دانشجویان</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('collegian.index') ? 'active' : '' }}">
                        <a href="{{ route('collegian.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست دانشجویان</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('collegian.create') ? 'active' : '' }}">
                        <a href="{{ route('collegian.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن دانشجو</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">گزارشات مالی</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">وضعیت مالی دانشجویان</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">وضعیت مالی دانشگاه ها</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">گزارش گیری</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">گزارش از دانشجویان</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">گزارش از دانشگاه ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">گزارش فعالیت مدیران</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">گزارش پرداختی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">گزارش تماس ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">گزارش بازاریابی</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت کاربران مدیر</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست کاربران</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن کاربر</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('section.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت مقاطع</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('section.index') ? 'active' : '' }}">
                        <a href="{{ route('section.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست مقاطع</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('section.create') ? 'active' : '' }}">
                        <a href="{{ route('section.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن مقطع</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('major.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت رشته ها</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('major.index') ? 'active' : '' }}">
                        <a href="{{ route('major.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست رشته ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('major.create') ? 'active' : '' }}">
                        <a href="{{ route('major.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن رشته</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت خدمات پشتیبانی</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">test</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">test</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('marketer.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت بازاریاب ها</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('marketer.index') ? 'active' : '' }}">
                        <a href="{{ route('marketer.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست بازاریاب ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('marketer.create') ? 'active' : '' }}">
                        <a href="{{ route('marketer.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن بازاریاب</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('subclass.index') ? 'active' : '' }}">
                        <a href="{{ route('subclass.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست زیرمجموعه ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('subclass.create') ? 'active' : '' }}">
                        <a href="{{ route('subclass.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن زیرمجموعه</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('quiz.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت امتحانات</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('quiz.index') ? 'active' : '' }}">
                        <a href="{{ route('quiz.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست امتحانات</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('quiz.create') ? 'active' : '' }}">
                        <a href="{{ route('quiz.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن امتحان</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت پرداختی ها</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست دسته بندی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن دسته بندی</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست پرداختی ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن پرداختی</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('term.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت ترم ها</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('term.index') ? 'active' : '' }}">
                        <a href="{{ route('term.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست ترم ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('term.create') ? 'active' : '' }}">
                        <a href="{{ route('term.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن ترم</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('contact.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت تماس ها</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('contact.index') ? 'active' : '' }}">
                        <a href="{{ route('contact.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست تماس ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('contact.create') ? 'active' : '' }}">
                        <a href="{{ route('contact.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن تماس</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('contact-platform.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت بستر تماس ها</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('contact-platform.index') ? 'active' : '' }}">
                        <a href="{{ route('contact-platform.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست بستر تماس ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('contact-platform.create') ? 'active' : '' }}">
                        <a href="{{ route('contact-platform.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن بستر تماس</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('contact-reason.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت دلایل تماس ها</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Route::is('contact-reason.index') ? 'active' : '' }}">
                        <a href="{{ route('contact-reason.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست دلایل تماس ها</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('contact-reason.create') ? 'active' : '' }}">
                        <a href="{{ route('contact-reason.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن دلیل تماس</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
