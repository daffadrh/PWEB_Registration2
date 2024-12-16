<?php
include('config.php');

// Menampilkan daftar siswa
echo "<h1>Daftar Siswa Yang Telah Mendaftar</h1>";

$sql_siswa = "SELECT * FROM calon_siswa";
$result_siswa = $conn->query($sql_siswa);

if ($result_siswa->num_rows > 0) {
    echo "<h2>Siswa</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
            </tr>";
    while($row = $result_siswa->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>" . $row['jenis_kelamin'] . "</td>
                <td>" . $row['agama'] . "</td>
                <td>" . $row['sekolah_asal'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada siswa yang terdaftar.";
}

// Menampilkan daftar pegawai
echo "<h1>Daftar Pegawai Yang Telah Mendaftar</h1>";

$sql_pegawai = "SELECT * FROM pegawai";
$result_pegawai = $conn->query($sql_pegawai);

if ($result_pegawai->num_rows > 0) {
    echo "<h2>Pegawai</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Posisi</th>
                <th>Gaji</th>
            </tr>";
    while($row = $result_pegawai->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>" . $row['jenis_kelamin'] . "</td>
                <td>" . $row['agama'] . "</td>
                <td>" . $row['posisi'] . "</td>
                <td>" . $row['gaji'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada pegawai yang terdaftar.";
}

$conn->close();
?>
