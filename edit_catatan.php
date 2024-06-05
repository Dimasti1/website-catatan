<div class="card">
	<div class="card-header">
	<a href="user.php" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
    </a>	
	</div>
	<div class="card-body">
	<?php
	$data=file('catatan.txt', FILE_IGNORE_NEW_LINES);
	$id_catatan=$_GET['id_catatan'];
	foreach ($data as $value) {
	$pecah=explode('|', $value);
	if($pecah['0']==$id_catatan){
	?>
	<form action="simpan_edit_catatan.php" method="post">
		<input type="hidden" name="id_catatan" value="<?= $pecah['0']; ?>">
		<div class="form-group">
			<label>Tanggal</label>
			<input value="<?= $pecah['3']; ?>" type="date" required class="form-control" placeholder="Masukkan Tanggal" name="tgl">
		</div>
		<div class="form-group">
			<label>Jam</label>
			<input value="<?= $pecah['4']; ?>" type="time" required class="form-control" placeholder="Masukkan Jam" name="jam">
		</div>
		<div class="form-group">
			<label>Lokasi</label>
			<input value="<?= $pecah['5']; ?>" type="text" required class="form-control" placeholder="Masukkan Lokasi" name="lokasi">
		</div>
		<div class="form-group">
			<label>Suhu Tubuh</label>
			<input value="<?= $pecah['6']; ?>" type="number" required class="form-control" placeholder="Masukkan Suhu Tubuh" name="suhu">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-secondary"><i class="fa fa-save"></i>SIMPAN</button>
			<button type="reset" class="btn btn-secondary"><i class="fa fa-trash"></i>HAPUS</button>
		</div>
	</form>
	<?php
	}}
	?>
	</div>
</div>