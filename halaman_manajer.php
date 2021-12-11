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
        <title>Stok Barang</title>
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
            <a class="navbar-brand text-dark" href="halaman_manajer.php" style='font-family:Rockwell Extra Bold; font-size: 28px;'>SIWARKOPI</a>  
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
                    <div class="container-fluid">
                    <h1 class="mt-4" style='font-family:Arial Rounded MT Bold'>Dashboard</h1>
                    <h2 class="mt-2" style='font-family:Arial Rounded MT Bold'>
                        Welcome <?php echo $_SESSION['nama']?> !!
                    </h2>
                    <div class="row">
                            <div class="card-body">
                            <div class="col-xl-12 col-md-6" style="margin: 0 auto;">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body" style='font-size:25px; margin: 0 auto; font-weight:bold; font-family:Arial Rounded MT Bold'>Total Stok</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" style="margin:0 auto;" href="#"> 
                                        <?php
                                            $qry = mysqli_query($conn,"select sum(stock) as totalstock from stock");
                                            $jumstock = mysqli_fetch_array($qry);
                                            
                                            $totalstock = $jumstock['totalstock'];

                                            echo "<div style='font-size:30px; font-family:Arial Rounded MT Bold'>$totalstock</div>";
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                          <div class="row">
                          <div class="col">                            <!-- Grafik Penjualan--->
                            <div class="col">
                                <div class="card text-dark mb-4">
                                    <div class="card-body" style='font-size:25px; margin: 0 auto; font-weight:bold; font-family:Arial Rounded MT Bold'>Grafik Laporan Penjualan Stok</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="margin: 0 auto;">
                                        <a class="small text-white stretched-link" href="#"> 
                                        <?php
                                        $labelk = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

                                        for($bulank = 1;$bulank < 13;$bulank++)
                                        {
                                            $gfpk = mysqli_query($conn,"select sum((s.hargasatuanjual * k.qtyklr)) as jumlahk from keluar k, stock s where k.idbarang= s.idbarang and MONTH(k.tanggalklr)='$bulank'");
                                            $rowk = mysqli_fetch_array($gfpk);
                                            $jumlah_produkk[] = $rowk['jumlahk'];
                                        }
                                        ?>
                                        <script type="text/javascript" src="Chart.js"></script>
                                        <div style="width: 650px; height: 325px">
                                            <canvas id="myPenjualan"></canvas>
                                        </div>
                                            <script>
                                                var ctx = document.getElementById("myPenjualan").getContext('2d');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: <?php echo json_encode($labelk); ?>,
                                                        datasets: [{
                                                            label: 'Grafik Penjualan',
                                                            data: <?php echo json_encode($jumlah_produkk); ?>,
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    beginAtZero:true
                                                                }
                                                            }]
                                                        }
                                                    }
                                                });
                                            </script>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>  
                    <div class="col">                            <!-- Grafik Pembelian--->
                            <div class="col">
                                <div class="card text-dark mb-4">
                                    <div class="card-body" style='font-size:25px; margin: 0 auto; font-weight:bold; font-family:Arial Rounded MT Bold'>Grafik Laporan Pembelian Stok</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="margin: 0 auto;">
                                        <a class="small text-white stretched-link" href="#"> 
                                        <?php
                                        $label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

                                        for($bulan = 1;$bulan < 13;$bulan++)
                                        {
                                            $gfp = mysqli_query($conn,"select sum((s.hargasatuan * m.qty)) as jumlah from masuk m, stock s where m.idbarang= s.idbarang and MONTH(m.tanggal)='$bulan'");
                                            $row = mysqli_fetch_array($gfp);
                                            $jumlah_produk[] = $row['jumlah'];
                                        }
                                        ?>
                                        <script type="text/javascript" src="Chart.js"></script>
                                        <div style="width: 650px; height: 325px">
                                            <canvas id="myPembelian"></canvas>
                                        </div>
                                            <script>
                                                var ctx = document.getElementById("myPembelian").getContext('2d');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: <?php echo json_encode($label); ?>,
                                                        datasets: [{
                                                            label: 'Grafik Pembelian',
                                                            data: <?php echo json_encode($jumlah_produk); ?>,
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    beginAtZero:true
                                                                }
                                                            }]
                                                        }
                                                    }
                                                });
                                            </script>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                            <!-- Grafik Stock--->
                            <div class="col">
                                <div class="card text-dark mb-4">
                                    <div class="card-body" style='font-size:25px; margin: 0 auto; font-weight:bold; font-family:Arial Rounded MT Bold'>Grafik Stok</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between" style="margin: 0 auto;">
                                        <a class="small text-white stretched-link" href="#"> 
                                        <?php
                                        
                                        $stock = mysqli_query($conn,"select * from stock");
                                        while($row = mysqli_fetch_array($stock)){
                                            $namastock[] = $row['namabarang'];
                                            
                                            $query = mysqli_query($conn,"select sum(stock) as jumlah from stock where idbarang='".$row['idbarang']."'");
                                            $row = $query->fetch_array();
                                            $jumlahstock[] = $row['jumlah'];
                                        }
                                        ?>
                                        <script type="text/javascript" src="Chart.js"></script>
                                        <div style="width: 650px;height: 310">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                        <script>
                                                var ctx = document.getElementById("myChart").getContext('2d');
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: <?php echo json_encode($namastock); ?>,
                                                        datasets: [{
                                                            label: 'Stok Sekarang',
                                                            data: <?php echo json_encode($jumlahstock); ?>,
                                                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                            borderColor: 'rgba(255,99,132,1)',
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    beginAtZero:true
                                                                }
                                                            }]
                                                        }
                                                    }
                                                });
                                            </script>
                                        </a>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <h1 class="mt-2" style='font-family:Arial Rounded MT Bold'>Stok Barang</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                               Tambah Barang
                            </button> 
                            </a>
                            <a href='export.php'  target="_blank" class="btn btn-info">
                            Cetak
                            </a>
                            </div>
                            <?php
                                    $ambildatastock = mysqli_query($conn,"select * from stock where stock < 6");

                                while($fetch=mysqli_fetch_array($ambildatastock)){
                                    $barang = $fetch['namabarang'];
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Perhatian!</strong> Stok Barang <?=$barang;?> Sisa sedikit
                            </div>

                            <?php
                                }
                            ?>
                                <div class=" mt-4 pl-4 pr-4 table-responsive table-hover">
                                    <table class=" mt-4 table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class=' bg-dark text-white' style="text-align:center;">
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>Deskripsi</th>
                                                <th>Stok</th>
                                                <th>Harga Satuan Pembelian</th>
                                                <th>Harga Satuan Penjualan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                $ambilsemuadatastock = mysqli_query($conn,"select * from stock");
                                                while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                    $namabarang = $data['namabarang'];
                                                    $deskripsi = $data['deskripsi'];
                                                    $stock = $data['stock'];
                                                    $hargas = $data['hargasatuan'];
                                                    $hargasjual = $data['hargasatuanjual'];
                                                    $idb = $data['idbarang'];

                                                    //cek ada gambar atau tidak
                                                    $gambar = $data['image']; //ambil gambar
                                                    if($gambar==null){
                                                        //jika tidak ada gambar
                                                        $img='No Photo';
                                                    }else{
                                                        //jika ada gambar
                                                        $img = '<img src="images/'.$gambar.'" class="zoomable">';
                                                    }
                                            ?>

                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td style="text-align:center;"><?=$img;?></td>
                                                <td><?=$namabarang?></td>
                                                <td><?=$deskripsi?></td>
                                                <td><?=$stock?></td>
                                                <td><?="Rp. ".number_format($data['hargasatuan'])." ,-"?></td>
                                                <td><?="Rp. ".number_format($data['hargasatuanjual'])." ,-"?></td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idb;?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                    </svg>
                                                    </button>
                                                    <input type="hidden" name="idbarangygmaudihapus" value="<?=$idb;?>">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idb;?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                    </button>
                                                    <a href="cetak_stock.php?id=<?=$idb;?>" class="btn btn-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                    </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                                        <!-- Edit Modal -->
                                                        <div class="modal fade" id="edit<?=$idb;?>">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Edit Barang</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                
                                                                <!-- Modal body -->
                                                                <form method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                <input type="text" name="namabarang" value="<?=$namabarang;?>" placeholder="Nama Barang" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="deskripsi" value="<?=$deskripsi;?>" placeholder="Deskripsi barang" class="form-control" required>
                                                                <br>
                                                                <input type="number" name="hargas" min="0" value="<?=$hargas;?>" placeholder="Harga Satuan Pembelian" class="form-control" required>
                                                                <br>
                                                                <input type="number" name="hargasjual" min="0" value="<?=$hargasjual;?>" placeholder="Harga Satuan Penjualan" class="form-control" required>
                                                                <br>
                                                                <input type="file" name="file" placeholder="Upload gambar" class="form-control">
                                                                <br>
                                                                <input type="hidden" name="idb" value="<?=$idb?>">
                                                                <button type="submit" name="updatebarang" class="btn btn-primary">Submit</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="delete<?=$idb;?>">
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
                                                                Apakah anda yakin ingin menghapus <?=$namabarang?>?
                                                                <input type="hidden" name="idb" value="<?=$idb?>">
                                                                <br>
                                                                <br>
                                                                <button type="submit" name="hapusbarang" class="btn btn-danger">Hapus</button>
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
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                <br>
                <input type="text" name="deskripsi" placeholder="Deskripsi barang" class="form-control" required>
                <br>
                <input type="number" name="stock" min="0" class="form-control" placeholder="Stok" required>
                <br>
                <input type="number" name="hargas" min="0" class="form-control" placeholder="Harga Satuan Pembelian" required>
                <br>
                <input type="number" name="hargasjual" min="0" class="form-control" placeholder="Harga Satuan Penjualan" required>
                <br>
                <input type="file" name="file" class="form-control" placeholder="Gambar" required>
                <br>
                <button type="submit" name="addnewbarang" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            </div>
        </div>

</html>
