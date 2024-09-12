@extends('admin.layouts.base')

@push('head')
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                            <h4 class="mb-sm-0">Edit {{ $page_title }}</h4>
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
                    action="{{ route('admin.page.update', $page->id) }}" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{ $page_title }}</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Page Title</label>
                                        <input type="text" class="form-control" name="title"
                                            id="manufacturer-name-input" placeholder="Enter Category Name" value="{{ $page->title }}">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Page Description</label>
                                        <textarea id="description" class="form-control" name="description">{{ $page->description }}</textarea>
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
                                                Meta Details
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
                                                        <label class="form-label" for="manufacturer-name-input">Meta Title</label>
                                                        <input type="text" class="form-control" name="meta_title"
                                                            id="manufacturer-name-input" placeholder="Enter Title" value="{{ $page->meta_title }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Meta Keywords</label>
                                                        <input type="text" class="form-control" name="meta_key"
                                                            id="manufacturer-name-input" placeholder="Enter Keywords" value="{{ $page->meta_key }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Meta Description</label>
                                                        <textarea name="meta_des" class="form-control" id="" cols="30" rows="10">{{ $page->meta_des }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end tab-pane -->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- ckeditor -->
    <script src="{{ asset('admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/ecommerce-product-create.init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('admin/assets/js/pages/select2.init.js') }}"></script>
    

    <script>
        CKEDITOR.replace('intro');
        CKEDITOR.replace('description');
        $('#cats').select2({
            tags: true
        });
    </script>
@endpush
