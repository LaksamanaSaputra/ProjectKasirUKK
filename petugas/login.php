<?php 
include "../koneksi/koneksi.php";

error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $namaUser = $_POST['NamaUser'];
    $password = md5($_POST['Password']);
    $level = $_POST['level'];

    $sql = "SELECT * FROM user WHERE nama_user='$namaUser' AND Password='$password' AND level='$level'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama_user'] = $row['nama_user'];
        $_SESSION['level'] = $row['level'];
        
        echo "<script>alert('Berhasil Masuk!')</script>";
        
        
        header("Location: index.php");
        
        
        
        
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kasir</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="NamaUser">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Level:</label>
                            <select name="level" class="form-control" id="">
                                <option value="Administrator">Administrator</option>
                                <option value="Petugas">Petugas</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>   
        </div>
    </div>
    </div>
</body>
</html>

