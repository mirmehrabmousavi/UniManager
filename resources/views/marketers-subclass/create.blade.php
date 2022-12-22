@extends('layouts.app')
@section('title','University Manager')
@section('styles')
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css-rtl/plugins/forms/validation/form-validation.css">
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">افزودن زیرمجموعه</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">افزودن زیرمجموعه</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">افزودن زیرمجموعه</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('subclass.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">بازاریاب</label>
                                                    <select id="marketer-name" class="form-control @error('marketer') is-invalid @enderror"
                                                            name="marketer" required>
                                                        @php $marketer = \App\Models\Marketer::all(); @endphp
                                                        @if($marketer)
                                                            <option value="null">بدون بازاریاب</option>
                                                            @foreach($marketer as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون بازاریاب</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('marketer')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">شماره دانشجویی زیر مجموعه</label>
                                                    <input type="number" id="marketer-name" class="form-control @error('idd_subclass') is-invalid @enderror"
                                                           name="idd_subclass" required>
                                                </div>
                                                @error('idd_subclass')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">نام و نام خانوادگی زیرمجموعه</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('full_name_subclass') is-invalid @enderror"
                                                           name="full_name_subclass" required>
                                                </div>
                                                @error('full_name_subclass')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">تاریخ</label>
                                                    <input type="date" id="marketer-name" class="form-control @error('date') is-invalid @enderror"
                                                           name="date" required>
                                                </div>
                                                @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="marketer-name">وضعیت پرداختی</label>
                                                <ul class="list-unstyled mb-2">
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="paid" checked value="paid">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">تسویه شده</span>
                                                            </div>
                                                        </fieldset>
                                                    </li>
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="paid" value="unpaid">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">بدهکار</span>
                                                            </div>
                                                        </fieldset>
                                                    </li>
                                                </ul>
                                                @error('paid')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success mr-1 mb-1">ذخیره</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Vertical form layout section end -->
    </div>
@endsection
@section('scripts')

@endsection
