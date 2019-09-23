<div class="halaman">
	<form action="scrap.php" method="get">
	<div class="row">
		<label>Masukkan Link URL Bukalapak</label>
		<input type="text" name="nama1" value="<?=isset($_POST['nama1']) ? $_POST['nama1'] : ''?>"/>
	</div>
	<div class="row">
		<label>Masukkan Link URL Tokopedia</label>
		<input type="text" name="nama2" value="<?=isset($_POST['nama2']) ? $_POST['nama2'] : ''?>"/>
	</div>
	<div class="row">
		<label>Masukkan Link URL Lazada</label>
		<input type="text" name="nama3" value="<?=isset($_POST['nama3']) ? $_POST['nama3'] : ''?>"/>
	</div>

	<div class="row">
		<input type="submit" value="Proses Data" >
		
	</div>
</form>
<h3>Copykan Link Seperti pada <a href="index.php?page=tutorial">Tutorial</a>
</h3>
</div>