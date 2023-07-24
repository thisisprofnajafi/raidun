@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')
@section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" />

@endsection

@section('page-style')

    <style>
        .modal{
            z-index: 1099 !important;
        }
    </style>

@endsection


@section('vendor-script')
    <script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>

@endsection

@section('page-script')
    <script src="{{asset('assets/js/forms-tagify.js')}}"></script>
    <script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
    <script src="{{asset('assets/js/forms-pickers.js')}}"></script>


@endsection

@section('content')
    <h4>Dashboard</h4>
    <div class="row">
        <div class="col-md-6">
            <h5>Categories</h5>
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('create category')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="cat_title" id="cat_title" placeholder="Category Title"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="cat_title_ar" id="cat_title_ar"
                                           placeholder="Category Title Arabic"/>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header">All Categories</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Arabic Title</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->title_ar}}</td>
                            <td class="d-flex">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCat{{$category->id}}"><i class="ti ti-pencil me-1"></i></a>
                                <a href="{{route('delete category',['id'=>$category->id])}}"><i class="ti ti-trash me-1"></i></a>
                            </td>
                        </tr>

                            @include('_partials.editCategory')
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <h5>Works</h5>
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('create work')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title_ar">Title Arabic</label>
                                    <input type="text" class="form-control" name="title_ar" id="title_ar"
                                           placeholder="Title Arabic"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title_ar">Category</label>
                                    <select class="form-select" id="exampleFormControlSelect1" name="category" aria-label="Select A category">
                                        <option selected>Open this select menu</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="TagifyBasic" class="form-label">SEO Keywords</label>
                                <input id="TagifyBasic" class="form-control" name="seoKey" value="" />
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="ser_desc">Seo Description</label>
                                <input type="text" class="form-control" name="seo_desc" id="seo_desc"
                                       placeholder="Seo Description"/>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="TagifyBasic1" class="form-label">Type</label>
                                <input id="TagifyBasic1" class="form-control" name="type" value="" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="TagifyBasic2" class="form-label">Technology</label>
                                <input id="TagifyBasic2" class="form-control" name="tech" value="" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="flatpickr-date" class="form-label">Date Picker</label>
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" name="date" />
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="url">Url</label>
                                    <input type="text" class="form-control" name="url" id="url"
                                           placeholder="Link"/>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="thumb">Thumbnail</label>
                                <input type="file" class="form-control" name="thumb" id="thumb"
                                       placeholder=""/>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Content</label>
                                    <textarea id="basic-default-message" name="content" class="form-control" placeholder="Type something"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Content Arabic</label>
                                    <textarea id="basic-default-message" name="content_ar" class="form-control" placeholder="Type something"></textarea>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12">

            <div class="card">
                <h5 class="card-header"All Works</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumb</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Arabic Title</th>
                            <th>Seo Key</th>
                            <th>Seo Desc</th>
                            <th>Type</th>
                            <th>Tech</th>
                            <th>Date</th>
                            <th>Url</th>
                            <th>Content</th>
                            <th>Content Ar</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($works as $work)
                            <tr>
                                <td>{{$work->id}}</td>
                                <td class="avatar avatar-xl"><img src="{{asset($work->thumb_path)}}" alt="Avatar" class="rounded"></td>
                                <td>{{$work->category->title}}</td>
                                <td>{{$work->title}}</td>
                                <td>{{$work->title_ar}}</td>
                                <td>{{$work->seo_keyword}}</td>
                                <td>{{$work->seo_description}}</td>
                                <td>{{$work->type}}</td>
                                <td>{{$work->tech}}</td>
                                <td>{{$work->date}}</td>
                                <td>{{$work->url}}</td>
                                <td>{{mb_strimwidth($work->content, 0, 20, "...")}}</td>
                                <td>{{mb_strimwidth($work->content_ar, 0, 20, "...")}}</td>
                                <td class="d-flex">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editWork{{$work->id}}"><i class="ti ti-pencil me-1"></i></a>
                                    <a href="{{route('delete work',['id'=>$work->id])}}"><i class="ti ti-trash me-1"></i></a>
                                </td>
                            </tr>
                            @include('_partials.editWork')
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
