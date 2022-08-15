<?php
include 'koneksi.php';

$query = mysqli_query($mysqli,"SELECT * from tb_barang");
$result = mysqli_fetch_array($query);

?>
<table class="table table-bordered table-responsive" width="100%" cellspacing=3 cellpadding=5>
    <thead class="bg-primary">
        <tr>
            <th>No</th><th>Nama barang</th><th>Harga Beli</th><th>Harga Jual</th><th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=0;
        while ($result = mysqli_fetch_array($query)){
            $no++;
            ?>
            <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['barang'];?></td>
            <td><?php echo $result['harga_beli'];?></td>
            <td><?php echo $result['harga_jual'];?></td>
            <td><a href="editData.php?id=<?php echo $result['id'];?>"class="btn btn-warning mx-1">Edit</a>
            <a href="hapusData.php?id=<?php echo $result['id'];?>" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php }?>
    </tbody>
</table>
