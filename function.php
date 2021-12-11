<?php
session_start();
// membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","warkopi");

//Menambah barang baru
if(isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];
    $hargasat = $_POST['hargas'];
    $hargasatjual = $_POST['hargasjual'];

    //soal gambar
    $allowed_extension = array('png','jpg');
    $nama = $_FILES['file']['name']; //mengambil nama gambar
    $dot = explode('.',$nama);
    $ekstensi = strtolower(end($dot));//ngambil ekstesinya
    $ukuran = $_FILES['file']['size'];//ngambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //ngambil lokasi filenya

    //penamaan file ->enkripsi
    $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //menggabungkan nama file yg dienkripsi dengan ekstensinya

    //validasi udah ada atau belum
    $cek = mysqli_query($conn,"select * from stock where namabarang='$namabarang'");
    $hitung = mysqli_num_rows($cek);

    if($hitung<1){
       
        //proses upload gambar
        if(in_array($ekstensi, $allowed_extension) === true){
            //validasi ukuran file
            if($ukuran < 15000000){
                move_uploaded_file($file_tmp, 'images/'.$image);
                
                $addtotable = mysqli_query($conn,"insert into stock (namabarang, deskripsi, stock, hargasatuan, hargasatuanjual, image) values('$namabarang','$deskripsi','$stock', '$hargasat', '$hargasatjual', '$image')");
                if($addtotable){
                    header('location:index.php');
                } else {
                    echo 'Gagal';
                    header('location:index.php');
                }
            }else{
                //kalau filenya lebih dari 15mb
                echo '
                <script>
                    alert("Ukuran terlalu besar");
                    window.location.href="index.php";
                </script>
                ';
            }

        }else{
            //kalau filenya tidak png/jpg
            echo '
            <script>
                alert("File harus png/jpg");
                window.location.href="index.php";
            </script>
            ';
        }


    } else{
        //jika sudah ada
        echo '
        <script>
            alert("Nama barang sudah ada");
            window.location.href="index.php";
        </script>
        ';
    }
}

