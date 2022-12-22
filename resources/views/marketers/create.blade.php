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
                    <h2 class="content-header-title float-left mb-0">افزودن بازاریاب</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">افزودن بازاریاب</li>
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
                            <h4 class="card-title">افزودن بازاریاب</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('marketer.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">نام بازاریاب</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('name') is-invalid @enderror"
                                                           name="name" required>
                                                </div>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="marketer-name">نوع بازاریاب</label>
                                                <ul class="list-unstyled mb-2">
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="type" checked value="collegian">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">دانشجو</span>
                                                            </div>
                                                        </fieldset>
                                                    </li>
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="type" value="marketer">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">بازاریاب</span>
                                                            </div>
                                                        </fieldset>
                                                    </li>
                                                </ul>
                                                @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">شماره تماس</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('number') is-invalid @enderror"
                                                           name="number" required>
                                                </div>
                                                @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">آدرس</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('address') is-invalid @enderror"
                                                           name="address" required>
                                                </div>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">کد ملی</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('melli_code') is-invalid @enderror"
                                                           name="melli_code" required>
                                                </div>
                                                @error('melli_code')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">تلفن ثابت</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('static_number') is-invalid @enderror"
                                                           name="static_number" required>
                                                </div>
                                                @error('static_number')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="marketer-name">تلفن آشنا</label>
                                                    <input type="text" id="marketer-name" class="form-control @error('known_number') is-invalid @enderror"
                                                           name="known_number" required>
                                                </div>
                                                @error('known_number')
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
