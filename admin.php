<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kelola Anggota</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style='background-color:#F4E2D1;'>
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style='background-color:#FFDDBE' >
        <img src='logo.png' style='height:55px'>
            </img>
            <a class="navbar-brand text-dark" href="index.php" style='font-family:Rockwell Extra Bold; font-size: 28px;'>SIWARKOPI</a>  
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu"   style='background-color:#a1887f'>
                        <div class="nav">
                        <a class="nav-link text-dark" href="halaman_manajer.php"  style='font-family:Arial Rounded MT Bold' >
                                <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                                <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
                                </svg>
                                </div>
                                Dashboard
                            </a>
                            <a class="nav-link text-dark" href="keuangan.php"  style='font-family:Arial Rounded MT Bold' >
                                <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                </svg>
                                </div>
                                Keuangan
                            </a>
                            <a class="nav-link text-dark" href="admin.php"  style='font-family:Arial Rounded MT Bold'>
                                <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                                </svg>
                                </div>
                                Kelola Anggota
                            </a>
                            <a class="nav-link text-dark" href="logout.php"  style='font-family:Arial Rounded MT Bold'>
                                <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg>
                                </div>
                                Logout
                            </a> 
                    </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 mb-4" style='font-family:Arial Rounded MT Bold'>Kelola Anggota</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                               Tambah Anggota
                            </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-hover">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class='bg-dark text-white' style="text-align:center;">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Anggota</th>
                                                <th>Email Anggota</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                $ambilsemuadataadmin = mysqli_query($conn,"select * from login");
                                                while($data=mysqli_fetch_array($ambilsemuadataadmin)){
                                                    $nama = $data['nama'];
                                                    $em = $data['email'];
                                                    $iduser = $data['iduser'];
                                                    $pw = $data['password'];
                                                    $level = $data['level'];
                                            ?>

                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$nama?></td>
                                                <td><?=$em?></td>
                                                <td><?=$level?></td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$iduser;?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                    </svg>
                                                    </button>
                                                    <input type="hidden" name="idbarangygmaudihapus" value="<?=$idb;?>">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$iduser;?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                                        <!-- Edit Modal -->
                                                        <div class="modal fade" id="edit<?=$iduser;?>">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Edit Admin</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                
                                                                <!-- Modal body -->
                                                                <form method="post">
                                                                <div class="modal-body">
                                                                <input type="text" name="emailadmin" value="<?=$em;?>" placeholder="Email" class="form-control" required>
                                                                <br>
                                                                <input type="password" name="passwordbaru" value="<?=$pw;?>" placeholder="Password" class="form-control">
                                                                <br>
                                                                
                                                                <select id="level" name="level" class="form-control">
                                                                    <option value="0">>--Pilih Jabatan--<</option>
                                                                    <option value="Karyawan" <?php if( $data['level']=='Karyawan') {echo 'selected';} ?>>Karyawan</option>
                                                                    <option value="Manajer" <?php if( $data['level']=='Manajer') {echo 'selected';} ?>>Manajer</option>
                                                                </select>
                                                                <br>
                                                                <input type="hidden" name="id" value="<?=$iduser?>">
                                                                <button type="submit" name="updateadmin" class="btn btn-primary">Submit</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="delete<?=$iduser;?>">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Hapus data</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                
                                                                <!-- Modal body -->
                                                                <form method="post">
                                                                <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus <?=$em?>?
                                                                <input type="hidden" name="id" value="<?=$iduser?>">
                                                                <br>
                                                                <br>
                                                                <button type="submit" name="hapusadmin" class="btn btn-danger">Hapus</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                        <?php
                                        };
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
            <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Tambah Admin</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <form method="post">
                <div class="modal-body">
                <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                <br>
                <input type="email" name="email" placeholder="Email" class="form-control" required>
                <br>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
                <br>
                <!-- <input type="text" name="level" placeholder="Role" class="form-control" required> -->
                <select id="level" name="level" class="form-control">
                    <option value="0">>--Pilih Jabatan--<</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Manajer">Manajer</option>
                </select>
                <br>
                <button type="submit" name="addadmin" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            </div>
        </div>

</html>
