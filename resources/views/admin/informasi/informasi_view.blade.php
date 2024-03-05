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
                            <h4 class="fw-semibold fs-18 mb-sm-0">Data Informasi</h4>
                            <button
                                class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span class="py-sm-1 d-block">
                                    <i class="ri-add-line text-white"></i>
                                    <a href="/informasi/create" class="text-decoration-none text-white">Tambah Data
                                        Informasi</a>
                                </span>
                            </button>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                aria-labelledby="preview-tab" tabindex="0">
                                <div class="default-table-area members-list">
                                    <div class="table-responsive">
                                        <table class="table align-middle" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($informasi as $item)
                                                    <tr>
                                                        <td>
                                                            <span>{{ $loop->iteration }}</span>
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 1)
                                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                                            @else
                                                                <i class="ri-close-circle-fill text-danger"></i>
                                                            @endif
                                                            <a
                                                                href="/info/{{ $item->token_berita }}">{{ Str::substr($item->judul_berita, 0, 70) }}...</a>
                                                            <br>
                                                            <a target="blank"
                                                                href="{{ asset('informasi') }}/{{ $item->foto_berita }}">
                                                                <small>Lihat Foto &raquo;</small>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 ">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        {{ $item->judul_berita }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 ">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        {{ $item->tanggal_berita }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 ">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        @if ($item->status == 1)
                                                                            <span>ditampilkan</span>
                                                                        @else
                                                                            <span>disembunyikan</span>
                                                                        @endif
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown action-opt">
                                                                <button class="btn bg p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i data-feather="more-horizontal"></i>
                                                                </button>
                                                                <ul
                                                                    class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                                    <!-- Button trigger modal -->
                                                                    <li>
                                                                        <button class="dropdown-item">
                                                                            <a
                                                                                href="informasi/{{ $item->token_berita }}/detail ">
                                                                                <i data-feather="align-justify"></i>
                                                                                Detail
                                                                            </a>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/informasi/{{ $item->id_berita }}/edit">
                                                                            <button type="submit" class="dropdown-item">
                                                                                <i data-feather="edit-3"></i>
                                                                                edit
                                                                            </button>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/informasi/{{ $item->id_berita }}/delete">
                                                                            <button type="submit" class="dropdown-item">
                                                                                <i data-feather="trash-2"></i>
                                                                                Hapus
                                                                            </button>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal_delete{{ $item->id_beasiswa }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel"><i
                                                                            class="ri-error-warning-line"></i>
                                                                        Peringatan!</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Yakin ingin menghapus Informasi
                                                                    <b>{{ $item->nama_beasiswa }}</b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary text-white"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <a href="/beasiswa/{{ $item->id_beasiswa }}/delete"
                                                                        class="btn btn-danger text-white">Ya! Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>
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
