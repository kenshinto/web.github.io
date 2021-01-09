<?php 
	include('backend.php');

	if(isset($_POST['submit'])){
		suavandon($_POST);
		suachitet($_POST);
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
		</header>
		<content>
			<h3>Sửa vận đơn</h3>
	        <form method="POST">
	        	<h5>Thông tin vận đơn</h5>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput">IDs</label>
	        		<input type="text" class="form-control" placeholder="" name="idvd">
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">Nhân viên</label>
	        		<select name="nhanvien">
	        			<?php 
	        			$nv = laynv();
	        			foreach ($nv as $row) {
	        			 ?>
	        			<option value="<?php echo $row['id'] ?>"><?php echo $row['hovaten'] ?></option>
	        			<?php } ?>
	        		</select>
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput">Trạng thái</label>
	        		<select name="trangthai">
	        			<option value="0">Chưa giao</option>
	        			<option value="1">Đã giao</option>
	        		</select>
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">Người nhận</label>
	        		<input type="text" class="form-control" placeholder="" name="nguoinhan">
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput">Điện thoại</label>
	        		<input type="text" class="form-control" placeholder="" name="dienthoai">
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">Địa chỉ</label>
	        		<input type="text" class="form-control" placeholder="" name="diachi">
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput">Ngày giao hàng</label>
	        		<input type="date" class="form-control" placeholder="" name="ngaygiaohang">
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">Ghi chú</label>
	        		<input type="text" class="form-control" placeholder="" name="ghichu">
	        	</fieldset>
	        	<h5>Chi tiết vận đơn</h5>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">ID chi tiết vận đơn</label>
	        		<input type="text" class="form-control" placeholder="" name="idct">
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">Tên hàng hóa</label>
	        		<select name="hanghoa">
	        			<?php 
	        			$hh = layhh();
	        			foreach ($hh as $row) {
	        			 ?>
	        			<option value="<?php echo $row['id'] ?>"><?php echo $row['tenhh'] ?></option>
	        			<?php } ?>
	        		</select>
	        	</fieldset>
	        	<fieldset class="form-group">
	        		<label for="formGroupExampleInput2">Số lượng</label>
	        		<input type="number" class="form-control" placeholder="" name="soluong">
	        	</fieldset>
	        	<button type="submit" name="submit" class="btn btn-light">Sửa</button>
	        </form>
		</content>
		<footer class="footer">
			<span >Lê Thị Hoài Phương - 73892 - N01</span>
		</footer>
	</div>
</body>
</html>