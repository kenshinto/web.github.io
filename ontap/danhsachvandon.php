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
			<ul class="nav nav-tabs">
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
			<form method="POST">
				<fieldset class="form-group">
					<input type="text" name="tukhoa" class="form-control" id="formGroupExampleInput" placeholder="nhập từ khóa...">
				
					<button type="submit" name="timkiem" class="btn btn-light">Tìm kiếm</button>
				</fieldset>
			</form>
		</header>
		<content>
	        <table class="table table-bordered table-inverse table-hover">
	        	<thead>
	        		<tr>
	        			<th>IDs</th>
	        			<th>Nhân viên</th>
	        			<th>Trạng thái</th>
	        			<th>Người nhận</th>
	        			<th>Điện thoại</th>
	        			<th>Địa chỉ</th>
	        			<th>Ngày giao hàng</th>
	        			<th>Ghi chú</th>
	        			<th>Thao tác</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<?php 
	        		foreach ($vandon as $row) {
	        		 ?>
	        		<tr>
	        			<td><?php echo $row['id'] ?></td>
	        			<td><?php echo $row['hovaten'] ?></td>
	        			<td>
	        				<?php 
	        				if($row['trangthai']==0){
	        					echo 'Chưa giao';
	        				}else{
	        					echo 'Đã giao';
	        				}
	        				?>
	        			</td>
	        			<td><?php echo $row['nguoinhan'] ?></td>
	        			<td><?php echo $row['sdt'] ?></td>
	        			<td><?php echo $row['dc'] ?></td>
	        			<td><?php echo $row['ngaygiaohang'] ?></td>
	        			<td><?php echo $row['ghichu'] ?></td>
	        			<td>
	        				<a href="taovandon.php">Thêm</a>
	        				<a href="suavandon.php">Sửa</a>
	        			</td>
	        		</tr>
	        		<?php } ?>
	        	</tbody>
	        </table>
		</content>
		<footer class="footer">
			<span >Lê Thị Hoài Phương - 73892 - N01</span>
		</footer>
	</div>
</body>
</html>