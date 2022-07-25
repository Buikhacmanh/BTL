<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dangnhap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            function kiemTraDuLieu($dulieu){
                $dulieu = trim($dulieu);
                $dulieu = stripslashes($dulieu);
                $dulieu = htmlspecialchars($dulieu);
                return $dulieu;
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $kiemtraFlag = true;
                $Ten = $SDT = $MatKhau = $NhapLai = '';
                if (empty($_POST['Ten'])){
                    $kiemtraFlag = false;
                }
                else {
                    $Ten = kiemTraDuLieu($_POST['Ten']);
                }
                if (empty($_POST['SDT'])){
                    $kiemtraFlag = false;
                }
                else {
                    $SDT = kiemTraDuLieu($_POST['SDT']);
                }
                if (empty($_POST['MatKhau'])){
                    $kiemtraFlag = false;
                }
                else {
                    $MatKhau = kiemTraDuLieu($_POST['MatKhau']);
                }
                if (empty($_POST['NhapLai'])){
                    $kiemtraFlag = false;
                }
                else {
                    $NhapLai = kiemTraDuLieu($_POST['NhapLai']);
                    if ($MatKhau != $NhapLai){
                        $kiemtraFlag = false;
                    }
                }
                $servername = "localhost";
                $username = "root";
                $passworddb = "";
                $db = "tkw2btl";

                $conn = mysqli_connect($servername, $username, $passworddb, $db);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                //3.Viết truy vấn thêm
                $sql = "INSERT INTO dangky (Ten, SDT, MatKhau, NhapLai) VALUES('" . $Ten . "', '" . $SDT . "', '" . $MatKhau . "', '" . $NhapLai . "')";
                //echo $sql;
                //4.Thực hiện truy vấn
                if (mysqli_query($conn, $sql)) {
                    //Nếu thêm sản phẩm thành công chuyển đến trang quantri.php
                    //5.Hiển thị kết quả
                    header("Location: dangnhapp.php");//Chuyển đến trang quantri.php
                }
                
                //6.Đóng kết nối
                mysqli_close($conn);
            }
        ?>
<div class="login-box">
  		    <h2>Đăng Ký</h2>
            <form action="dangkyy.php" method="POST">
                <link rel="stylesheet" href="tuan1.css">
                    <div class="user-box">
                        <input type="text" name="Ten" required="">
                        <label>Tên Đăng Kí</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="SDT" required="">
                        <label>Số điện thoại</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="MatKhau" required="">
                        <label>Mật Khẩu</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="NhapLai" required="">
                        <label>Nhập Lại mật Khẩu</label>
                    </div>
                    <div class="so1">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <button class="button1">Đăng Kí</button>
                        </a>
                    </div>
            </form>
        </div>
</body>
</html>