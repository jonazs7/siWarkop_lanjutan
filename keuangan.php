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
        <title>Keuangan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <style>
            .zoomable{
                width: 80px;
            }
            .zoomable:hover{
                transform: scale(2,2);
                transition: 0.3s ease;
            }
        </style>
    </head>
    <body class="sb-nav-fixed" style='background-color:#F4E2D1;) '>
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style='background-color:#FFDDBE' >
        <img src='logo.png' style='height:55px'>
            </img>
            <a class="navbar-brand text-dark" href="index.php" style='font-family:Rockwell Extra Bold; font-size: 28px;'>SIWARKOPI</a>  
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu" style='background-color:#a1887f'>
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
                    <!-- Bagian judul dan tombol cetak -->
                    <div class="container-fluid">
                    <center><h1 class="mt-4" style='font-family:Arial Rounded MT Bold'>LAPORAN KEUANGAN</h1></center>
                    <a href='export_keuangan.php'  target="_blank" class="btn btn-info" style="width: 10%">
                        Cetak
                    </a>
                    </br>
                    </br>
                    <!-- Bagian tabel pengeluaran -->
                    <h2>Pengeluaran</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Total Pengeluaran Tiap Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          //$ambilsemuadatastock = mysqli_query($conn,"select * from masuk m, stock s where s.idbarang = m.idbarang");
                          //$ambilsemuadatastock = mysqli_query($conn,"SELECT * FROM masuk INNER JOIN stock ON masuk.idbarang = stock.idbarang INNER JOIN keluar ON keluar.idbarang = stock.idbarang");
                          
                          //$ambilsemuadatastock = mysqli_query($conn,"SELECT sum((m.qty * s.hargasatuan)) as totalbrgmsk from masuk m, stock s where m.idbarang = s.idbarang");

                          //cek barang didatabase untuk total pengeluaran
                          $qry = mysqli_query($conn,"SELECT SUM((m.qty * s.hargasatuan)) AS totalPengeluaran FROM masuk m, stock s WHERE m.idbarang = s.idbarang");
                          $jumPengeluaran = mysqli_fetch_array($qry);
                          $totalPengeluaran = $jumPengeluaran['totalPengeluaran'];

                          $no=1;
                          
                          //cek barang didatabase untuk stok masuk
                          $ambilsemuadatastock = mysqli_query($conn,"SELECT * FROM masuk INNER JOIN stock ON masuk.idbarang = stock.idbarang");
                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                $tanggal = $data['tanggal'];
                                                $namabarang = $data['namabarang'];
                                                $qty = $data['qty'];
                                                $hargasatuan = $data['hargasatuan'];
                                                $total = $qty * $hargasatuan;
                        ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$tanggal?></td>
                                                <td>Menambah <?=$qty?> Stok <?=$namabarang?></td>
                                                <td><?="Rp. ".number_format($total)." ,-"?></td>
                                                <td style="text-align:center;">
                                            </tr>                 
                                        <?php
                                        };
                                        ?>        
                        </tbody>
                            <th scope="col">Saldo Ahir Pengeluaran</th>
                                <td><?="Rp. ".number_format($totalPengeluaran)." ,-"?></td>
                    </table>
                    
                    </br>
                    <!-- Bagian tabel pemasukan -->                 
                    <h2>Pemasukan</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Total Pemasukan Tiap Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          //cek barang didatabase untuk total pemasukan
                          $qry = mysqli_query($conn,"SELECT SUM((k.qtyklr * s.hargasatuanjual)) AS totalPemasukan FROM keluar k, stock s WHERE k.idbarang = s.idbarang");
                          $jumPemasukan = mysqli_fetch_array($qry);
                          $totalPemasukan = $jumPemasukan['totalPemasukan'];
 
                          $no=1;
                          
                          //cek barang didatabase untuk stok keluar
                          $ambilsemuadatastock = mysqli_query($conn,"SELECT * FROM keluar INNER JOIN stock ON keluar.idbarang = stock.idbarang");
                          $no=1;
                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                $tanggal = $data['tanggalklr'];
                                                $namabarang = $data['namabarang'];
                                                $qty = $data['qtyklr'];
                                                $hargasatuan = $data['hargasatuanjual'];
                                                $total = $qty * $hargasatuan;
                        ?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$tanggal?></td>
                                                <td>Menjual <?=$qty?> Stok <?=$namabarang?></td>
                                                <td><?="Rp. ".number_format($total)." ,-"?></td>
                                                <td> </td>
                                                <td style="text-align:center;">
                                            </tr>                 
                                        <?php
                                        };
                                        ?>
                        </tbody>
                            <th scope="col">Saldo Akhir Pemasukan</th>
                                <td><?="Rp. ".number_format($totalPemasukan)." ,-"?></td>
                    </table>
                </main>
         </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
</html>
                                        