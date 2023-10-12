<?php
    $nama = $_POST['nama'];
    $nomorhp = $_POST['nomorhp'];
    if (isset($nama) && isset($nomorhp)){
        $jk = $_POST['jk'];
        $usia = $_POST['usia'];
        $harga = 0;
        if ($usia == "bocil") $harga = 10000;
        if ($usia == "dewasa") $harga = 15000;
        $antri = count(file("databooking.txt"))+1;
        $fp = fopen("databooking.txt","a+");
        echo "
        <center>
            <h1>Data Booking</h1>
            <p>Nama = $nama</p>
            <p>Nomor = $nomorhp</p>
            <p>Jenis Kelamin = $jk</p>
            <p>Harga = $harga</p>
            <h1>ANTRIAN $antri </h1>
            <a href='index.html'> kembali </a>
            </center>
        ";
        fputs($fp,"$nama|$nomorhp|$jk|antrian ke = $antri|harga = $harga\n");
    }
?>