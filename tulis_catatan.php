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
	<form action="simpan_catatan.php" method="post">
		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" required class="form-control" placeholder="Masukkan Tanggal" name="tgl">
		</div>
		<div class="form-group">
			<label>Jam</label>
			<input type="time" required class="form-control" placeholder="Masukkan Jam" name="jam">
		</div>
		<div class="form-group">
			<label>Lokasi</label>
			<input type="text" required class="form-control" placeholder="Masukkan Lokasi" name="lokasi">
		</div>
		<div class="form-group">
			<label>Suhu Tubuh</label>
			<input type="number" required class="form-control" placeholder="Masukkan Suhu Tubuh" name="suhu">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-secondary"><i class="fa fa-save"></i>SIMPAN</button>
			<button type="reset" class="btn btn-secondary"><i class="fa fa-trash"></i>HAPUS</button>
		</div>
	</form>
	</div>
</div>