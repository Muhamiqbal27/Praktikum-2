<?php
require_once 'navbar.html';
require_once 'sidebar.html';

require_once 'koneksi.php';

$sql = "SELECT dokter. *,unit_kerja.nama as nama_unit_kerja
        FROM dokter 
        LEFT JOIN unit_kerja ON dokter.unit_kerja_id = unit_kerja.id";
$dr = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter Puskesmas Sukahati</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Dokter Puskesmas Sukahati</h2>
        <a href="create_dokter.php" class ='btn btn-primary mt-4'>Tambah Data Dokter</a>
        <table class="table table-bordered">
            <tr class="table-warning">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kategori</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Unit Kerja</th>
                <th>Action</th>
            </tr>
            <?php 
            $nomer = 1;
            foreach($dr as $dokter){
            ?>
            <tr>
                <td><?= $nomer++; ?></td>
                <td><?= $dokter['nama']; ?></td>
                <td><?= $dokter['gender']; ?></td>
                <td><?= $dokter['tmp_lahir']; ?></td>
                <td><?= $dokter['tgl_lahir']; ?></td>
                <td><?= $dokter['kategori']; ?></td>
                <td><?= $dokter['telpon']; ?></td>
                <td><?= $dokter['alamat']; ?></td>
                <td><?= $dokter['nama_unit_kerja']; ?></td>
                <td>
                    <a href="edit_dokter.php?id=<?=$dokter['id'];?>" class="btn btn-primary">Edit</a>
                    <a href="proses_dokter.php?id=<?=$dokter['id'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php require_once 'footer.html';?>
