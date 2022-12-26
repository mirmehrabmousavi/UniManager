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
                    <h2 class="content-header-title float-left mb-0">مشاهده {{$university->name}}</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">مشاهده {{$university->name}}</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">مشاهده {{$university->name}}</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="profile-header mb-2">
                                        <div class="relative">
                                            <div class="cover-container">
                                                <img class="img-fluid bg-cover rounded-0 w-100 height-400" src="{{(empty($university->image)) ? '/app-assets/images/no-image.png' : $university->image}}" alt="{{$university->name}}">
                                            </div>
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="font-weight-bold text-center">اسم دانشگاه</th>
                                                        <th class="font-weight-bold text-center">آدرس دانشگاه</th>
                                                        <th class="font-weight-bold text-center">تعداد دانشجو</th>
                                                        <th class="font-weight-bold text-center">تعداد رشته ها</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">{{$university->name}}</td>
                                                        <td class="text-center">{{$university->address}}</td>
                                                        <td class="text-center">{{count($collegians)}}</td>
                                                        <td class="text-center">{{count($majors)}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title mb-2">بدهی ها</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="font-weight-bold">تعداد بدهکار های کلی</th>
                                    <th class="font-weight-bold">تعداد بدکار های شهریه</th>
                                    <th class="font-weight-bold">تعداد بدهکار های پشتیبانی</th>
                                    <th class="font-weight-bold">میزان پرداختی های این ماه</th>
                                    <th class="font-weight-bold">میزان بدهی کلی</th>
                                    <th class="font-weight-bold">میزان بدهی شهریه</th>
                                    <th class="font-weight-bold">میزان بدهی پشتیبانی</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                    <td><div class="badge badge-pill badge-danger">12</div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title mb-2">لیست ها</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn bg-gradient-success mr-1 mb-1 waves-effect waves-light">لیست دانشجویان</a>
                                    <a href="#" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">لیست دانشجویان بدهکار</a>
                                    <a href="#" class="btn bg-gradient-info mr-1 mb-1 waves-effect waves-light">لیست دانشجویان کارنامه دار</a>
                                    <a href="#" class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light">لیست دانشجویان کارنامه ندار</a>
                                    <a href="#" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">لیست بدهکاران پشتیبانی</a>
                                    <a href="#" class="btn bg-gradient-danger mr-1 mb-1 waves-effect waves-light">لیست بدهکاران شهریه</a>
                                    <a href="#" class="btn bg-gradient-warning mr-1 mb-1 waves-effect waves-light">لیست رشته ها</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page users view end -->
    </div>
@endsection
@section('scripts')

@endsection
