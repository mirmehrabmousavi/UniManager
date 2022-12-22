@extends('layouts.app')
@section('title','University Manager')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css-rtl/core/colors/palette-gradient.css') }}">
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">لیست بازاریابان</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">لیست بازاریابان</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Striped rows start -->
        <div class="row" id="table-striped">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">فیلتر</h4>
                    </div>
                    <div class="card-body">
                        <div class="multi-range-price">
                            <div class="multi-range-title pb-75">
                                <h6 class="filter-title mb-0">Multi Range</h6>
                            </div>
                            <ul class="list-unstyled price-range" id="price-range">
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="price-range" checked value="false">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">All</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="price-range" checked value="false">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Some</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- /Price Filter -->
                        <hr>
                        <!-- Brands -->
                        <div class="brands">
                            <div class="brand-title mt-1 pb-1">
                                <h6 class="filter-title mb-0">Brands</h6>
                            </div>
                            <div class="brand-list" id="brands">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" value="false">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Insignia™</span>
                                        </span>
                                        <span>746</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" value="false">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">
                                                Samsung
                                            </span>
                                        </span>
                                        <span>633</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Brand -->
                        <hr>
                        <!-- Clear Filters Starts -->
                        <div id="clear-filters">
                            <button class="btn btn-block btn-primary">حذف تمامی فیلتر ها</button>
                        </div>
                        <!-- Clear Filters Ends -->

                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">لیست بازاریابان</h4>
                        <a href="{{ route('marketer.create') }}" class="btn btn-sm btn-primary mb-1 waves-effect waves-light"><i class="fa fa-plus"></i> افزودن</a>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">نام بازاریاب</th>
                                    <th scope="col">شماره دانشجویی</th>
                                    <th scope="col">تعداد زیرمجموعه</th>
                                    <th scope="col">وضعیت پرداختی</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($marketers as $val)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$val->name}}</td>
                                        <td>-</td>
                                        @php $subclass = \App\Models\MarketerSubclass::where('marketer',$val->name)->get(); @endphp
                                        <td><span class="badge badge-pill badge-success">{{ count($subclass) }}</span></td>
                                        <td>-</td>
                                        <td>
                                            <a href="{{ route('marketer.edit', [$val->id]) }}" class="btn btn-icon btn-warning waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="{{ route('marketer.destroy', [$val->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del-{{$val->id}}').submit();" class="btn btn-icon btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></a>
                                            <form id="del-{{$val->id}}" action="{{ route('marketer.destroy', [$val->id]) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$marketers->links('pagination.paginate')}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Striped rows end -->
    </div>
@endsection
@section('scripts')

@endsection
