<?php
$id = $_GET['id_catatan'];


$no=0;
$data=file('catatan.txt', FILE_IGNORE_NEW_LINES);
foreach ($data as $value) {
	$no++;
	$pecah=explode("|", $value);
	if($pecah['0']==$id){
		$line= $no-1;
	}
}

$buka=file('catatan.txt');

unset($buka[$line]);
file_put_contents('catatan.txt', implode("", $buka));


?>
	<script type="text/javascript">
	alert('Data Perjalanan Terhapus');
	window.location.assign('user.php?url=catatan_perjalanan');
	</script>