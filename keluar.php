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
        <title>Barang Keluar</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
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
    <body class="sb-nav-fixed" style='background-color:#F4E2D1;'>
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style='background-color:#FFDDBE' >
        <img src='logo.png' style='height:55px'>
            </img>
            <a class="navbar-brand text-dark" href="index.php" style='font-family:Rockwell Extra Bold; font-size: 28px;'>SIWARKOPI</a>  
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu"  style='background-color:#a1887f'> 
                        <div class="nav">
                        <a class="nav-link text-dark" href="index.php"  style='font-family:Arial Rounded MT Bold' >
                                <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                                <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
                                </svg>
                                </div>
                                Dashboard
                            </a>
                            <a class="nav-link text-dark" href="masuk.php" style='font-family:Arial Rounded MT Bold'>
                                <div class="sb-nav-link-icon">  
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg></div>
                                Pembelian
                            </a>
                            <a class="nav-link text-dark" href="keluar.php"  style='font-family:Arial Rounded MT Bold'>
                                <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                                <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                                </svg>
                                </div>
                                Penjualan
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
                        <h1 class="mt-4 mb-4" style='font-family:Arial Rounded MT Bold'>Barang Keluar</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                               Tambah Barang
                            </button>
                            </div>
                            <div class="row">
                            <div class="card-body">
                            <div class="col-xl-12 col-md-6" style="margin: 0 auto;">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body" style='font-size:25px; margin: 0 auto; font-weight:bold; font-family:Arial Rounded MT Bold'>Total Penjualan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" style="margin:0 auto;" href="#"> 
                                        <?php
                                            $qry = mysqli_query($conn,"select sum((k.qtyklr * s.hargasatuanjual)) as totalbrgklr from keluar k, stock s where k.idbarang = s.idbarang");
                                            $jumstock = mysqli_fetch_array($qry);
                                            
                                            $totalstock = $jumstock['totalbrgklr'];

                                            //echo "<div style='font-size:30px; font-family:Arial Rounded MT Bold'>$totalstock</div>";
                                        ?>
                                            <div style='font-size:30px; font-family:Arial Rounded MT Bold'>
                                                <?="Rp. ".number_format($totalstock)." ,-"?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-hover">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class=' bg-dark text-white' style="text-align:center;">
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>Qty</th>
                                                <th>Harga Satuan Penjualan</th>
                                                <th>Total</th>
                                                <th>Penerima</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $ambilsemuadatastock = mysqli_query($conn,"select * from keluar k, stock s where s.idbarang = k.idbarang");
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                $idk = $data['idkeluar'];
                                                $idb = $data['idbarang'];
                                                $tanggal = $data['tanggalklr'];
                                                $namabarang = $data['namabarang'];
                                                $qty = $data['qtyklr'];
                                                $hargasatuan_penjualan = $data['hargasatuanjual'];
                                                $penerima = $data['penerima'];
                                                
                                                $total = 0;

                                                $total = $qty * $hargasatuan_penjualan;

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
                                                <td><?=$tanggal;?></td>
                                                <td style="text-align:center;"><?=$img;?></td>
                                                <td><?=$namabarang?></td>
                                                <td><?=$qty?></td>
                                                <td><?="Rp. ".number_format($data['hargasatuanjual'])." ,-"?></td>
                                                <td><?="Rp. ".number_format($total)." ,-"?></td>
                                                <td><?=$penerima?></td>
                                                <td style="text-align:center;">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idk;?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                    </svg>
                                                    </button>
                                                    <input type="hidden" name="idbarangygmaudihapus" value="<?=$idb;?>">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idk;?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                    </button>
                                                </td>
                                            </tr>


                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="edit<?=$idk;?>">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Edit Barang</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                
                                                                <!-- Modal body -->
                                                                <form method="post">
                                                                <div class="modal-body">
                                                                <input type="text" name="penerima" value="<?=$penerima;?>" class="form-control" required>
                                                                <br>
                                                                <input type="number" name="qtyklr" min="0" value="<?=$qty;?>" class="form-control" required>
                                                                <br>
                                                                <input type="hidden" name="idb" value="<?=$idb?>">
                                                                <input type="hidden" name="idk" value="<?=$idk?>">
                                                                <button type="submit" name="updatebarangkeluar" class="btn btn-primary">Submit</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="delete<?=$idk;?>">
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
                                                                <input type="hidden" name="kty" value="<?=$qty?>">
                                                                <input type="hidden" name="idk" value="<?=$idk?>">
                                                                <br>
                                                                <br>
                                                                <button type="submit" name="hapusbarangkeluar" class="btn btn-danger">Hapus</button>
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
                <h4 class="modal-title">Tambah Barang Keluar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <form method="post">
                <div class="modal-body">
                <select name='barangnya' class="form-control"> 
                    <?php
                    $ambilsemuadatanya = mysqli_query($conn, "select * from stock");
                    while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                        $namabarangnya = $fetcharray['namabarang'];
                        $idbarangnya = $fetcharray['idbarang'];
                    ?>

                    <option value="<?=$idbarangnya;?>"><?=$namabarangnya;?></option>

                    <?php 
                    }
                    ?>
                </select>
                <br>
                <input type="number" name="qtyklr" min="0" class="form-control" placeholder="Quantity" required>
                <br>
                <input type="text" name="penerima" placeholder="Penerima" class="form-control" requeired>
                <br>
                <button type="submit" name="addbarangkeluar" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            </div>
        </div>
</html>
