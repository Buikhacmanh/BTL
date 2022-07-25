<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style type="text/css">	
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-color: #EEEEEE;
		}
		#so1{
			width: 100%;
			height: 50px;
			background-color: #006666;
			
		}
		#so1 h3{
			font-size: 20px;
			color: #ffffff;
			margin-left: 30px;
			padding: 13px;
			
		}
		#so1 div a{
			color: #ffffff;
		}
		.avata{
			float: right;
			margin-top: -45px;
			margin-right: 80px;
			text-align: center;
			text-decoration: none;
			border: 2px solid black;
			border-radius: 5px;
		}
		.avata img{
			border-radius: 25px;
			vertical-align: middle;
			

		}
		.avata li{
			list-style:none;  
			padding-right:100; 
			display:block; 
			border-style:inset; 
			padding: 0px 10px;
		}
		.avata li a{
			text-decoration: none;
			padding: 0px 3px;
			font-size: 18px;
		}
		.avata li a:hover{
			color: black;
		}
		.avata li ul{
			display:none; 
       		position:absolute; 
		}
		.avata li:hover ul{
			display:block; 
			background: lightblue; 
			height:auto; 
			width:10em; 
		}
		.avata ul li a{
			text-decoration: none;
		}
		.avata1 li:hover{
			background-color: #006699;
		}
		.avata1 li{
			background-color: #006666;
		}
		.container{
			width:350px;
			border-bottom: 20px solid #006666;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			display: block;
			float: left;
			margin-top: 10px;
			margin-left: 10px;
		}
		/*Thiết lập style cho thẻ h2*/
		.container h2{
			color: #fff;
			background: #006666;
			padding: 10px 20px;
			font-size: 20px;
			font-weight: 700;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}

		.container ul{
			position: relative;
			background: #fff;
		}

		.container ul li {
			list-style: none;
			padding: 10px;
			width: 300;
			background: #fff;
			box-shadow: 0 5px 15px rgba(0,0,0,.1);
			transition: transform 0.5s;
		}
		.container ul li a{
			text-decoration: none;
			color: black;
		}
		.container ul li span{
			width: 40px;
			height: 40px;
			text-align: center;
			line-height: 40px;
			background: #006666;
			color: #fff;
			display: inline-block;
			border-radius: 50%;
			margin-right: 40px;
			font-size:16px;
			font-weight: bold;
		}

		.container ul:hover li {
			opacity: 0.2;
		}
		.container ul li:hover{
			transform: scale(1.1);
			z-index: 10;
			background: #006666;
			box-shadow: 0 5px 25px rgba(0,0,0,.2);
			color: #fff;
			opacity: 1;
		}
		.container ul li:hover span {
			background: #fff;
			color: #25bcff;
		}
		.so1 div a{
			text-decoration: none;

		}
		.search{
			margin-left: 60px;
			display: block;
			float: left;
			margin-top: 50px;
		}
		
		.search input{
			border-radius: 5px;
		}
		.ds{
			display: block;
			margin-top: 30px;
			padding: 10px;
			float: right;
			margin-right: 200px;
			width: auto;
		}
		.ds label{
			padding: 10px 20px;
			font-size: 20px;
			border: 2px solid black;
			border-radius: 5px;
			margin-left: 50px;
			height: auto;
			width: 100px;
			display: block;
			float: left;
			text-align: center;
		}
		.ds label:hover{
			background-color: #006666;
			color: #ffffff;
		}
		.so2{
			display: block;
			width: 900px;
			height: auto;
			float: right;
			margin-right: 160px;
			margin-top: 40px;
		}.so3 td{
			width: 200px;
			border: 2px solid black;
  			border-radius: 5px;
			background-color: #ffffff;
		}
		.so3 td a{
			text-decoration: none;
			color: black;
		}
		.so3 td img{
			margin-left: 40px;
		}
		.so3 td a:hover{
			color: red;
		}
		.them td{
			border-radius: 5px;
			text-align: center;
		}
		.them td:hover{
			background-color: #CCCCFF;
		}
		.them td a{
			text-decoration: none;
		}
		.so14{
			display: block;
			float: left;
			width: 1470px;
			height: 400px;
			background-color: #cccccc;
			margin-top: 40px;
			
		}
		.so14 div{
			text-align: center;
		}
		.the1{
			padding: 20px;
			text-align: center;
			
		}
		.the1 p{
			display: inline-table;
			padding: 20px;
			font-size: 15px;
		}
		.the2{
			text-align: center;
			padding: 20px;
		}
		.so15{
			width: 40%;
			margin-left: 30%;	
		}
		.the6{
			padding: 20px;
			text-align: center;
		}

    </style>
