<?php
	require "connect.php";

	$tennd =  isset($_POST['tennd']);
	$sdt =  isset($_POST['sdt']);
	$cmt =  isset($_POST['cmt']);
	$ngaysinh = isset($_POST['ngaysinh']);
	$gioitinh = isset($_POST['gioitinh']);
	$matkhau = isset($_POST['matkhau']);

	if (strlen($tennd) > 0 
		&& strlen($sdt) >0 
		&& strlen($cmt) >0
		&& strlen($ngaysinh) >0
		&& strlen($gioitinh) >0
		&& strlen($matkhau) >0
	){
		$query = "INSERT INTO nguoidung VALUES(null, '$tennd' , '$sdt', '$cmt', '$ngaysinh', '$gioitinh', '$matkhau')";
		$data = myqli_query($con,$query);
		if ($data) {
			echo "Thanh cong";
		}else {
			echo "that bai";
		}
	}else{
		echo "Null";
	}


?>