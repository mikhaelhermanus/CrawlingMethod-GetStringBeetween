<?php
session_start();
include "inc/koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['operator']){
	

?>


<!DOCTYPE html>
<html>
<head>
<style>
#footer{
	text-align: center;
	padding: 20px;
	background-color: #ccc;
	
}
#header{
	background-color: #ccc;
	text-align: center;
	padding: 20px;	
}

</style>	
	<title>Scraping Data</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div id="header">
	<header>
		<img alt="logo" src="img/LOGO.png" height="100" width="100" style="float:left;"/>
		<img alt="logo1" src="img/crawl.png" height="100" width="100" style ="float:right;"/>
		<h1 class="judul"><font color="#FFA500">Scrapy.com</h1></font>
		<h3 class="deskripsi"><font color="#FFA500">Scraping Data pada Produk Online Shop</h3></font>
	</header>
</div> 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">Scraping</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
			<li style="float: right"><a href="index.php?page=logout">Log Out</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tentang':
				include "tentang.php";
				break;
			case 'tutorial':
				include "tutorial.php";
				break;
			case 'scrap':
				include "scrap.php";
				break;
			case 'logout':
				include "logout.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
<div id="footer">
	copyright 2018 - Mikhael Hermanus (Teknik Informatika)||William Alexzander(Teknik Informatika)
	</div>	
<img alt="logo" src="img/crawl1.png" height="300" width="450" style="float:left;"/>
<img alt="logo1" src="img/crawl2.jpg" height="300" width="450" style ="float:right;"/>
</div>
</body>
</html>

<?php
} else {
	header("location: login.php");
}
?>