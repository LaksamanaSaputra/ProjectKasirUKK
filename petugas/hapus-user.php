<?php

include_once("../koneksi/koneksi.php");
$id = $_GET['id_user'];
$result = mysqli_query($con, "DELETE FROM user WHERE id_user=$id");
header("Location:index.php?page=user");

?>