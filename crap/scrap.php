<!DOCTYPE html>
<html>
<head>
	<title>Scraping Data</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">Scrapy.com</h1>
		<h3 class="deskripsi">Scraping Data pada Produk Bukalapak</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">Scraping</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
		</ul>
	</div>
 
	<div class="badan">
	<p>Hasil Scraping  </p>
	<!--------------------------------------------------- menghubungkan dengan Bukalapak ------------------------------------------------------------>
	<p>Bukalapak : </p>
	<?php 
		function getStringBetween($teks, $sebelum, $sesudah){
			$teks = ' ' . $teks;
			$ini = strpos($teks, $sebelum);
			if ($ini == 0) return '';
			$ini += strlen($sebelum); 
			$panjang = strpos($teks, $sesudah, $ini) - $ini;
			return substr($teks, $ini, $panjang);
		}	
	$url = $_GET['nama1'];
	
	$teks = file_get_contents($url);
	
	$data = [
		'title1' => getStringBetween($teks,"<h1 class='c-product-detail__name qa-pd-name'>", "</h1>"),
		'price1' => getStringBetween($teks, '<div class="c-product-detail-price" itemscope="itemscope" itemtype="http://schema.org/Offer" data-referrer="show" data-reduced-price=', 'data-installment="true"><span class="c-product-detail-price__installment">'),
		'category1' => getStringBetween($teks, '<a class="c-breadcrumb__link " itemprop="item" href="/c/handphone/hp-smartphone">','</span>','</span>'),
		'description1' => getStringBetween($teks, '<p>', '</p>')
		]; 
	
	
	
	?>
	
	<table border="1">
	
		<tr>
			<td>Nama</td>
			<td> <?php echo $data['title1']; ?> </td>
		</tr>
		<tr>
			<td>Harga</td>
			<td> <?php echo $data['price1']; ?> </td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td> <?php echo $data['category1']; ?> </td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td> <?php echo $data['description1']; ?> </td>
		</tr>
		<tr>
			<td>link</td>
			<td> <?php echo $url ; ?> </td>
		</tr>
	</table>
	
	<p>Tokopedia : </p>
	<?php
	$url = $_GET['nama2'];
	
	$teks = file_get_contents($url);
	
	$data = [
		'title2' => getStringBetween($teks,'<span itemprop="name">', '</span>'),
		'price2' => getStringBetween($teks, '<span itemprop="price" content="', '</span>'),
		'category2' => getStringBetween($teks, '<a href="https://www.tokopedia.com/p/','</a>'),
		'description2' => getStringBetween($teks, '<div id="info" class="tab-pane fade product-summary__content in active" itemprop="description">', '</div>')
		]; 
		
	?>
	<table border="1">
		<tr>
			<td>Nama</td>
			<td> <?php echo $data['title2']; ?> </td>
		</tr>
		<tr>
			<td>Harga</td>
			<td> <?php echo $data['price2']; ?> </td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td> <?php echo $data['category2']; ?> </td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td> <?php echo $data['description2']; ?> </td>
		</tr>
		<tr>
			<td>link</td>
			<td> <?php echo $url ; ?> </td>
		</tr>
	</table>
	
	<p>Lazada : </p>
	<?php 
	$url = $_GET['nama3'];
	
	$teks = file_get_contents($url);
	
	$data = [
		'title3' => getStringBetween($teks,'<h1 class="pdp-product-title">', '</h1>'),
		'price3' => getStringBetween($teks, '<span class=" pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl">', '</span>'),
		'category3' => getStringBetween($teks, '<span data-spm-anchor-id="','</span>'),
		'description3' => getStringBetween($teks, '<div class="pdp-product-detail" data-spm="product_detail"><div class="pdp-product-desc "><div class="html-content pdp-product-highlights"><ul class="">', '</p>')
		]; 
	
	?>
	
		<table border="1">
		<tr>
			<td>Nama</td>
			<td> <?php echo $data['title3']; ?> </td>
		</tr>
		<tr>
			<td>Harga</td>
			<td> <?php echo $data['price3']; ?> </td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td> <?php echo $data['category3']; ?> </td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td> <?php echo $data['description3']; ?> </td>
		</tr>
		<tr>
			<td>link</td>
			<td> <?php echo $url ; ?> </td>
		</tr>
	</table>
	
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
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>