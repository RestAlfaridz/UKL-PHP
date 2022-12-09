<?php 
    include "header.php";
?>
<h2>Daftar Laundry</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    while($dt_paket=mysqli_fetch_array($qry_paket)){
        ?>
        <div class="col-md-3">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_paket['jenis']?></h5>
                <p class="card-text"><?=substr($dt_paket['harga'], 0,20)?></p>
                <a href="beli_paket.php?id=<?=$dt_paket['id']?>" class="btn btn-primary">Pilih Paket</a>
                <a href="ubah_paket.php?id=<?=$dt_paket['id']?>" class="btn btn-success">Ubah</a> <a href="hapus_paket.php?id=<?=$dt_paket['id']?>" onclick="return confirm('Apakah anda yakin menghapus paket ini?')" class="btn btn-danger">Hapus</a>
              </div>    
        </div>
        <?php
    }
    ?>
</div>
        <a class="nav-link" aria-current="page" href="tambah_paket.php">Tambah Paket</a>
<?php 
    include "footer.php";
?>
