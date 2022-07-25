<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trangchu</title>
    <style type="text/css">
        *{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-color: #EEEEEE;
		}
        .container{
			width: 100%;
			height: auto;
			background-repeat: no-repeat;
			background-position: top left;
			
		}
        .menu{
			width: 100%;
			height: 150px;
			background-color: #5A60D1;
		}
		.up{
			width: 80%;
			height: 80px;
			margin: 0 auto;

		}
		}
		.up ul{
			list-style: none;
			margin-top: 0px;
			margin-bottom: 0px;
		}
		.up ul li{
			display: inline-block;
			margin-top: -20px;
			
		}
		.up ul li a{
			text-decoration: none;
			font-size: 20px;
			padding: 10px;
			color: #FFFFFF;

		}
		.up ul li a img{
			vertical-align: middle;
			margin-right: 30px;
			margin-bottom: 20px;
			margin-top: 30px;
			margin-left: 0px;
		}
		.up ul li a label{
			color: #ffffff;
		}
		.up ul li a label:hover{
			color: #000099;
		}
        .dow{
			width: 80%;
			height: 50px;
		}
		.search{	
			margin-top: 20px;
			margin-left: 400px;
		}

		.search input[type="text"]{
			border-radius: 5px;
			width: 200px;
		}
        .the1 img{
			border: 1px solid black;
			margin-top: 10px;
			margin-left: 10px;
		}
		.the1{
			display: block;
			float: left;
			font-size: 30px;
			padding: 10px 0px;
			transition-duration: 0.3s;
		}
		.the1:hover{
			transform: scale(1.1);
		}
        .so1{
			width: 70%;
			height: 490px;
			background-color: #ffffff;
			margin-left: 200px;
		}
        .the2{
			display: block;
			float: left;
			width: 650px;
			
		}
		.ttsp{
			width: 650px;
		}
		.the2 div{
			font-size: 20px;
			margin-left: 40px;
			margin-top: 20px;
		}
        .the3{
            font-size: 15px;
            margin-left: 10px;
        }
        .the4{
			margin-left: 140px;
			margin-top: 60px;
		}
		.the4 input{
			width: 200px;
			padding: 10px;
			border-radius: 5px;
			background-color: #FF6600;
			color: #ffffff;
			font-size: 15px;
			margin-left: 10px;
		}
		.tt{
			margin-left: 210px;
			padding: 10px 0px;
		}
		.tt a{
			text-decoration: none;
			font-size: 20px;
			color: black;
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
		.the7{
			padding: 20px;
			text-align: center;
			
		}
		.the7 p{
			display: inline-table;
			padding: 20px;
			font-size: 15px;
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
    <div class="container">
        <div class="menu">
            <div class="up">
				<ul>
					<li class="anh1">
						<a href="">
							<img src="anh/font.jpg" alt="" width="140px" height="130px">
						</a>
					</li>
					<li>
						<a href="trangchu2.php?tukhoa=&timkiem=Tìm+kiếm"><label for="">Trang chủ</label></a>
						<a href="trangdiem.html"><label for="">Sản phẩm</label></a>
						<a href="dichvu.php"><label for="">Dịch vụ</label></a>
						<a href="gioithieu.php"><label for="">Giới thệu</label></a>
						<a href="lienhe.php"><label for="">Liên hệ</label></a>
					</li>
				</ul>
			</div>
			<div class="dow">
				<div class="search">
					<form method="GET" action="trangchu2.php">
						<input type="text" name="tukhoa" value=""/>
						<input type="submit" value="Tìm kiếm" name="timkiem"/>
					</form>
				</div>
			</div>
		</div>
		<?php
            $mahang = $_GET["mahang"];

			$servername = "localhost";
            $username = "root";
            $passworddb = "";
            $db = "tkw2btl";
            $conn = mysqli_connect($servername, $username, $passworddb, $db);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            //.Viết truy vấn lấy danh sách sản phẩm	
            $sql = "SELECT * from themsp where MaHang = $mahang";
            //.Thực hiện truy vấn
            $result = mysqli_query($conn, $sql);
		?>
        <table>
				<div class="tt">
					<a href="">Trang Chủ</a> > <a href="">Sản phẩm khác</a>
				</div>
        <div class="the3">
				<?php
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)){
							//chứa một dòng kết quả
				?>
			<div class = "so1">
                    <div class="the1">
                        <form action="">
                            <img src="anh/<?php echo $row['HinhAnh'];?>" alt="" width="350px" height="450px">
                        </form>
                    </div>
					<div class="the2">
                        <div>
                            Mã sản phẩm: <?php echo $row['MaHang'];?>
                        </div>
                        <div>
                             Tên sản phẩm: <?php echo $row['TenHang'];?>
                        </div>
                        <div>
                            Giá: <?php echo $row['Gia'];?><label for="">đ</label>
                        </div>
                        <div class="ttsp">
                            Thông tin sản phẩm: <?php echo $row['MoTa'];?>
                        </div>
                        <div>
                            Xuất xứ: <?php echo $row['XuatXu'];?><label for=""></label>
                        </div>
                        <div>
                            
                            <label for="">Địa chỉ: </label>
                            <input type="text" name="nhapdiachi" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="the4">
                            <a href="camon.html"><input type="button" value="Mua ngay"></a>
                            <a href="camon.html"><input type="button" value="Thêm vào giỏ hàng"></a>
                        </div>
                    </div>
			</div>
		</div>
            <?php
                }
            }
             //6.Đóng kết nối
             mysqli_close($conn);
            ?>
        </table>
        </div>
	<div>
	<div class="so14">
		<div class="the7">
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