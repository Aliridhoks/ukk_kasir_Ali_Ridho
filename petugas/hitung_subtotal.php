<?php
include '../koneksi.php';
$stok=$_POST['stok'];
$produk_id=$_POST['produk_id'];
$jumlah_produk=$_POST['jumlah_produk'];
$harga=$_POST['harga'];
$detail_id=$_POST['detail_id'];
$pelanggan_id=$_POST['pelanggan_id'];
$subtotal=$jumlah_produk * $harga;
$stok_total= $stok - $jumlah_produk;
mysqli_query($koneksi,"UPDATE detail_penjualan set subtotal='$subtotal', jumlah_produk='$jumlah_produk' where detail_id='$detail_id'");
mysqli_query($koneksi,"UPDATE produk set stok='$stok_total'where produk_id='$produk_id'");
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");