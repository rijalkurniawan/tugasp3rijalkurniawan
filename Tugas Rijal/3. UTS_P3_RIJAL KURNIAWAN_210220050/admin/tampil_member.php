<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from member");
include("header.php");
?>

<?php
echo '<a href="input_member.php" class="btn btn-danger">Tambah Member</a>';?>


<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama Member</td>
    <td>Level</td>
  </tr>

  <?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['nama_member'];?></td>
      <td><?php echo $tampil ['level'];?></td>
  </tr>
<?php }?>

</table>
<?php
include("footer.php"); 