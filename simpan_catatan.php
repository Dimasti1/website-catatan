<?php
session_start();
$nik=$_SESSION['nik'];
$nama=$_SESSION['nama_lengkap'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];
$lokasi=$_POST['lokasi'];
$suhu=$_POST['suhu'];
$id_catatan = rand(0, 100000);

$format="\n$id_catatan|$nik|$nama|$tgl|$jam|$lokasi|$suhu";

$file=fopen('catatan.txt','a');
fwrite($file, $format);

fclose($file);
?>
	<script type="text/javascript">
	alert('Data Perjalanan Tersimpan');
	window.location.assign('user.php?url=catatan_perjalanan');
	</script>
<!-- <?php
//header('location:user.php?url=catatan_perjalanan');
?> -->