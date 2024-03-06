

<?php

use App\Models\InformasiModel;
use App\Models\KategoriModel;



if (!function_exists('master_berita')) {
    function master_berita()
    {
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




if (!function_exists('format_tanggal')) {
    function format_tanggal($tgl)
    {

        $tgl_indo = date('F d, Y', strtotime($tgl));

        return $tgl_indo;
    }
}


?>