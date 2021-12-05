<?php
include("koneksi.php");




if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into tb_cuti(`nama`, `jenis_cuti`, `sisa_cuti`, `tanggal_cuti`, `sampai_tanggal`, `alasan_cuti`)
values('".$_POST['nama']."', '".$_POST['jenis_cuti']."', '".$_POST['total_cuti']."', '".$_POST['tanggal_cuti']."', '".$_POST['sampai_tanggal']."', '".$_POST['alasan']."')");

if($query_input){
header('location:pending.php');
}else{
	echo mysqli_error();
}
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title> Formulir Pengajuan Cuti </title>
<style type="text/css">
.center {
	text-align: center;
}
body,td,th {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #000;
}
body {
	margin-left: 20px;
	color: #FFF;
	background-color: #999;
	background-image: url(bg4.jpg);
}
.Menu {
	text-align: center;
}
</style>
</head>
<body> 
<p>
<h1 class="center">Silahkan mengisi Form pengajuan cuti anda</h1>
<p>&nbsp;</p>

        <form method="POST">
    <table bgcolor="white" align="center" cellpadding="1" cellspacing="2">
            <tr>
                <td width="125" height="24">Nik Karyawan</td>
                <td width="6">:</td>
                <td width="201"><input type="text" name="nik_karyawan"></td>
            </tr>
            <tr>
                <td height="24">Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama_karyawan"></td>
            </tr>
            <tr>
                
            <td height="24">Jenis Cuti</td>
                <td>:</td>
            <td><select name="jenis_cuti">
                    <option value="cuti khusus">Cuti Khusus</option> 
                    <option value="cuti tahunan">Cuti Tahunan</option>
            </select>
            </td>
            </tr>
            
                            <td height="34">Total Jumlah Cuti</td>
                <td>:</td>
                <td>
                    <select name="total_cuti">
                        <option value="">- Totalnya -</option>
                        <?php
                            for($x=1;$x<=7;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
      <tr>
                <td height="24">Tanggal Cuti</td>
                <td>:</td>
                <td><input type="date"  name="tanggal_cuti"></td>
      </tr>
      <tr>
                <td height="24">Sampai Tanggal</td>
                <td>:</td>
                <td><input type="date"  name="sampai_tanggal"></td>
      </tr>
     
      <tr>
                <td height="24">No Telephone</td>
                <td>:</td>
                <td><input type="text" name="no_tlpon"></td>
      </tr>
      <tr>
                <td height="24">Alasan Cuti</td>
                <td>:</td>
                <td><input type="text" name="alasan"></td>
      </tr>
      <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="save" value="Ajukan Cuti"class="btn btn-success btn-block"/>
                    <input type="reset" name="reset" value="Batal"class="btn btn-success btn-block"/>
                </td>
            </tr>

        
        
  </table>
</form>