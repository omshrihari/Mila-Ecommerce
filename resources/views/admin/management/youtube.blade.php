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

                @foreach ($yts as $yt)
                    <form id="createproduct-form" autocomplete="off" class="needs-validation mt-4" method="POST"
                        action="{{ route('admin.yt.update', $yt->id) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">{{ $page_title }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <label class="form-label" for="manufacturer-name-input">YT Link <code> (Link
                                                    should be only the last slug. For example :
                                                    https://www.youtube.com/watch?v=zU1-tV8Mtb4 [zU1-tV8Mtb4])</code>
                                            </label>
                                            <input type="text" class="form-control" name="yt_link" id="manufacturer-name-input" placeholder="Enter Link" value="{{ $yt->yt_link }}">
                                            <br>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $yt->yt_link }}?si=-x1Xo-RW7-c7-gST" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                @endforeach

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