</head>
<body>
	
		<?php
			$servername = "localhost";
            $username = "root";
            $passworddb = "";
            $db = "tkw2btl";
            $conn = mysqli_connect($servername, $username, $passworddb, $db);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			if(isset($_GET['tukhoa'])){
				$tukhoa = $_GET[ 'tukhoa'];
		   }else{
				$tukhoa;
			}
            //.Viết truy vấn lấy danh sách sản phẩm	
            $sql = "SELECT MaHang, TenHang, Gia, HinhAnh FROM themsp  where TenHang like '%$tukhoa%'";
			$sql_i="SELECT * FROM dangkyadmin ";
            //.Thực hiện truy vấn
			$result_i = mysqli_query($conn, $sql_i);
            $result = mysqli_query($conn, $sql);
		?>
		<div id="so1">
			<h3>Admin Nhóm 2</h3>
						<?php
							if (mysqli_num_rows($result_i) > 0) {
								while ($rows = mysqli_fetch_assoc($result_i)){
									//chứa một dòng kết quả
						?>
						<div class="avata">
							<li>
								<img src="anh/avata.jpg" alt="" with="35" height="35">
								<a href=""><?php echo $rows['Ten']?></a>
								<ul class="avata1">
									<li><a href="dangnhapadmin.php">Đăng xuất</a></li>
									<li><a href="#">Đổi mật khẩu</a></li>
									<li><a href="#">Thông tin tài khoản</a></li>
								</ul>
							</li>
						</div>
						<?php
							}
						}
					?>
		</div>
    <table>
        <div class="">
            <div class="container">
         		<h2>Chức năng hệ thống</h2>
				<ul>
					<li><a href="admin.php?tukhoa=&timkiem=Tìm+kiếm"><span>1</span> Trang chủ</a></li>
					<li><span>2</span> Quản lý website</li>
					<li><span>3</span> Quản lý giao diện</li>
					<li><span>4</span> Quản lý thư liên hệ</li>
					<li><span>5</span> Quản lý sản phẩm</li>
					<li><span>6</span> Quản lý bài viết</li>
					<li><span>7</span> Quản lý banner</li>
					<li><span>8</span> Quản lý thành viên</li>
				</ul>
	     	</div>
			<div class="search">
					<form method="GET" action="admin.php">
						<input type="text" name="tukhoa" value=""placeholder="search..." />
						<input type="submit" value="Tìm kiếm" name="timkiem"/>
					</form>
			</div>
			<div class="ds">
				<label for="">Tổng</label>
				<label for="">Đã bán</label>
				<label for="">Đang bán</label>
			</div>
			<div class="">
				<table class="so2" border="2">
						<tr>
							<th>Sản Phẩm</th>
							<th>Mã Sản Phẩm</th>
							<th>Tên Mặt Hàng</th>
							<th>Giá</th>
							<th>Tác Vụ</th>
						</tr>
					<?php
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)){
									//chứa một dòng kết quả
						?>
						<tr class="so3"> 
							<td><img src="anh/<?php echo $row['HinhAnh'];?>" width="100px" height="100px"></td>
							<td><?php echo $row['MaHang'];?></td>
							<td><?php echo $row['TenHang'];?></td>
							<td><?php echo $row['Gia'];?><label for="">đ</label></td>
							<td><a href="xoa.php?mahang=<?php echo $row['MaHang'];?>"><label for="">Xóa</label> | </a><a href="sua.php?mahang=<?php echo $row['MaHang'];?>"><label for="">Sửa</label></a></td>
						</tr>
					<?php
						}
					}
					//6.Đóng kết nối
					mysqli_close($conn);
					?>
						<tr class="them">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="themmoii.php"><label for="">Thêm sản phẩm</label></a></td>
						</tr>
				</table>
			</div>
		</div>
		<div class="so14">
			<div class="the1">
				<p>Chính sách bảo mật</p>
				<p>Quy chế hoạt động</p>
				<p>Chính sách vận chuyển</p>
				<p>Chính sách trả hàng và hoàn tiền</p>
			</div>
			<div class="so15">
				<hr size="2px" color="black">
			</div>
			<div class="the6">
				<p>Địa chỉ: KTX trường ĐẠI HỌC ĐẠI NAM - PHỐ XỐM - PHÚ LÃM - HÀ ĐÔNG - HÀ NỘI</p>
				<P>Số điện thoại Donate: 099999999. Email: d**@gmail.com</P>
			</div>
		</div>
</body>
</html>