@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <!-- Page Heading -->

    <div class="container">
        <div class="row d-flex justify-content-center mb-3">

            <div class="container px-4 pt-5 my-5  ">
                <div class="row d-flex justify-content-center mb-3 ">
                    <div class="card bg-white col-10 shadow">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin-UpdateProfile', auth()->user()->u_id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                {{-- img --}}
                                <div class="col-lg-8 col-md-12  m-auto ">
                                    <div class="mb-3 ">
                                        <img style="cursor: pointer;" width="200" height="200"
                                            class="d-block mx-auto mb-4 img-fluid img-thumbnail rounded-circle"
                                            src="{{ asset('storage/' . auth()->user()->u_photo) }}" onclick="trigger()"
                                            id="displayimg" alt="">
                                        <input style="display:none;" type="file" onchange="displayim(this)" name="u_photo"
                                            id="profileimage" value="{{ auth()->user()->u_photo }}">
                                        @error('u_photo')
                                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}
                                            </h6>
                                        @enderror
                                    </div>
                                </div>

                                {{-- name --}}
                                <div class="mb-3 ">
                                    <div class="col-lg-8 col-md-12  m-auto">
                                        <input value="{{ auth()->user()->u_name }}" type="text" name="u_name"
                                            class="form-control bg-light" id="u_name">
                                        @error('u_name')
                                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}
                                            </h6>
                                        @enderror
                                    </div>
                                </div>


                                {{-- phone --}}
                                <div class="mb-3">
                                    <div class="col-lg-8 col-md-12  m-auto">
                                        <input value="{{ auth()->user()->u_mobile }}" class="form-control bg-light"
                                            type="text" id="u_mobile" name="u_mobile">
                                        @error('u_mobile')
                                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}
                                            </h6>
                                        @enderror
                                    </div>
                                </div>

                                {{-- email --}}
                                <div class="mb-3">
                                    <div class="col-lg-8 col-md-12  m-auto">
                                        <input value="{{ auth()->user()->u_email }}" class="form-control bg-light"
                                            type="text" id="u_email" name="u_email">
                                        @error('u_email')
                                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}
                                            </h6>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-lg-6 col-md-12  m-auto">
                                        <button type="submit" class="btn btn-primary form-control">تحديث</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <script>
        // عند ضغط الصورة تتفعل معنا اختيار ملف
        function trigger() {
            document.querySelector('#profileimage').click();
        }

        function displayim(e) {
            if (e.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#displayimg').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }

        }
    </script>
@endsection
