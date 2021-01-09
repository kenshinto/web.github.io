<?php 
	$conn = new PDO('mysql:host=web.com.local;dbname=student','student','123456');

	function layvandon(){
		global $conn;
		$sql = "SELECT *, vandon.id as idvd, vandon.dienthoai as sdt, vandon.diachi as dc FROM vandon INNER JOIN nhanvien ON vandon.nhanvien_id = nhanvien.id";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function timkiem($tukhoa){
		global $conn;
		$sql = "SELECT *, vandon.id as idvd, vandon.dienthoai as sdt, vandon.diachi as dc FROM vandon INNER JOIN nhanvien ON vandon.nhanvien_id = nhanvien.id WHERE nhanvien.hovaten LIKE '%$tukhoa%'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function laynv(){
		global $conn;
		$sql ="SELECT * FROM nhanvien ORDER BY id";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function layhh(){
		global $conn;
		$sql ="SELECT * FROM hanghoa ORDER BY id";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function themvandon($data){
		global $conn;
		$idvd = $data['idvd'];
		$nhanvien = $data['nhanvien'];
		$trangthai = $data['trangthai'];
		$nguoinhan = $data['nguoinhan'];
		$dienthoai = $data['dienthoai'];
		$diachi = $data['diachi'];
		$ngaygiaohang = $data['ngaygiaohang'];
		$ghichu = $data['ghichu'];

		$sql = "INSERT INTO vandon(id,nhanvien_id,trangthai,nguoinhan,dienthoai,diachi,ngaygiaohang,ghichu) VALUES ('$idvd','$nhanvien','$trangthai','$nguoinhan','$dienthoai','$diachi','$ngaygiaohang','$ghichu')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}

	function themchitet($data){
		global $conn;

		$idct = $data['idct'];
		$idvd = $data['idvd'];
		$hhid = $data['hanghoa'];
		$sl = $data['soluong'];

		$sql = "INSERT INTO chitietvandon(id,vandon,hanghoa_id,soluong) VALUES ('$idct','$idvd','$hhid','$sl')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}

	function suavandon($data){
		global $conn;
		$idvd = $data['idvd'];
		$nhanvien = $data['nhanvien'];
		$trangthai = $data['trangthai'];
		$nguoinhan = $data['nguoinhan'];
		$dienthoai = $data['dienthoai'];
		$diachi = $data['diachi'];
		$ngaygiaohang = $data['ngaygiaohang'];
		$ghichu = $data['ghichu'];
		$sql = "UPDATE vandon SET id = '$idvd',nhanvien_id = '$nhanvien',trangthai = '$trangthai', nguoinhan = '$nguoinhan',dienthoai = '$dienthoai',diachi = '$diachi',ngaygiaohang = '$ngaygiaohang',ghichu = '$ghichu' WHERE id = '$idvd'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}

	function suachitet($data){
		global $conn;

		$idct = $data['idct'];
		$idvd = $data['idvd'];
		$hhid = $data['hanghoa'];
		$sl = $data['soluong'];
		$sql = "UPDATE chitietvandon SET id = '$idct',vandon = '$idvd',hanghoa_id = '$hhid', soluong = '$sl'WHERE id = '$idct'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
 ?>