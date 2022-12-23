@extends('layouts.app')
@section('title','University Manager')
@section('styles')
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/pages/app-user.css">
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">مشاهده امتحان</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">مشاهده امتحان</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- page users view start -->
        <section class="page-users-view">
            <div class="row">
                <!-- information start -->
                <div class="col-md-4 col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title mb-2">اطلاعات کلی</div>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td class="font-weight-bold">دانشگاه</td>
                                    <td>{{$quiz->university}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">رشته</td>
                                    <td>{{$quiz->major}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">مقطع</td>
                                    <td>{{$quiz->section}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">ترم</td>
                                    <td>{{$quiz->term}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">تاریخ امتحان</td>
                                    <td>{{$quiz->date}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">وضعیت امتحان</td>
                                    <td>{{$quiz->status}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">تعداد دانشجویان</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">تعداد حاضران</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">تعداد غایبان</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">تعداد بدهکاران</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">تعداد تسویه شده ها</td>
                                    <td>89</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- information start -->
                <!-- social links end -->
                <div class="col-md-8 col-12 ">
                    <div class="card">
                        <div class="card-header filter-card">
                            <p class="font-weight-bolder">فیلتر کردن</p>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse {{--{{ request()->except('page') ? 'show' : '' }}--}}">
                            <div class="card-body">
                                <div class="users-list-filter">
                                    <form id="filter-products-form" method="GET"
                                          action="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>شماره دانشجویی</label>
                                                <fieldset class="form-group">
                                                    <input class="form-control datatable-filter" name="title" value="{{ request('title') }}">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-4">
                                                <label>وضعیت حضور</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control datatable-filter" name="stock">
                                                        <option value="all" {{ request('stock') == 'all' ? 'selected' : '' }}>
                                                            همه
                                                        </option>
                                                        <option value="available" {{ request('stock') == 'available' ? 'selected' : '' }}>
                                                            موجود
                                                        </option>
                                                        <option value="unavailable" {{ request('stock') == 'unavailable' ? 'selected' : '' }}>
                                                            ناموجود
                                                        </option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-4">
                                                <label>وضعیت مالی</label>
                                                <fieldset class="form-group">
                                                    <select class="form-control datatable-filter" name="published">
                                                        <option value="all" {{ request('published') == 'all' ? 'selected' : '' }}>
                                                            همه
                                                        </option>
                                                        <option value="yes" {{ request('published') == 'yes' ? 'selected' : '' }}>
                                                            منتشر شده
                                                        </option>
                                                        <option value="no" {{ request('published') == 'no' ? 'selected' : '' }}>
                                                            پیش نویس
                                                        </option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title mb-2">دانشجویان</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">نام دانشجو</th>
                                    <th scope="col">شماره دانشجویی</th>
                                    <th scope="col">وضعیت حضور</th>
                                    <th scope="col">وضعیت مالی</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $universities = \App\Models\University::latest()->paginate(5); @endphp
                                @foreach($universities as $val)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$universities->links('pagination.paginate')}}
                    </div>
                </div>
                <!-- social links end -->
            </div>
        </section>
        <!-- page users view end -->
    </div>
@endsection
@section('scripts')

@endsection
