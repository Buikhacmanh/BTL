
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="dangnhap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dangnhap</title>
</head>
<body>	
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
				$select_query = "SELECT Ten, SDT  FROM dangky WHERE SDT = '". mysqli_real_escape_string($conn, $SDT)  ."' AND MatKhau = '" . mysqli_real_escape_string($conn, $MatKhau) . "'"; 
				if (!$conn){
					die("Connection failed: ". mysqli_connect_error());
				}
				try {
					$result = mysqli_query($conn, $select_query);
					if(mysqli_num_rows($result) > 0){//kiểm tra điều kiện
						$row = mysqli_fetch_assoc($result);//lấy ra 1 dòng kết quả
						$_SESSION['SDT'] = $row['SDT'];//lưu lại biến nếu đủ đk
						header("Location: trangchu.php?tukhoa=&timkiem=Tìm+kiếm");
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
    <div class="login-box">
  		<h2>Đăng nhập</h2>
  	<form action="dangnhapp.php" method="POST">
  		<link rel="stylesheet" href="tuan1.css">
    	<div class="user-box">
			<input type="text" name="SDT" required="">
			<label>Số điện thoại</label>
    	</div>
    	<div class="user-box">
      		<input type="password" name="MatKhau" required="">
      		<label>Mật Khẩu</label>
    	</div>
    	<div class="">
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
				<button class="button1">Đăng Nhập</button>
            </a>
        </div>
  </form>
</div>
</body>
</html>