// Menambah barang masuk
if(isset($_POST['barangmasuk'])){
    $barangnya = $_POST['barangnya'];
    $keterangan = $_POST['keterangan'];
    $qty = $_POST['qty'];

    $cekstoksekarang = mysqli_query($conn, "select * from  stock where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstoksekarang);

    $stocksekarang =$ambildatanya['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang + $qty;

    $addtomasuk = mysqli_query($conn,"insert into masuk (idbarang, keterangan, qty) values('$barangnya','$keterangan', '$qty')");

    $updatestockmasuk = mysqli_query($conn,"update stock set stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
    if($addtomasuk&&$updatestockmasuk){
        header('location:masuk.php');
    } else {
        echo 'Gagal';
        header('location:masuk.php');
    }
}

// Menambah barang keluar
if(isset($_POST['addbarangkeluar'])){
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qtyklr'];

    $cekstoksekarang = mysqli_query($conn, "select * from  stock where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstoksekarang);

    $stocksekarang =$ambildatanya['stock'];

    if($stocksekarang >= $qty){

        $tambahkanstocksekarangdenganquantity = $stocksekarang - $qty;

        $addtokeluar = mysqli_query($conn,"insert into keluar (idbarang, penerima, qtyklr) values('$barangnya','$penerima', '$qty')");

        $updatestockmasuk = mysqli_query($conn,"update stock set stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
        if($addtokeluar&&$updatestockmasuk){
            header('location:keluar.php');
        } else {
            echo 'Gagal';
            header('location:keluar.php');
        }
    }else{
        //kalau barang tidak cukup
        echo '
        <script>
            alert("!!! STOK SAAT INI TIDAK MENCUKUPI !!!");
            window.location.href="keluar.php";
        </script>
        ';
    }
}

//Update info barang
if(isset($_POST['updatebarang'])){
    $idb = $_POST['idb'];
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $hargasat = $_POST['hargas'];
    $hargasatjual = $_POST['hargasjual'];

    //soal gambar
    $allowed_extension = array('png','jpg');
    $nama = $_FILES['file']['name']; //ngambil nama gambar
    $dot = explode('.',$nama);
    $ekstensi = strtolower(end($dot));//ngambil ekstesinya
    $ukuran = $_FILES['file']['size'];//ngambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //ngambil lokasi filenya

    //penamaan file ->enkripsi
    $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //menggabungkan nama file yg dienkripsi dengan ekstensinya

    if($ukuran==0){
        $update = mysqli_query($conn,"update stock set namabarang='$namabarang', deskripsi='$deskripsi', hargasatuan='$hargasat', hargasatuanjual='$hargasatjual' where idbarang ='$idb'");
        if($update){
            header('location:index.php');
        } else {
            echo 'Gagal';
            header('location:index.php');
        }
    }else{
        //jika ingin
        $gambar = mysqli_query($conn,"select * from stock where idbarang='$idb'");
        $get = mysqli_fetch_array($gambar);
        $img = 'images/'.$get['image']; 
    
        move_uploaded_file($file_tmp, 'images/'.$image);
        $update = mysqli_query($conn,"update stock set namabarang='$namabarang', deskripsi='$deskripsi', hargasatuan='$hargasat', image='$image' where idbarang ='$idb'");
        if($update){
            unlink($img);
            header('location:index.php');
        } else {
            echo 'Gagal';
            header('location:index.php');
        }
    }
   
}

//Menghapus barang dari stock
if(isset($_POST['hapusbarang'])){
    $idb = $_POST['idb'];

    $gambar = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $get = mysqli_fetch_array($gambar);
    $img = 'images/'.$get['image']; 
    unlink($img);

    $hapus = mysqli_query($conn, "delete from stock where idbarang='$idb'");
    $update = mysqli_query($conn,"update stock set namabarang='$namabarang', deskripsi='$deskripsi' where idbarang ='$idb'");
    if($hapus){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }

}

//Mengubah data barang masuk
if(isset($_POST['updatebarangmasuk'])){
    $idb = $_POST['idb'];  
    $idm = $_POST['idm']; 
    $deskripsi = $_POST['keterangan'];
    $qty = $_POST['qty'];
    
//cek stok sekarang
    $lihatstock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $stocknya = mysqli_fetch_array($lihatstock);
    $stockskrg = $stocknya['stock'];

    $qtyskrg = mysqli_query($conn, "select * from masuk where idmasuk='$idm'");
    $qtynya = mysqli_fetch_array($qtyskrg);
    $qtyskrg = $qtynya['qty'];

    if($qty>$qtyskrg){
        $selisih = $qty-$qtyskrg;
        $kurangin = $stockskrg + $selisih;
        $kurangistocknya = mysqli_query($conn, "update stock set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update masuk set qty='$qty', keterangan='$deskripsi' where idmasuk='$idm'");
            if($kurangistocknya&&$updatenya){
                header('location:masuk.php');
            } else {
                echo 'Gagal';
                header('location:masuk.php');
            }
    }else {
        $selisih = $qtyskrg-$qty;
        $kurangin = $stockskrg - $selisih;
        $kurangistocknya = mysqli_query($conn, "update stock set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn, "update masuk set qty='$qty', keterangan='$deskripsi' where idmasuk='$idm'");
            if($kurangistocknya&&$updatenya){
                header('location:masuk.php');
            } else {
                echo 'Gagal';
                header('location:masuk.php');
            }

    }
}

//Menghapus barang masuk

if(isset($_POST['hapusbarangmasuk'])){
    $idb = $_POST['idb'];
    $qty = $_POST['kty'];
    $idm = $_POST['idm'];

    $getdatastock = mysqli_query($conn, "select * from stock where idbarang='$idb'");
    $data = mysqli_fetch_array($getdatastock);
    $stock = $data['stock'];

    $selisih = $stock-$qty;

    $update = mysqli_query($conn,"update stock set stock ='$selisih' where idbarang='$idb'");
    $hapusdata = mysqli_query($conn,"delete  from masuk where idmasuk ='$idm'");

    if($update&&$hapusdata){
        header("location:masuk.php");
    }else{
        header("location:masuk.php");  
    }
}


// Mengubah data barang keluar
if(isset($_POST['updatebarangkeluar'])){
    $idb = $_POST['idb'];  
    $idk = $_POST['idk']; 
    $penerima = $_POST['penerima'];
    $qty = $_POST['qtyklr'];

    $lihatstock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $stocknya = mysqli_fetch_array($lihatstock);
    $stockskrg = $stocknya['stock'];

    $qtyskrg = mysqli_query($conn, "select * from keluar where idkeluar='$idk'");
    $qtynya = mysqli_fetch_array($qtyskrg);
    $qtyskrg = $qtynya['qtyklr'];

    if($qty>$qtyskrg){
        $selisih = $qty-$qtyskrg;
        $kurangin = $stockskrg - $selisih;
        $kurangistocknya = mysqli_query($conn, "update stock set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update keluar set qtyklr='$qty', penerima='$penerima' where idkeluar='$idk'");
            if($kurangistocknya&&$updatenya){
                header('location:keluar.php');
            } else {
                echo 'Gagal';
                header('location:keluar.php');
            }

    }else {
        $selisih = $qtyskrg-$qty;
        $kurangin = $stockskrg + $selisih;
        $kurangistocknya = mysqli_query($conn, "update stock set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn, "update keluar set qtyklr='$qty', penerima='$penerima' where idkeluar='$idk'");
            if($kurangistocknya&&$updatenya){
                header('location:keluar.php');
            } else {
                echo 'Gagal';
                header('location:keluar.php');
            }

    }
}


//Menghapus barang keluar

if(isset($_POST['hapusbarangkeluar'])){
    $idb = $_POST['idb'];
    $qty = $_POST['kty'];
    $idk = $_POST['idk'];

    $getdatastock = mysqli_query($conn, "select * from stock where idbarang='$idb'");
    $data = mysqli_fetch_array($getdatastock);
    $stock = $data['stock'];

    $selisih = $stock+$qty;

    $update = mysqli_query($conn,"update stock set stock ='$selisih' where idbarang='$idb'");
    $hapusdata = mysqli_query($conn,"delete from keluar where idkeluar ='$idk'");

    if($update&&$hapusdata){
        header("location:keluar.php");
    }else{
        header("location:keluar.php");  
    }
}

//Menambah admin baru
if(isset($_POST['addadmin'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($_POST['level']=="0"){
        $level="Karyawan";
    }elseif($_POST['level']=="Karyawan"){
        $level="Karyawan";
    }elseif($_POST['level']=="Manajer"){
        $level="Manajer";
    }
    $queryinsert = mysqli_query($conn,"insert into login (nama, email, password, level) values ('$nama','$email','$password','$level')");

    if($queryinsert){
        header('location:admin.php');
    }else{
        header('location:admin.php');
    }
}

//Mengubah data admin

if(isset($_POST['updateadmin'])){
    $emailbaru = $_POST['emailadmin'];
    $passwordbaru = $_POST['passwordbaru'];
    $level = $_POST['level']; 
    $idnya = $_POST['id'];
    if($_POST['level']=="0"){
        $level="Karyawan";
    }elseif($_POST['level']=="Karyawan"){
        $level="Karyawan";
    }elseif($_POST['level']=="Manajer"){
        $level="Manajer";
    } 

    $queryupdate = mysqli_query($conn,"update login set email='$emailbaru', password='$passwordbaru', level='$level' where iduser='$idnya'");
    if($queryupdate){
        header('location:admin.php');
    }else{
        header('location:admin.php');
    }
}


//Menghapus admin
if(isset($_POST['hapusadmin'])){
    $id = $_POST['id'];

    $querydelete = mysqli_query($conn,"delete from login where iduser='$id'");

    if($querydelete){
        header('location:admin.php');
    }else{
        header('location:admin.php');
    }
}
?>