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
        .so5{
			display: grid;
			float: left;
			display: block;
			width: 774px;
		}
		
		.so6 img{
			display: grid;
			text-align: center;
			width: 330px;
			height: 232px;
			margin-bottom: 20px;
		}
        .so3{
			background-color: #FFFFFF;
			width: 25%;
			height: auto;
			display: block;
            float: left;
			margin-top: 20px;
		}
		.so3 div ul{
			list-style: none;
		}
		.so3 div ul li ul{
			display: none;
		}
		.so3 div ul li a{
			text-decoration: none;
			line-height: 3em;
			font-size: 20px;
			color: #000000;
			margin-left: 25px;
		}
		.so4{
			font-size: 25px;
			background-color: #006699;
			width: 100%;
		}
		.so3 ul li:hover{
			background-color: #0066FF;
		}
        .so6{
            background-color: #cccccc;
            width: 950px;
			height: auto;
			margin-left: 410px;
			list-style: none;
            margin-top: 20px;
            
			
        }
        .so6 p{
            padding: 10px;
			font-size: 20px;
        }
        .so1{
            float: left;
            display: block;
            margin-left: 30px;
            margin-top: 30px;

        }
        .so1{
			display: block;
			float: left;
			width: 170px;;
			height: 300px;
			border: 1px solid black;
			transition-duration: 0.3s;
			border-radius: 5px;
		}
		.so1 a{
			text-decoration: none;
		}
		.so1 a:hover{
			color: red;
		}
		.so1 img{
			margin: 10px;
		}
		.so1:hover{
			transform: scale(1.1);
		}
		.the2 img{
			margin-top: 20px;
			margin-left: -20px;
		}
		.the3{
			width: 70%;
			height: auto;
		}
		.boder{
			background color: #006699;
		}
		.boder ul li{
			border-style: solid;
			border-width: 1px;
			border-radius: 5px;
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
		.mua{
			float: right;
			margin-top:15px;
			margin-right:5px;
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
						<a href="trangchu.php?tukhoa=&timkiem=Tìm+kiếm"><label for="">Trang chủ</label></a>
						<a href="trangdiem.html"><label for="">Sản phẩm</label></a>
						<a href="dichvu.php"><label for="">Dịch vụ</label></a>
						<a href="gioithieu.php"><label for="">Giới thệu</label></a>
						<a href="lienhe.php"><label for="">Liên hệ</label></a>
                        <a href="trangchu2.php?tukhoa=&timkiem=Tìm+kiếm"><label for="">Đăng xuất</label></a>
					</li>
				</ul>
			</div>
			<div class="dow">
				<div class="search">
					<form method="GET" action="trangchu.php">
						<input type="text" name="tukhoa" value="" placeholder="Tìm kiếm..."/>
						<input type="submit" value="Tìm kiếm" name="timkiem"/>
					</form>
				</div>
			</div>
            <div class="so3">
                <form action="">
                    <div class="so4">
                        <ul>
                            <li><a href=""></a>Danh Sách SV</li>
                        </ul>
                    </div>
                    <div class="boder">
                        <ul>
                            <li><a href="trangdiem.html">Bùi Khắc Mạnh</a></li>
                            <li><a href="chamsocda.html">NGhuyễn Thế Anh</a></li>
                            <li><a href="nuochoa.html">Lò Tuấn Anh</a></li>
                            <li><a href="trangdiem.html">Lục Phi Khanh</a></li>
                            <li><a href="">Đỗ Khắc Quang</a></li>
                        </ul>
                    </div>
					<div class="the2">
                        <ul>
                            <img src="anh/anh16.jpg" alt="" width="367px" height="370px">
							<img src="anh/anh17.jpg" alt="" width="367px" height="370px">
                        </ul>
                    </div>
                </form>
		    </div>
		</div>
		<?php
			$servername = "localhost";
            $username = "root";
            $passworddb = "";
            $db = "tkw2btl";
            $conn = mysqli_connect($servername, $username, $passworddb, $db);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			if(isset($_GET['timkiem'])){
				$tukhoa = $_GET['tukhoa'];
			}
            //.Viết truy vấn lấy danh sách sản phẩm	
            $sql = "SELECT MaHang, TenHang, Gia, HinhAnh FROM themsp where TenHang like '%" . $tukhoa ."%'";
            //.Thực hiện truy vấn
            $result = mysqli_query($conn, $sql);
		?>
        <table>
        <div class="the3">
				<div class="so6">
					<p>SALE LỚN SỐ LƯỢNG CÓ HẠN</p>
				</div>
				<?php
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)){
							//chứa một dòng kết quả
				?>
			<div class = "so1">
					<img src="anh/<?php echo $row['HinhAnh'];?>" width="150px" height="180px">
					<div>
						<?php echo $row['MaHang'];?>.
						<?php echo $row['TenHang'];?>
					</div>
					<div>
						Giá: <?php echo $row['Gia'];?><label for="">đ</label>
					</div>
					<div>
						<a href="thongtinsanpham.php?mahang=thongtin&mahang=<?php echo $row['MaHang'];?>">Thông tin sản phẩm</a>
					</div>
					<div class="mua">
						<a href="giohang.php?mahang=thongtin&mahang=<?php echo $row['MaHang'];?>">Đặt mua</a>
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
	<div class="so14">
		<div class="the1">
			<p>Chính sách bảo mật</p>
			<p>Quy chế hoạt động</p>
			<p>Chính sách vận chuyển</p>
			<p>Chính sách trả hàng và hoàn tiền</p>
		</div>
		<div class="the2">
		
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