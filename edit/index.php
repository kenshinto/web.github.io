<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>QUẢN LÝ VẬN ĐƠN</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>QUẢN LÝ VẬN ĐƠN</header>
		<div class="container">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link" href="index.php">TRANG CHỦ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="list.php">Danh sách vận đơn</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cau1.PNG">Ảnh câu 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signout.php">Đăng xuất</a>
						</li>
						<li class="nav-item">
							XIN CHÀO <?php echo($_SESSION['username']) ?> &emsp;
							Đăng nhập vào lúc &emsp; <?php echo $_SESSION['datetime']?>
						</li>
					</ul>
			<p>Đây là Project thực hiện đề ôn tập PTUD TRÊN NỀN WEB</p>
		</div>
	<footer class="footer">
		<span >Nguyễn Quyết Thắng - 74784 - N03</span>
	</footer>
</body>
</html>
