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
                    <h2 class="content-header-title float-left mb-0">افزودن امتحان</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">افزودن امتحان</li>
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
                            <h4 class="card-title">افزودن امتحان</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('quiz.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-platform">دانشگاه</label>
                                                    <select class="form-control @error('university') is-invalid @enderror"
                                                            name="university" required>
                                                        @php $university = \App\Models\University::all(); @endphp
                                                        @if($university)
                                                            <option value="null">بدون دانشگاه</option>
                                                            @foreach($university as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون دانشگاه</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('university')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-reason">رشته</label>
                                                    <select class="form-control @error('major') is-invalid @enderror"
                                                            name="major" required>
                                                        @php $major = \App\Models\Major::all(); @endphp
                                                        @if($major)
                                                            <option value="null">بدون رشته</option>
                                                            @foreach($major as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون رشته</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('major')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-reason">مقطع</label>
                                                    <select class="form-control @error('section') is-invalid @enderror"
                                                            name="section" required>
                                                        @php $section = \App\Models\Section::all(); @endphp
                                                        @if($section)
                                                            <option value="null">بدون مقطع</option>
                                                            @foreach($section as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون مقطع</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('section')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-reason">ترم</label>
                                                    <select class="form-control @error('term') is-invalid @enderror"
                                                            name="term" required>
                                                        @php $term = \App\Models\Term::all(); @endphp
                                                        @if($term)
                                                            <option value="null">بدون ترم</option>
                                                            @foreach($term as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون ترم</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('term')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-platform">تاریخ امتحان</label>
                                                    <input type="date" id="contact-platform" class="form-control @error('date') is-invalid @enderror"
                                                           name="date" required>
                                                </div>
                                                @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-platform">دانشجویان</label>
                                                    <input type="text" id="contact-platform" class="form-control @error('collegians') is-invalid @enderror"
                                                           name="collegians" required>
                                                </div>
                                                @error('collegians')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="marketer-name">وضعیت امتحان</label>
                                                <ul class="list-unstyled mb-2">
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="status" checked value="برگزار شده">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">برگزار شده</span>
                                                            </div>
                                                        </fieldset>
                                                    </li>
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="status" value="در انتظار برگزاری">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">در انتظار برگزاری</span>
                                                            </div>
                                                        </fieldset>
                                                    </li>
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input type="radio" name="status" value="لغو شده">
                                                                <span class="vs-radio vs-radio-lg">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <span class="">لغو شده</span>
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
