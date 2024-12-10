<?php

class model {

    private $koneksi;

    function __construct(){
        // Gunakan mysqli_connect alih-alih mysql_connect
        $this->koneksi = mysqli_connect("localhost", "root", "", "db_toko");

        // Periksa apakah koneksi berhasil
        if (!$this->koneksi) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function execute($query){
        // Gunakan mysqli_query alih-alih mysql_query
        return mysqli_query($this->koneksi, $query);
    }

    function selectAll(){
        $query = "SELECT * FROM barang";
        return $this->execute($query);
    }

    function selectBarang($kode_barang){
        $query = "SELECT * FROM barang WHERE kode_barang='$kode_barang'";
        return $this->execute($query);
    }

    function insertBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok){
        $query = "INSERT INTO barang VALUES ('$kode_barang', '$nama_barang', '$harga_jual', '$harga_beli', '$stok')";
        return $this->execute($query);
    }

    function updateBarang($kode_barang, $nama_barang, $harga_jual, $harga_beli, $stok){
        $query = "UPDATE barang SET nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', stok='$stok' WHERE kode_barang='$kode_barang'";
        return $this->execute($query);
    }

    function hapus($kode_barang){
        $query = "DELETE FROM barang WHERE kode_barang='$kode_barang'";
        return $this->execute($query);
    }

    function fetch($var){
        // Gunakan mysqli_fetch_array alih-alih mysql_fetch_array
        return mysqli_fetch_array($var);
    }

    function __destruct(){
        // Tutup koneksi
        mysqli_close($this->koneksi);
    }
}

?>
