<?php 
	include('backend.php');
	$vandon = layvandon();

	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
		$vandon = timkiem($tukhoa);
		header('location: danhsachvandon.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LÊ THỊ HOÀI PHƯƠNG-73892</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<img src="logo.jpg" class="logo">
			<span class="name-app">QUẢN LÝ VẬN ĐƠN</span>
			<ul class="nav nav-tabs ">
				<li class="nav-item">
					<a href="index.php" class="nav-link active">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a href="danhsachvandon.php" class="nav-link active">Danh sách</a>
				</li>
				<li class="nav-item">
					<a href="taovandon.php" class="nav-link active">Tạo vận đơn</a>
				</li>
				<li class="nav-item">
					<a href="suavandon.php" class="nav-link active">Sửa vận đơn</a>
				</li>
				<li class="nav-item">
					<a href="cau1.php" class="nav-link active">Câu 1</a>
				</li>
			</ul>
		</header>
		<content >
			<div class="card bg-light text-white">
				<img class="card-img" src="./img/anhnen.jpg" alt="Card image">
				<div class="card-img-overlay">
					<h4 class="card-title">Ôn tập</h4>
					<p class="card-text"><small class="text-muted">By Hoài Phương</small></p>
				</div>
			</div>
		</content>
		<footer class="footer">
			<span >Lê Thị Hoài Phương - 73892 - N01</span>
		</footer>
	</div>
</body>
</html>