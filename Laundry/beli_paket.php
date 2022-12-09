<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<h2>Pesan paket</h2>
<div class="row">
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$dt_buku['id']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Jenis</td><td><?=$dt_buku['jenis']?></td>
                    </tr>
                    <tr>
                        <td>Harga</td><td><?=$dt_buku['harga']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Paket</td><td><input type="number" name="jumlah_paket" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
