

<?php

use App\Models\BeasiswaModel;
use App\Models\InformasiModel;
use App\Models\JalurPenerimaanModel;
use App\Models\KategoriModel;



// master berita
if (!function_exists('master_berita')) {
    function master_berita()
    {

        $data = [];
        $kategori = InformasiModel::all();
        foreach ($kategori as $get) {
            $data[] = [
                'token_berita' => $get->token_berita,
                'judul_berita' => $get->judul_berita
            ];
        }
        return $data;
    }
}

// end master berita

// beasiswa
if (!function_exists('beasiswa')) {
    function beasiswa()
    {

        $data = [];
        $dataBeasiswa = BeasiswaModel::all();
        foreach ($dataBeasiswa as $getData) {
            $data[] = [
                'token_beasiswa' => $getData->token_beasiswa,
                'nama_beasiswa' => $getData->nama_beasiswa
            ];
        }
        return $data;
    }
}
// end beasiswa



// jalur_penerimaan

if (!function_exists('jalur_penerimaan')) {

    function jalur_penerimaan()
    {
        $data = [];

        $dataJalurPenerimaan = JalurPenerimaanModel::all();
        foreach ($dataJalurPenerimaan  as $getData) {
            $data[] = [
                'token' => $getData->token,
                'nama_jalur' => $getData->nama_jalur
            ];
        }
        return $data;
    }
}

// end jalur_penerimaan


if (!function_exists('format_tanggal')) {
    function format_tanggal($tgl)
    {
        $tgl_indo = date('F d, Y', strtotime($tgl));
        return $tgl_indo;
    }
}


?>