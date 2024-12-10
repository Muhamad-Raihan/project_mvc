<?php

class HomeController
{
	public function index()
	{
		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Selamat Datang</title>
			<!-- Bootstrap CSS CDN -->
			<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
		</head>
		<body class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="card text-center">
						<div class="card-header bg-primary text-white">
							<h2>Yeay! Selamat Datang</h2>
						</div>
						<div class="card-body">
							<p class="card-text">Silahkan lihat daftar karyawan di bawah ini:</p>
							<!-- Button for the link -->
							<a href="?c=contact" class="btn btn-success btn-lg">Daftar Karyawan</a>
						</div>
						<div class="card-footer text-muted">
							Contact Manager System
						</div>
					</div>
				</div>
			</div>

			<!-- Bootstrap JS and dependencies -->
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		</body>
		</html>
		<?php
		die();
	}
}
