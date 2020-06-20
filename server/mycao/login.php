<?php
	require "connect.php";
	$sdt = isset($_POST[ 'sdt' ]);
	$sdt = isset($_POST['matkhau']);
	//$sdt = "0972582560";
//$matkhau = "123";
	Class Nguoidung {
		function Nguoidung ( $id,$user, $phone ,$cmt, $ngaysinh, 
			$gioitinh, $password){
				$this->ID = $id;
				$this->tennd = $user;
				$this->sdt = $phone;
				$this->cmt = $cmt;
				$this->ngaysinh = $ngaysinh;
				$this->gioitinh = $gioitinh;
				
				$this->matkhau = $password;

		}
	}
	

	if (strlen($sdt) > 0 && strlen($matkhau) >0){
			
		$mangnguoidung = array();
		$query = "SELECT * FROM nguoidung WHERE FIND_IN_SET('$sdt',sdt) AND FIND_IN_SET('$matkhau', matkhau)";
		$data = mysqli_query($con, $query);
		if ($data){
			while($row = mysqli_fetch_assoc($data)){
				array_push($mangnguoidung, new Nguoidung(
								$row['ID']
								,$row['tennd']
								,$row['sdt']
								,$row['cmt']
								,$row['ngaysinh']
								,$row['gioitinh']
							
								,$row['matkhau']));
			}
			if(count($mangnguoidung) >0){
				echo json_encode($mangnguoidung);

			}else{
				echo "Fail";
			}
		}
	} else{
		echo "Null";
	}
?>