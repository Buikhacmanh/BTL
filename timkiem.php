<?php
   if(isset($_GET['tukhoa'])){
        $tukhoa = $_GET[ 'tukhoa'];
   }else{
        $tukhoa;
    }
   $sql_pro = "SELECT FROM themsp WHERE TenHang LIKE '%". $tukhoa. "%'";
   $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h3>Sản phẩm mơi nhất</h3>
                <ul>
                    <?php
                    while($row - mysqli_fetch_array($query_pro)){
                    ?>
                    <tr>
                            <td><img src="anh/<?php echo $row['HinhAnh'];?>" width="100px" height="100px"></td>
							<td><?php echo $row['MaHang'];?></td>
							<td><?php echo $row['TenHang'];?></td>
							<td><?php echo $row['Gia'];?><label for="">đ</label></td>
							<td><a href="xoa.php?mahang=xoa&mahang=<?php echo $row['MaHang'];?>"><label for="">Xóa sản phẩm</label></a></td>
							<td><a href="suaa.php?mahang=xoa&mahang=<?php echo $row['MaHang'];?>"><label for="">Sửa</label></a></td>
                    </tr>
                    <?php
                    ?>
                </ul>