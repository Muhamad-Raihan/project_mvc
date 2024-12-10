<!DOCTYPE html>
<html>
<head>
	<title>Biodata <?php echo $contact['nama']; ?></title>
	<!-- Tambahkan Bootstrap CSS CDN -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h1 class="mb-4">Biodata <?php echo $contact['nama']; ?></h1>

<!-- Tambahkan tombol kembali dengan class Bootstrap -->
<a href="?c=contact" class="btn btn-secondary mb-4">Kembali</a>

<!-- Buat tabel dengan styling dari Bootstrap -->
<table class="table table-bordered">
	<tbody>
		<tr>
			<th scope="row">Nama</th>
			<td><?php echo $contact['nama']; ?></td>
		</tr>
		<tr>
			<th scope="row">Telepon</th>
			<td><a href="tel:<?php echo $contact['telepon']; ?>"><?php echo $contact['telepon']; ?></a></td>
		</tr>
		<tr>
			<th scope="row">Email</th>
			<td><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></td>
		</tr>
		<tr>
			<th scope="row">Alamat</th>
			<td><a href="https://www.google.com/maps?q=<?php echo $contact['alamat']; ?>" target="_blank"><?php echo $contact['alamat']; ?></a></td>
		</tr>
	</tbody>
</table>

<!-- Tambahkan Bootstrap JS dan Popper.js untuk mendukung fitur Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
