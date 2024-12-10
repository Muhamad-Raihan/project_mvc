<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan</title>
    <!-- Tambahkan Bootstrap CSS CDN -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Custom styling for table */
        table {
            width: 100%;
        }
    </style>
</head>
<body class="container">

<h1 class="my-4">Daftar Karyawan</h1>
<!-- Tambahkan tombol dengan class Bootstrap -->
<p><a href="?c=contact&m=add" class="btn btn-primary">Tambahkan Karyawan</a></p>

<?php
if (!empty($data['notifikasi'])) {
    echo "<div class='alert alert-info'>$data[notifikasi]</div>";
}
?>

<!-- Buat tabel dengan styling dari Bootstrap -->
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($data['contacts']) {
            foreach ($data['contacts'] as $k => $v) {
        ?>
                <tr>
                    <td><?php echo $k + 1; ?></td>
                    <td><a href="?c=contact&m=show&id=<?php echo $v['id']; ?>"><?php echo $v['nama']; ?></a></td>
                    <td><a href="tel:<?php echo $v['telepon']; ?>"><?php echo $v['telepon']; ?></a></td>
                    <td><a href="mailto:<?php echo $v['email']; ?>"><?php echo $v['email']; ?></a></td>
                    <td><a href="https://www.google.com/maps?q=<?php echo $v['alamat']; ?>" target="_blank"><?php echo $v['alamat']; ?></a></td>
                    <td>
                        <a href="?c=contact&m=show&id=<?php echo $v['id']; ?>" class="btn btn-info btn-sm" title="Lihat">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="?c=contact&m=edit&id=<?php echo $v['id']; ?>" class="btn btn-warning btn-sm" title="Ubah">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="?c=contact&m=delete&id=<?php echo $v['id']; ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?');">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
        <?php
            }
        } else { ?>
            <tr>
                <td colspan="6" class="text-center">Tidak ada kontak</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Tambahkan Bootstrap JS dan Popper.js untuk mendukung fitur Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
