<?php
require 'function.php';
// Cek login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
// cek dengan database cari ada tidak ada
    $cekdatabase= mysqli_query($conn,"SELECT * FROM login where email='$email' and password='$password'");
//hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);


if($hitung>0){
        $data = mysqli_fetch_assoc($cekdatabase);
    if($data['level']=="Karyawan"){
        $_SESSION['log']='True';
        $_SESSION['nama']=$data['nama'];
        header('location:index.php');

    }else if($data['level']=="Manajer"){
        $_SESSION['log']='True';
        $_SESSION['nama']=$data['nama'];
        header('location:halaman_manajer.php');
        
    } } 
else {
        echo "<script>alert('LOGIN GAGAL. Silahkan coba lagi!')</script>";
};
    
};
      
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style='background-color:#EEC7A4;'>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5" style="margin-top:180px">
                                <div class="card text-dark shadow-lg border-0 rounded-lg mt-5" style='background-color:#D6C1AE;'>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4" style='font-family:Arial Rounded MT Bold;'>Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                        <label for="inputEmail" style='font-family:Arial Rounded MT Bold;'>Email</label>
                                        <label for="inputEmail"></label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name='email' id="inputEmail" type="email" placeholder="Email" required/>
                                            </div>
                                            <label for="inputPassword" style='font-family:Arial Rounded MT Bold;'>Password</label>
                                            <label for="inputEmail"></label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  name ='password' id="inputPassword" type="password" placeholder="Password" />  
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" style="margin:0 auto" name='login'>Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
