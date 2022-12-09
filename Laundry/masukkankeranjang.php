<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_paket=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
        $_SESSION['cart'][]=array(
            'id'=>$dt_laundry['id'],
            'jenis'=>$dt_laundry['jenis'],
            'qty'=>$_POST['harga']
        );
    }
    header('location: keranjang.php');
?>