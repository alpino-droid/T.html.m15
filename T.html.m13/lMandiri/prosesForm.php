<?php
if(isset($_POST['kirim'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tlahir = $_POST['tglLahir'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kelamin = $_POST['Kelamin'];  
    $ekskul = $_POST['ekskul'];

    echo "<h1><b>Terdaftar</b></h1>";
    echo "Nis : $nis <br>";
    echo "Nama : $nama <br>";
    echo "Kelas : $kelas <br>";
    echo "Tgl Lahir : $tlahir <br>";
    echo "Alamat : $alamat <br>";
    echo "Kota : $kota <br>";
    echo "Jenis Kelamin : $kelamin <br>";
    echo "Hobby : <br>";
    if(isset($_POST['hobby1'][0])) {
        echo "- :". $_POST['hobby1'][0] . "<br>";
    }
    if(isset($_POST['hobby2'][0])) {
        echo "- :". $_POST['hobby2'][0] . "<br>";
    }
    if(isset($_POST['hobby3'][0])) {
        echo "- :". $_POST['hobby3'][0] . "<br>";
    }
    if(isset($_POST['hobby4'][0])) {
        echo "- :". $_POST['hobby4'][0] . "<br>";
    }
    if(isset($_POST['hobby5'][0])) {
        echo "- :". $_POST['hobby5'][0] . "<br>";
    }
    echo "Pilihan Ekskul : $ekskul <br>";
    
}
?>