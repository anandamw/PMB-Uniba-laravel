@extends('layouts.template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <form action="/beasiswa/create" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div
                            class="container d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-semibold fs-18 mb-sm-0">Tambah Beasiswa</h4>
                            <div>
                                <button type="submit" class="btn btn-primary text-white  py-2 px-4">
                                    <i class="ri-check-line text-white"></i>
                                    Simpan
                                </button>
                                <a href="" class="btn btn-success text-white fw-semibold py-2 px-4" type="submit">
                                    <i class="ri-menu-line"></i>
                                    Detail
                                </a>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                aria-labelledby="preview-tab" tabindex="0">


                                <div class="row ">
                                    <div class="col-md-8">
                                        <label for="nama_beasiswa" class="form-label label">Nama Beasiswa</label>
                                        <div class="position-relative">
                                            <input type="text" name="nama_beasiswa" class="form-control h-58 ps-5"
                                                id="nama_beasiswa" placeholder="Masukkan Nama Beasiswa ..." required>

                                            <div class="invalid-feedback">
                                                Masukkan Nama Beasiswa dengan benar ...
                                            </div>
                                            <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                        <label for="deskripsi_beasiswa" class="form-label label">Deskripsi
                                            Beasiswa</label>
                                        <div class="position-relative">
                                            <input type="text" name="deskripsi_beasiswa" class="form-control h-58 ps-5"
                                                id="deskripsi_beasiswa" placeholder="Masukkan Jabatan Beasiswa ..."
                                                required>
                                            <div class="invalid-feedback">
                                                Masukkan data dengan bernar ...
                                            </div>
                                            <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="myTabContent">
                                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                            aria-labelledby="preview-tab" tabindex="0">
                                            <div class="form-group">
                                                <label class="label form-label">Foto Jalur</label>
                                                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                                    <div class="product-upload">
                                                        <label for="file-upload" class="file-upload  mb-0">
                                                            <span
                                                                class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                                                <img id="blah"
                                                                    src="{{ asset('') }}assets/upload.png"
                                                                    alt="your image" />
                                                            </span>
                                                        </label>
                                                        <input id="file-upload" name="foto_beasiswa"
                                                            onchange="readURL(this);" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}"
                }
            })
            .catch(error => {
                console.error(error);
            });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
