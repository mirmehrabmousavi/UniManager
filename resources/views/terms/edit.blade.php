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
                    <h2 class="content-header-title float-left mb-0">ویرایش ترم</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">ویرایش ترم</li>
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
                            <h4 class="card-title">ویرایش ترم</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('term.update', [$term->id]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="term-name">نام ترم</label>
                                                    <input type="text" id="term-name" class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{$term->name}}" autofocus required>
                                                </div>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="term-name">رشته</label>
                                                    <select class="form-control @error('contact_platform') is-invalid @enderror"
                                                            name="contact_platform" required>
                                                        @php $majors = \App\Models\Major::all(); @endphp
                                                        @if($majors)
                                                            @if($term->major_id == 'null')
                                                                <option value="null">بدون رشته</option>
                                                            @endif
                                                            @foreach($majors as $item)
                                                                <option value="{{$item->name}}" @if($item->name == $term->major_id) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            @if($term->major_id == 'null')
                                                                <option value="null">بدون رشته</option>
                                                            @endif
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('major_id')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="term-name">مقطع</label>
                                                    <select class="form-control @error('contact_platform') is-invalid @enderror"
                                                            name="contact_platform" required>
                                                        @php $sections = \App\Models\Section::all(); @endphp
                                                        @if($sections)
                                                            @if($term->section_id == 'null')
                                                                <option value="null">بدون مقطع</option>
                                                            @endif
                                                            @foreach($sections as $item)
                                                                <option value="{{$item->name}}" @if($item->name == $term->section_id) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            @if($term->section_id == 'null')
                                                                <option value="null">بدون مقطع</option>
                                                            @endif
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('section_id')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="term-name">شهریه پشتیبانی</label>
                                                    <input type="text" id="term-name" class="form-control @error('supported_fee') is-invalid @enderror"
                                                           name="supported_fee" value="{{$term->supported_fee}}" required>
                                                </div>
                                                @error('supported_fee')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="term-name">شهریه دانشگاه</label>
                                                    <input type="text" id="term-name" class="form-control @error('university_fee') is-invalid @enderror"
                                                           name="university_fee" value="{{$term->university_fee}}" required>
                                                </div>
                                                @error('university_fee')
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
