@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 d-flex align-items-center  flex-wrap">
                    <div class="ms-3">
                        <h4 class="">Judul Jalur: {{ $dataDetail->nama_tim }}</h4>
                        <h4 class="">Jabatan Tim: {{ $dataDetail->jabatan_tim }}</h4>

                    </div>

                    <img src="{{ asset('team_pmb') }}/{{ $dataDetail->foto_tim }}"
                        class="border-3 border-color-white container w-25" alt="{{ $dataDetail->nama_tim }}">
                </div>
            </div>
        </div>
    </div>
@endsection
