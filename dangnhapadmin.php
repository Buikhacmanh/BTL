<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dangnhapadmin</title>
	<style type="text/css">	
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-color: #006699;

		}
		.so1{
			width: 90%;
			height: 60px;
			background-color: #ffffff;
			margin-left: 5%;
			margin-bottom: 10px;
			margin-top: 10px;
			border-radius: 5px;
		}
		.so1 div{
			
			
		}
		.the1{
			display: block;
			float: left;
			margin-top: 17px;
			font-size: 25px;
			margin-left: 40px;
		}
		.the1 p{

		}
		.the2{
			margin-left: 1000px;
			display: block;
			float: left;
			margin-top: 20px;
		}
		.the2 p a{
			color: red;
		}
		.login{
			display: block;
			margin-left: 550px;
			margin-top: 100px;
			width: 400px;
			height: 300px;
			background-color: #FFFFFF;
			border-radius: 10px;

		}
		.login h2{
			text-align: center;
			padding: 30px 0px;
		}
		.dn_login{
			margin-left: 100px;
		}
		.dn_login div{
			padding: 10px 0px;
		}
		.dn_login_sdt{
			padding: 10px 0px;
		}
		.dn_login_sdt input{
			margin-left: 100px;
			width: 200px;
			height: 30px;
			border-radius: 5px;
			background-color: #EEEEEE;
		}
		.dn_login_button{
			margin-left: 230px;
			margin-top: 20px;
		}
	</style>
</head>
<body>	
	<div class="so1">
		<div class="the1">
			<p>ADMIN</p>
		</div>
		<div class="the2">
			<p><a href="">Bạn cần trợ giúp?</a></p>
		</div>
	</div>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
			$SDT = $MatKhau = '';
			//lấy dữ liệu
			if (!empty($_POST['SDT']) && !empty($_POST['MatKhau'])){
				$SDT = $_POST['SDT'];
				$MatKhau = $_POST['MatKhau'];
				//$select_query = "SELECT ten, sdtorgmail FROM dangky WHERE sdtorgmail = '". $sdtorgmail ."' AND matkhau = '" .$matkhau . "'";
				
				$servername = "localhost";
                $username = "root";
                $passworddb = "";
                $db = "tkw2btl";

                $conn = mysqli_connect($servername, $username, $passworddb, $db);
				$select_query = "SELECT id, Ten, SDT  FROM dangkyadmin WHERE SDT = '". mysqli_real_escape_string($conn, $SDT)  ."' AND MatKhau = '" . mysqli_real_escape_string($conn, $MatKhau) . "'"; 
				if (!$conn){
					die("Connection failed: ". mysqli_connect_error());
				}
				try {
					$result = mysqli_query($conn, $select_query);
					if(mysqli_num_rows($result) > 0){//kiểm tra điều kiện
						$row = mysqli_fetch_assoc($result);//lấy ra 1 dòng kết quả
						$_SESSION['SDT'] = $row['SDT'];//lưu lại biến nếu đủ đk
						header("Location: admin.php?tukhoa=&timkiem=Tìm+kiếm");
					}
					else{

					}
				}
				catch (Exception $e){

				}
				mysqli_close($conn);
			}
		}
	?>
    <div class="login">
  		<h2>LOGIN ADMIN</h2>
		  <form action="dangnhapadmin.php" method="POST">
			<div class="dn_login_sdt">
				<input type="text" name="SDT" required="" placeholder="Số điện thoại">
			</div>
			<div class="dn_login_sdt">
				<input type="password" name="MatKhau" required="" placeholder="Mật khẩu">
			</div>
			<div class="dn_login_button">
				<a href="#">
					<span></span>
					<span></span>
					<button class="button1">Đăng Nhập</button>
				</a>
			</div>
 		 </form>
	</div>
</body>
</html>