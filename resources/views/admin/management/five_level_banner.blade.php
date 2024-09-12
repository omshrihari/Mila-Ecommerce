@extends('admin.layouts.base')

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

                <form id="createproduct-form" autocomplete="off" class="needs-validation mt-4" method="POST"
                    action="{{ route('admin.fivelevelbanner.update', $banner->id) }}" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{ $page_title }}</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Small Banner Link 1</label>
                                        <input type="text" class="form-control" name="banner1_link" placeholder="Enter Link"
                                        value="{{ $banner->banner1_link }}">
                                        <br>
                                        <label class="form-label" for="manufacturer-name-input">Small Banner 1</label>
                                        <input type="file" class="form-control" name="banner1"><br>
                                        <img src="{{ asset('web/uploads/'.$banner->banner1) }}" width="10%">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <label class="form-label" for="manufacturer-name-input">Small Banner Link 2</label>
                                        <input type="text" class="form-control" name="banner2_link" placeholder="Enter Link"
                                        value="{{ $banner->banner2_link }}">
                                        <br>
                                        <label class="form-label" for="manufacturer-name-input">Small Banner 2</label>
                                        <input type="file" class="form-control" name="banner2"><br>
                                        <img src="{{ asset('web/uploads/'.$banner->banner2) }}" width="10%">
                                    </div>
                                </div>
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
