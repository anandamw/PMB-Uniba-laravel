@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 d-flex align-items-center  flex-wrap">
                    <div class="ms-3">
                        <h4 class="">Nama Beasiswa : {{ $dataDetail->nama_beasiswa }}</h4> <img
                            src="{{ asset('beasiswa') }}/{{ $dataDetail->foto_beasiswa }}"
                            class="border-3 border-color-white container w-25" alt="{{ $dataDetail->nama_beasiswa }}">
                        <p> Deskripsi Beasiswa : {{ $dataDetail->deskripsi_beasiswa }}</p>
                        {{-- <p> Jadwal Selesai : {{ $dataDetail->jadwal_selesai }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
