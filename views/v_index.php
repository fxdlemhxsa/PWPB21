<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 16, By Fadli Mahesa XI RPL 3</title>
    <link rel="stylesheet" type="text/css" href="assets/ale.css">
</head>
<body>
    <h1 class="centertext">Database Siswa</h1>
    <h2>Data yang ada</h2>
    <table border="1">
        <thread>
           <tr>
                <th scope="col">#</th>
                <th scope="col">Nis</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Gender</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Gol Darah</th>
                <th scope="col">Nama Orang Tua</th>
            </tr>
        </thread>
        <tbody>
            <?php
                $i = 1;
                while ($siswa = $listSiswa->fetch_array()) {
            ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama_lengkap']; ?></td>
                <td><?= $siswa['jenis_kelamin']; ?></td>
                <td><?= $siswa['kelas']; ?></td>
                <td><?= $siswa['jurusan']; ?></td>
                <td><?= $siswa['alamat']; ?></td>
                <td><?= $siswa['gol_darah']; ?></td>
                <td><?= $siswa['nama_ortu']; ?></td>
                <td>
                    <a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-primary">Edit</a>
                    <a href="delete.php?nis=<?= $siswa["nis"]; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <h2>Aksi yang bisa dilakukan</h2>
    <a href="tambah.php">Tambah Data</a>
    <a href="logout.php">Logout</a>
</body>
</html>
