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
                    <h2 class="content-header-title float-left mb-0">ویرایش دانشگاه</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">ویرایش دانشگاه</li>
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
                            <form action="{{ route('university.update', [$university->id]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">نام دانشگاه</label>
                                                <input type="text" name="name" class="form-control"
                                                       id="account-username" value="{{$university->name}}" placeholder="نام دانشگاه" required>
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
                                                       value="{{$university->image}}" placeholder="تصویر دانشگاه" required>
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
                                                          id="account-e-mail" placeholder="آدرس دانشگاه" required>{{$university->address}}</textarea>
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
                                                <select class="form-control @error('majors') is-invalid @enderror"
                                                        name="majors" required>
                                                    @php $major = \App\Models\Major::all(); @endphp
                                                    @if($major)
                                                        @if($university->majors == 'null')
                                                            <option value="null">بدون رشته</option>
                                                        @endif
                                                        @foreach($major as $item)
                                                            <option value="{{$item->name}}" @if($item->name == $university->majors) selected @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    @else
                                                        @if($university->majors == 'null')
                                                            <option value="null">بدون رشته</option>
                                                        @endif
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
                                                <label for="sections">مقاطع</label>
                                                <select class="form-control @error('sections') is-invalid @enderror"
                                                        name="sections" required>
                                                    @php $section = \App\Models\Section::all(); @endphp
                                                    @if($section)
                                                        @if($university->sections == 'null')
                                                            <option value="null">بدون مقطع</option>
                                                        @endif
                                                        @foreach($section as $item)
                                                            <option value="{{$item->name}}" @if($item->name == $university->sections) selected @endif>{{$item->name}}</option>
                                                        @endforeach
                                                    @else
                                                        @if($university->sections == 'null')
                                                            <option value="null">بدون مقطع</option>
                                                        @endif
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
