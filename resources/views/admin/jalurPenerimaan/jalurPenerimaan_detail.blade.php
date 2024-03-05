@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 d-flex align-items-center  flex-wrap">
                    <div class="ms-3">
                        <h4 class="">Judul Jalur: {{ $dataDetail->nama_jalur }}</h4>
                        <p> Jadwal Mulai : {{ $dataDetail->jadwal_mulai }}</p>
                        <p> Jadwal Selesai : {{ $dataDetail->jadwal_selesai }}</p>
                    </div>

                    <img src="{{ asset('jalur_penerimaan_foto') }}/{{ $dataDetail->foto_jalur }}"
                        class="border-3 border-color-white container w-25" alt="{{ $dataDetail->nama_jalur }}">
                </div>
            </div>
        </div>
    </div>
@endsection
