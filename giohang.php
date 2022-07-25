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
            session_start();
            //.Viết truy vấn lấy danh sách sản phẩm	
            $sql = "SELECT * from themsp where MaHang = $mahang";
            //.Thực hiện truy vấn
            $result = mysqli_query($conn, $sql);
		?>
        <table>
        <div class="the3">
				<?php
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)){
							//chứa một dòng kết quả
                            $item = [
                                'anh' => $row['HinhAnh'],
                                'mahang' => $row['MaHang'],
                                'tenhang' => $row['TenHang'],
                                'gia' => $row['Gia'],
                            ];
                            $_SESSION[ 'cart'][$mahang] = $item;
                            echo "<pre>";
                            print_r($_SESSION[ 'cart']);
                        }
                    }
             //6.Đóng kết nối
             mysqli_close($conn);
            ?>
        <div>
             <label for="" >
                <thead>
                    <tr>
                        <th>Mã Hàng</th>
                        <th>Tên Hàng</th>
                    </tr>
                </thead>
                <tbody>
                     <tr> 
                        <?php echo $row['TenHang'];?>
                    </tr>
                </tbody>
            </label>
        </div>
    </div>