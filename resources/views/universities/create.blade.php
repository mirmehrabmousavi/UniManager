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
                    <h2 class="content-header-title float-left mb-0">افزودن دانشگاه</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">افزودن دانشگاه</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- account setting page start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('university.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">نام دانشگاه</label>
                                                <input type="text" name="name" class="form-control"
                                                       id="account-username" placeholder="نام دانشگاه" required>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-name">تصویر دانشگاه</label>
                                                <input type="text" name="image" class="form-control" id="account-name"
                                                       placeholder="تصویر دانشگاه">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-e-mail">آدرس دانشگاه</label>
                                                <textarea name="address" class="form-control"
                                                       id="account-e-mail" placeholder="آدرس دانشگاه" required></textarea>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="majors">رشته ها</label>
                                                <select id="majors"
                                                        class="form-control @error('majors') is-invalid @enderror"
                                                        name="majors[]" multiple required>
                                                    @if($majors)
                                                        <option value="null">بدون رشته</option>
                                                        @foreach($majors as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="null">بدون رشته</option>
                                                    @endif
                                                </select>
                                                @error('majors')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="sections">مقاطع تحت پشتیبانی</label>
                                                <select id="sections"
                                                        class="form-control @error('sections') is-invalid @enderror"
                                                        name="sections[]" multiple required>
                                                    @if($sections)
                                                        <option value="null">بدون مقطع</option>
                                                        @foreach($sections as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    @else
                                                        <option value="null">بدون مقطع</option>
                                                    @endif
                                                </select>
                                                @error('sections')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">ذخیره</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
