<style>
            .zoomable{
                width: 20px;
            }
            .zoomable:hover{
                transform: scale(2,2);
                transition: 0.3s ease;
            }
</style>
<?php
require 'function.php';
require 'cek.php';
require_once __DIR__ . '/vendor/autoload.php';

$idc = $_GET['id'];
$stockdata = mysqli_query($conn, "select * from stock where idbarang='$idc'");

$datastock = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table border="1">    
        <tr>
            <th>ID Barang</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Stock</th>
        </tr>';
    foreach($stockdata as $rows){
         //cek ada gambar atau tidak
         $gambar = $rows['image']; //ambil gambar
         if($gambar==null){
             //jika tidak ada gambar
             $img='No Photo';
         }else{
             //jika ada gambar
             $img = '<img src="images/'.$gambar.'" width="80px">';
         }
        $html .= '<tr>
                <td>'. $rows["idbarang"] .'</td>
                <td>'. $img .'</td>
                <td>'. $rows["namabarang"] .'</td>
                <td>'. $rows["deskripsi"] .'</td>
                <td>'. $rows["stock"] .'</td>
        </tr>';
    }
$html.= '</table>
</body>
</html>
';
$datastock->WriteHTML($html);
$datastock->Output();

?>