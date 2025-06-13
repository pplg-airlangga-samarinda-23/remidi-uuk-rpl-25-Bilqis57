<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id_pengguna =$_GET['id'];
    $sql = "DELETE FROM pengguna WHERE id_pengguna=?";
    $query = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'";
}
if($row){
    header("location:pengguna.php");
}
?>