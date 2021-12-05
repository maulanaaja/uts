<html>
<title>Mohon menunggu</title>
<style type="text/css">
.resumeformulircutianda {
	text-align: center;
}
body {
	background-color: #666;
	background-image: url(bg2.jpg);
}
body,td,th {
	color: #FFF;
}
</style>
<body bgcolor="#00FFCC">

<h1 align="center" class="resumeformulircutianda"> &quot;Resume Formulir Cuti Anda&quot;</h1>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>


<div align="center">
  <?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from tb_cuti");

?>
  <br/>
  <a href="log_in.php""btn btn-danger"> Back To Home </a>
  <?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
  <table class="table table-bordered" border="1" align="center">
    <tr>
      <td>Id Karyawan</td>
      <td>:</td>
      <td><?php echo $tampil['id_karyawan'];?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?php echo $tampil['nama'];?></td>
    </tr>
    <tr>
      <td>Jenis Cuti</td>
      <td>:</td>
      <td><?php echo $tampil['jenis_cuti'];?></td>
    </tr>
    <tr>
      <td>Total Cuti </td>
      <td>:</td>
      <td><?php echo $tampil['sisa_cuti'];?></td>
    </tr>
    <tr>
      <td>Awal Cuti</td>
      <td>:</td>
      <td><?php echo $tampil['tanggal_cuti'];?></td>
    </tr>
    <tr> 
      <td>Sampai Tanggal</td>
      <td>:</td>
      <td><?php echo $tampil['sampai_tanggal'];?></td>
    </tr>
    <tr>
      <td>Alasan</td>
      <td>:</td>
      <td><?php echo $tampil['alasan_cuti'];?></td>
    </tr>
  <?php }?>
  <br>
  </table>
</div>