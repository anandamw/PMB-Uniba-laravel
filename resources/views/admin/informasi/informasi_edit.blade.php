@extends('layouts.template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab"
                        tabindex="0">
                        <div
                            class="container d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-semibold fs-18 mb-sm-0">Tambah Data Informasi</h4>
                            <div>
                                <form action="/informasi/{{ $data->id_berita }}/edit" novalidate method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-primary text-white  py-2 px-4">
                                        <i class="ri-check-line text-white"></i>
                                        Simpan
                                    </button>
                                    <a href="" class="btn btn-success text-white fw-semibold py-2 px-4"
                                        type="submit">
                                        <i class="ri-menu-line"></i>
                                        Detail
                                    </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card bg-white border-0 rounded-10 mb-4">
                                <div class="card-body p-4">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                            aria-labelledby="preview-tab" tabindex="0">
                                            <div class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-12">
                                                    <label for="validationCustom05" class="form-label label">Judul</label>
                                                    <div class="position-relative">
                                                        <input type="text" name="judul_berita"
                                                            class="form-control h-58 ps-5" value="{{ $data->judul_berita }}"
                                                            id="validationCustom05" placeholder="Masukkan Judul Berita ..."
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Masukkan data dengan benar ...
                                                        </div>
                                                        <i class="ri-edit-2-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                            style="top: 13px !important;"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex form-group gap-1 flex-wrap">
                                                    <div class="col-lg-6 d-flex form-group gap-1 ">
                                                        <div class="col-lg-12">
                                                            <label class="form-label label">Status
                                                                Post ?</label>
                                                            <div class="position-relative">
                                                                <select name="status"
                                                                    class="form-select form-control h-58 ps-5"
                                                                    id="validationCustom07" required>
                                                                    <option value="1">Ya</option>
                                                                    <option value="0">tidak</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid State.
                                                                </div>
                                                                <i class="ri-checkbox-multiple-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                                    style="top: 13px !important;"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label class="form-label label">Kategori</label>
                                                            <div class="position-relative">
                                                                <select name="id_kategori"
                                                                    class="form-select form-control h-58 ps-5"
                                                                    id="validationCustom08" required>
                                                                    <option selected>- Berita</option>
                                                                    @foreach ($dataKategori as $item)
                                                                        <option value="{{ $item->id_kategori }}">
                                                                            {{ $item->nama_kategori }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid State.
                                                                </div>
                                                                <i class="ri-book-marked-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                                    style="top: 13px !important;"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="validationCustom05"
                                                            class="form-label label">Tanggal</label>
                                                        <div class="position-relative">
                                                            <input type="date" name="tanggal_berita"
                                                                class="form-control h-58 ps-5" id="validationCustom05"
                                                                placeholder="Your location" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid Address.
                                                            </div>
                                                            <i class="ri-calendar-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                                style="top: 13px !important;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="preview-tab-pane"
                                                        role="tabpanel" aria-labelledby="preview-tab" tabindex="0">
                                                        <div class="form-group">
                                                            <label class="label form-label">Foto Berita</label>
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
                                                                    <input id="file-upload" name="foto_berita"
                                                                        onchange="readURL(this);" type="file">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-3">
                                                    <label class="form-label label">Isi
                                                        Informasi <small class="text-danger">*</small></label>
                                                    <textarea id="editor" name="isi_berita" required></textarea>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
