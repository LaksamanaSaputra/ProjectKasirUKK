<?php
include_once("../koneksi/koneksi.php");

if (isset($_POST['update'])) {
   $id = $_GET['ProdukID'];
   $namw = $_POST['NamaProduk'];
   $harga = $_POST['Harga'];
   $stok = $_POST['Stok'];

   $rand rand();
   $ekstensi = array('png','jpg','jpeg', 'gif');
   $filename = $_FILES['foto'] 

