<?php
session_start();

if(isset($_SESSION['level'])){
    if($_SESSION['level']=="1"){
        header("location:administrator/index.php");
    }
    if($_SESSION['level']=="2"){
        header("location:petugas/index.php");
    }
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <title>App kasir</title>
    <style>
        .h-costum{
            height: 100%;
        }
      
    </style>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-costum">
        <div class="d-flex justify-content-center align-items-center h-costum">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="assets/login.png" alt="logo login" class="img-fluid">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h4 class="text-center mb-5">Log - in Masukkan Username dan Password</h4>
                <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal"){
                        echo"<div class='alert alert-danger '>Username atau Password Salah!</div> ";
                    }
                }
                ?>
                <form action="cek_login.php" method="post">
                    <div class="from-group mb-4">
                        <label for="" class="form-label">Username</label>
                        <input type="text" autofocus name="username" class="form-control form-control-lg" placeholder="Masukkan Username"autocomplete="off">
                    </div>
                    <div class="from-group mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan Password">
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button class="btn btn-primary btn-lg" type="submit" style="padding-left: 2.5rem; padding-right:2.5rem;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>