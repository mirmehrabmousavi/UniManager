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
                    <h2 class="content-header-title float-left mb-0">لیست بستر تماس ها</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">لیست بستر تماس ها</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Striped rows start -->
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">لیست بستر تماس ها</h4>
                        <a href="{{ route('contact-platform.create') }}" class="btn btn-sm btn-primary mb-1 waves-effect waves-light"><i class="fa fa-plus"></i> افزودن</a>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">بستر تماس</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contact_platforms as $val)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$val->name}}</td>
                                        <td>
                                            <a href="{{ route('contact-platform.edit', [$val->id]) }}" class="btn btn-icon btn-warning waves-effect waves-light"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href="{{ route('contact-platform.destroy', [$val->id]) }}" onclick="event.preventDefault();
                                                     document.getElementById('del-{{$val->id}}').submit();" class="btn btn-icon btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></a>
                                            <form id="del-{{$val->id}}" action="{{ route('contact-platform.destroy', [$val->id]) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$contact_platforms->links('pagination.paginate')}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Striped rows end -->
    </div>
@endsection
@section('scripts')

@endsection
