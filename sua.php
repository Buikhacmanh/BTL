<style type="text/css">
    .mota textarea{
        width: 550px;
        height: 200px;
        
    }
    *{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-color: #EEEEEE;
		}
        .so2{
            display: block;
            background-color: #EEEEEE;
            width: 800px;
            height: auto;
            margin-left: 100px;
            margin-top: 30px;
            padding: 40px 0px;
        }
        #so1{
            display: block;
            width: 100%;
            height: 50px;
            background-color: #006666;
        }
        #so1 h3{
            padding: 15px 10px;
            color: #ffffff;
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
        .so3{
            border: 2px solid black;
            display: block;
            float: left;
            background: #FFFFFF;
            margin-top: 10px;
            margin-left: 60px;
            border-radius: 5px;
        }
        .so3 tr td{
            line-height: 3.5em;
            
        }
        .so3 tr td input{
            background-color: #EEEEEE;
            border-radius: 5px;
        }
        .so3 tr td textarea{
            background-color: #EEEEEE;
            border-radius: 5px;
        }
       .so3 tr td button{
           padding:0px 20px;
           float: right;
           margin-right: 20px;
           margin-top: 20px;
           margin-bottom: 20px;
       }
    </style>
<?php 
    $mahang = $_GET['mahang'];

	$servername = "localhost";
    $username = "root";
    $passworddb = "";
    $db = "tkw2btl";
    $conn = mysqli_connect($servername, $username, $passworddb, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

	$sql = "SELECT * FROM themsp WHERE MaHang = '$mahang' ";

	$query = mysqLi_query($conn, $sql );

	$row = mysqli_fetch_assoc($query);

	if(isset($_POST['sua']))
	{
                $mahang = $_GET["mahang"];
                $tenhang = $_POST['tenhang'];
                $gia = $_POST['gia'];
                $xuatxu = $_POST['xuatxu'];
                $mota = $_POST['mota'];
	        	$sql = "UPDATE themsp SET tenhang = '$tenhang', gia = '$gia', xuatxu = '$xuatxu', mota = '$mota' WHERE mahang = '$mahang'";
		
		if (mysqli_query($conn, $sql)) {
			
			header("Location: admin.php?tukhoa=&timkiem=Tìm+kiếm");
		}
	}
 ?>
        <div id="so1">
			<h3>Admin Nhóm 2</h3>
		</div>
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

            <form action="" method="POST">
                <form action="sua.php" method="POST">
                    <table class="so3">
                        <tr>
                            <td><h2>Sửa sản phẩm</h2></td>
                        </tr>
                        <tr>
                            <td><label>Tên mặt hàng</label></td>
                            <td> <input type="text" name="tenhang" required="" value="<?php echo $row["TenHang"]; ?>"></td>
                        </tr>
                        <tr>
                            <td><label>Giá: </label></td>
                            <td><input type="text" name="gia" required="" value="<?php echo $row["Gia"]; ?>"></td>
                        </tr>
                        <tr>
                            <td> <label>Xuất Xứ: </label></td>
                            <td> <input type="text" name="xuatxu" required="" value="<?php echo $row["XuatXu"]; ?>"></td>
                        </tr>
                        <tr class="mota">
                            <td> <label>Mô Tả: </label></td>
                            <td> <textarea cols="80" name="mota" style="resize: 400"> <?php echo $row['MoTa']?></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button name="sua">sửa</button></td>
                        </tr>
                    </table>
              </form>
            </form>