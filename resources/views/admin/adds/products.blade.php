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
                    action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{ $page_title }}</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Belongs To</label>
                                        <select class="form-control" id="cats" name="cats[]" multiple="multiple">
                                            @foreach ($sscat as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->subcategory->title }} > {{ $cat->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- @livewire('fetch-subcategory') --}}
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Product Name</label>
                                        <input type="text" class="form-control" name="name"
                                            id="manufacturer-name-input" placeholder="Enter Product Name">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Multiple Images</label>
                                        <input type="file" multiple class="form-control" name="images[]">
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Product Intro</label>
                                        <textarea id="intro" class="form-control" name="intro"></textarea>
                                    </div>
                                    <br>
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Product Description</label>
                                        <textarea id="description" class="form-control" name="description"></textarea>
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
                                                        <label class="form-label" for="manufacturer-name-input">MRP</label>
                                                        <input type="number" class="form-control" name="mrp"
                                                            id="manufacturer-name-input" placeholder="Enter MRP">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Price</label>
                                                        <input type="number" class="form-control" name="price"
                                                            id="manufacturer-name-input" placeholder="Enter Price">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">GST</label>
                                                        <select name="gst" class="form-control">
                                                            <option value="0">0%</option>
                                                            <option value="3">3%</option>
                                                            <option value="5">5%</option>
                                                            <option value="12">12%</option>
                                                            <option value="18">18%</option>
                                                            <option value="28">28%</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">HSN Code</label>
                                                        <input type="text" name="hsn" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">SKU Code</label>
                                                        <input type="text" name="sku" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Stock Status</label>
                                                        <select name="stock_status" class="form-control">
                                                            <option value="In Stock">In Stock</option>
                                                            <option value="Out of Stock">Out of Stock</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturer-name-input">Sort
                                                            Number</label>
                                                        <input type="number" class="form-control" name="sort"
                                                            id="manufacturer-name-input" placeholder="Enter Sorting number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
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
