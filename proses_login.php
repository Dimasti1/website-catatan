<?php
$nik=$_POST['nik'];
$nama=$_POST['nama_lengkap'];

$format="$nik|$nama";
$file=file("config.txt",FILE_IGNORE_NEW_LINES);
if(in_array($format, $file)){
	session_start();
	$_SESSION['nik']=$nik;
	$_SESSION['nama_lengkap']=$nama;

	header("location:user.php");
}else{ ?>
	<script type='text/javascript'>window
	alert('!!!Maaf kombinasi NIK dan Nama Lengkap Salah.');
	window.location.assign('index.php');
	</script>
<?php
}
?>