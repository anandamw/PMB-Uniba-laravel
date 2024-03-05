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
                            <h4 class="fw-semibold fs-18 mb-sm-0">Data Kategori</h4>
                            <button
                                class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span class="py-sm-1 d-block" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                    <i class="ri-add-line text-white"></i>
                                    <a>Tambah Kategori</a>
                                </span>
                            </button>
                        </div>
                        {{-- form tambah data --}}
                        @include('admin.kategori.kategori_create')
                        {{-- end form tambah data --}}

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                aria-labelledby="preview-tab" tabindex="0">
                                <div class="default-table-area members-list">
                                    <div class="table-responsive">
                                        <table class="table align-middle" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Kategori</th>
                                                    <th scope="col">Jumlah Informasi</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($totalInformasi as $item)
                                                    <tr>
                                                        <td>
                                                            <span>{{ $loop->iteration }}</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 ">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        {{ $item->nama_kategori }}
                                                                    </h4>
                                                                    <span
                                                                        class="text-gray-light">{{ $item->created_at }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                {{ $item->jumlah_berita }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown action-opt">
                                                                <button class="btn bg p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i data-feather="more-horizontal"></i>
                                                                </button>
                                                                <ul
                                                                    class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                                    <li>
                                                                        <button type="submit" class="dropdown-item"
                                                                            data-bs-toggle="offcanvas"
                                                                            data-bs-target="#offcanvasScrollingUpdate{{ $item->id_kategori }}"
                                                                            aria-controls="offcanvasScrollingUpdate">
                                                                            <i data-feather="edit-3"></i>
                                                                            Edit
                                                                        </button>
                                                                    </li>
                                                                    {{--  --}}
                                                                    <li>
                                                                        <button type="submit" href="#"
                                                                            class="dropdown-item" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_delete{{ $item->id_kategori }}">
                                                                            <i data-feather="trash-2">
                                                                            </i>
                                                                            Hapus
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    {{-- start form edit --}}

                                                    @include('admin.kategori.kategori_edit')
                                                    {{-- end form edit  --}}
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal_delete{{ $item->id_kategori }}"
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
                                                                    <b>{{ $item->nama_kategori }}</b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary text-white"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <a href="/kategori/{{ $item->id_kategori }}/delete"
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
    @endsection
