<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.dashboard')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Uni Manager</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{route('admin.dashboard')}}"><i class="feather icon-home"></i>
                    <span class="menu-title">داشبورد</span>
                    {{--<span class="badge badge badge-warning badge-pill float-right mr-2">2</span>--}}
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">صفحه اصلی</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{ route('admin.university.index') }}">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت دانشگاه</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('admin.university.index') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست دانشگاه ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.university.create') }}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن دانشگاه</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت دانشجویان</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست دانشجویان</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">پروفایل دانشجو</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت مقاطع</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست مقاطع</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن مقطع</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت رشته ها</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست رشته ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت بازاریاب ها</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست بازاریاب ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن بازاریاب</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن زیرمجموعه</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست زیرمجموعه ها</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت امتحانات</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست امتحانات</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن امتحان</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">نتایج امتحان</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">مشاهده امتحان</span>
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
                <a href="#">
                    <i class="feather icon-menu"></i>
                    <span class="menu-title">مدیریت ترم ها</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">لیست ترم ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item">افزودن ترم</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
