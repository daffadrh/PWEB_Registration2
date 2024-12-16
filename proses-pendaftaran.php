<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $kategori = $_POST['kategori']; // Menyimpan kategori (siswa/pegawai)
    
    if ($kategori == 'siswa') {
        $sekolah_asal = $_POST['sekolah_asal'];

        // Insert data siswa
        $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
                VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    } elseif ($kategori == 'pegawai') {
        $posisi = $_POST['posisi'];
        $gaji = $_POST['gaji'];

        // Insert data pegawai
        $sql = "INSERT INTO pegawai (nama, alamat, jenis_kelamin, agama, posisi, gaji) 
                VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$posisi', '$gaji')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
