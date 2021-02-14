<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="";
	$site_url = 'http://localhost:8888/webBlog/';
	$site_admin = 'http://localhost:8888/webBlog/admin/';
	$conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die("Không kết nối được");
	mysqli_set_charset($conn,"utf8");
?>