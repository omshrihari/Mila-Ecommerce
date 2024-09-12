@extends('admin.layouts.base')

@push('head')
    <link href="{{ asset('admin/assets/libs/dropzone/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div
                            class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Create {{ $page_title }}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST"
                    action="{{ route('admin.subcategory.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{ $page_title }}</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Category</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Subcategory</label>
                                        <input type="text" class="form-control" name="title"
                                            id="manufacturer-name-input" placeholder="Enter Subcategory Name">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info"
                                                role="tab">
                                                General Info
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata" role="tab">
                                                Meta Data
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end card header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Sort
                                                            Number</label>
                                                        <input type="number" class="form-control" name="sort"
                                                            id="manufacturer-name-input" placeholder="Enter Sorting number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-brand-input">Status</label>
                                                        <select name="status" class="form-control">
                                                            <option value="1">Activate</option>
                                                            <option value="0">Deactivate</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->

                                        <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="meta-title-input">Meta title</label>
                                                        <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title" id="meta-title-input">
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="meta-keywords-input">Meta Keywords</label>
                                                        <input type="text" name="meta_key" class="form-control" placeholder="Enter meta keywords" id="meta-keywords-input">
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->

                                            <div>
                                                <label class="form-label" for="meta-description-input">Meta Description</label>
                                                <textarea class="form-control" name="meta_des" id="meta-description-input" placeholder="Enter meta description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                            <div class="text-start mb-3">
                                <button type="submit" class="btn btn-success w-sm">Submit</button>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </form>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@push('foot')
    <!-- ckeditor -->
    <script src="{{ asset('admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- dropzone js -->
    <script src="{{ asset('admin/assets/libs/dropzone/dropzone-min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/ecommerce-product-create.init.js') }}"></script>
@endpush
