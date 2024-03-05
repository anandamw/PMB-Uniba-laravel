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
                            <h4 class="fw-semibold fs-18 mb-sm-0">Data Jalur Penerimaan</h4>
                            <button
                                class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span class="py-sm-1 d-block" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                                    <i class="ri-add-line text-white"></i>
                                    <a href="jalur-penerimaan/create" class="text-white text-decoration-none">Tambah Jalur
                                        Penerimaan</a>
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
                                                    <th scope="col">Nama Jalur Penerimaan</th>
                                                    <th scope="col">Jadwal Mulai</th>
                                                    <th scope="col">Jadwal Selesai</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($DataJalurPenerimaan as $item)
                                                    <tr>
                                                        <td>
                                                            <span>{{ $loop->iteration }}</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1 ">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        {{ $item->nama_jalur }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                {{ $item->jadwal_mulai }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span>
                                                                {{ $item->jadwal_selesai }}
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
                                                                        <a href="/jalur-penerimaan/{{ $item->token }}/detail"
                                                                            type="button" class="dropdown-item">
                                                                            <i data-feather="align-justify"></i>
                                                                            Detail
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/jalur-penerimaan/{{ $item->id_jalur_penerimaan }}/edit"
                                                                            class="dropdown-item">
                                                                            <i data-feather="edit-3"></i>
                                                                            edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/jalur-penerimaan/{{ $item->id_jalur_penerimaan }}/delete"
                                                                            class="dropdown-item"
                                                                            data-bs-target="#modal_delete{{ $item->id_jalur_penerimaan }}">
                                                                            <i data-feather="trash-2"></i>
                                                                            Hapus
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Modal -->
                                                    <div class="modal fade"
                                                        id="modal_delete{{ $item->id_jalur_penerimaan }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    <a href="/beasiswa/{{ $item->id_jalur_penerimaan }}/delete"
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
