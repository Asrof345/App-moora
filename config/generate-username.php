<?php
                    include "config/koneksi.php";  
                    // $username=$_POST['username'];
                    $user = mysqli_query($con, "SELECT username FROM tbl_user LIMIT 1");
                    while ($data = mysqli_fetch_array($user)){
                        $username = $data['username'];
                    }
                  ?>