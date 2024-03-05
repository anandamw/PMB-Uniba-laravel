@extends('layouts.template')


@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <form action="/jalur-penerimaan/{{ $datas->id_jalur_penerimaan }}/edit_action" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div
                            class="container d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-semibold fs-18 mb-sm-0">Edit Data Jalur Penerimaan</h4>
                            <div>
                                <button type="submit" class="btn btn-primary text-white  py-2 px-4">
                                    <i class="ri-check-line text-white"></i>
                                    Simpan Perubahan
                                </button>
                                {{-- <a href="" class="btn btn-success text-white fw-semibold py-2 px-4" type="submit">
                                <i class="ri-menu-line"></i>
                                Detail
                            </a> --}}
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                aria-labelledby="preview-tab" tabindex="0">
                                <div class="row ">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label class="label">Nama Jalur Penerimaan</label>
                                            <div class="form-group position-relative">
                                                <input type="text" value="{{ $datas->nama_jalur }}" name="nama_jalur"
                                                    class="form-control text-dark ps-5 h-58"
                                                    placeholder="Nama Jalur Penerimaan" required />
                                                <i
                                                    class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="row col-lg-8">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Jadwal Mulai</label>
                                                    <div class="form-group position-relative">
                                                        <input type="date" name="jadwal_mulai"
                                                            class="form-control text-dark ps-5 h-58" placeholder="" />
                                                        <i
                                                            class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4">
                                                    <label class="label">Jadwal Selesai</label>
                                                    <div class="form-group position-relative">
                                                        <input type="date" name="jadwal_selesai"
                                                            class="form-control text-dark ps-5 h-58" placeholder="" />
                                                        <i
                                                            class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-4">
                                                    <label class="label">File Jalur</label>
                                                    <div class="form-group position-relative">
                                                        <input type="file" name="file_jalur"
                                                            class="form-control text-dark ps-5 h-100" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="myTabContent">
                                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                                aria-labelledby="preview-tab" tabindex="0">
                                                <div class="form-group">
                                                    <label class="label form-label">Foto Jalur</label>
                                                    <div
                                                        class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                                        <div class="product-upload">
                                                            <label for="file-upload" class="file-upload  mb-0">
                                                                <span
                                                                    class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                                                    <img id="blah"
                                                                        src="{{ asset('') }}assets/upload.png"
                                                                        alt="your image" />
                                                                </span>
                                                            </label>
                                                            <input id="file-upload" name="foto_jalur"
                                                                onchange="readURL(this);" type="file">
                                                        </div>
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
