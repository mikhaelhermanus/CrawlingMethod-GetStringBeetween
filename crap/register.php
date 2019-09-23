<!doctype html>
<html>
<head>
	<title>Halaman Register</title>
<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
	background-color: #222;
}
#utama{
	width: 300px;
	margin: 0 auto;
	margin-top: 12%;
	
}
#judul{
	padding: 15px;
	text-align:center;
	color:#fff;
	font-size: 20px;
	background-color:#339966;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-bottom: 3px solid #336666;
}
#inputan{
	background-color: #ccc;
	padding: 20px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
		
}
input{
	padding: 10px;
	border: 0;
}
.lg{
	width :200px
}
.btn:hover{
	background-color:#336666;
	cursor:pointer; 
}	
</style>	
</head>

<body>
	
<div id="utama" style="margin-top:10%;"/>
	<div id="judul">
		 Halaman Register 
	</div>
	
	<div id="inputan">
		<form action="" method="post">
			<div>
				<input type="text" name="user" placeholder="Username" class="lg"/>
			</div>
			<div style="margin-top:10px;">
				<input type="password" name="pass" placeholder="password" class="lg"/>
			</div>
			<div style="margin-top: 10px;">
				<input type="text" name ="nama_lengkap" placeholder="Nama Lengkap" class="lg"/>	
			</div>
			<div style ="margin-top: 10px;">
				<select name="jenis_kelamin">
					<option value="">-Pilih Jenis Kelamin-</option>
					<option value="">-Laki-Laki</option>
					<option value="">-Perempuan</option>
				</select>
			</div>
			<div style="margin-top:10px;">
				<textarea name='alamat' class="lg" placeholder="Alamat"></textarea>
			</div>
			<div style="margin-top: 10px;">
				<input type="submit" name="register" class="btn"/>
				<span style='margin-left: 120px;'>
					<a href='login.php' class="btn-right">Login</a>
				</span>
			</div>
		</form>
		<?php
		if(@$_POST['register']){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$nama_lengkap = $_POST['nama_lengkap'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$alamat = $_POST['alamat'];
			if($user == '' || $pass == '' || $nama_lengkap == '' || $jenis_kelamin == '' || $alamat == ''){
				?><script type="text/javascript">alert('Inputan Tidak Boleh Ada Yang Kosong');</script>    <?php
			} else {
				$sql_insert = mysql_query("insert into tb_register values('','$user','$pass','$nama_lengkap','$jenis_kelamin','$alamat','user')") or die(mysql_error());
				if($sql_insert){
				?><script type="text/javascript">alert('Pendaftaran berhasil,silahkan login');</script><?php
				}
			}
	}
	?>	
		</div>
</body>
</html>