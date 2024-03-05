@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 d-flex align-items-center  flex-wrap">
                    <div class="ms-3">
                        <h4 class="">Judul Berita: {{ $dataDetail->judul_berita }}</h4>
                        <p>{{ $dataDetail->tanggal_berita }}</p>
                    </div>

                    <img src="{{ asset('informasi') }}/{{ $dataDetail->foto_berita }}"
                        class="border-3 border-color-white container w-25" alt="user">
                    <p class="mt-3">{{ $dataDetail->isi_berita }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
