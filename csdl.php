<?php
        //2.Kết nối CSDL
            $servername = "localhost";
            $username = "root";
            $passworddb = "";
            $db = "tkw2btl";
            $conn = mysqli_connect($servername, $username, $passworddb, $db);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    //chứa một dòng kết quả
                        
                }
            }