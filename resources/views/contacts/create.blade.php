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
                    <h2 class="content-header-title float-left mb-0">افزودن تماس</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">افزودن تماس</li>
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
                            <h4 class="card-title">افزودن تماس</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('contact.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-platform">تاریخ تماس</label>
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
                                                    <label for="contact-platform">بستر تماس</label>
                                                    <select class="form-control @error('contact_platform') is-invalid @enderror"
                                                            name="contact_platform" required>
                                                        @php $contact_platform = \App\Models\ContactPlatform::all(); @endphp
                                                        @if($contact_platform)
                                                            <option value="null">بدون بستر</option>
                                                            @foreach($contact_platform as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون بستر</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('contact_platform')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-reason">دلیل تماس</label>
                                                    <select class="form-control @error('contact_reason') is-invalid @enderror"
                                                            name="contact_reason" required>
                                                        @php $contact_reason = \App\Models\ContactReason::all(); @endphp
                                                        @if($contact_reason)
                                                            <option value="null">بدون دلیل</option>
                                                            @foreach($contact_reason as $item)
                                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="null">بدون دلیل</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                @error('contact_reason')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-description">توضیحات تماس</label>
                                                    <textarea class="form-control @error('contact_description') is-invalid @enderror"
                                                            name="contact_description" required></textarea>
                                                </div>
                                                @error('contact_description')
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
