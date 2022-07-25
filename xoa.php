
<?php
    $mahang = $_GET["mahang"];
    $servername = "localhost";
    $username = "root";
    $passworddb = "";
    $db = "tkw2btl";
    $conn = mysqli_connect($servername, $username, $passworddb, $db);
    $sql = "DELETE from themsp where MaHang = $mahang";
    $sp = $conn->query($sql);
    if ($sp==true){
    header ("Location: admin.php?tukhoa=&timkiem=Tìm+kiếm");
    }
?>