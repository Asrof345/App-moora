<?php
    
    include "koneksi.php"; //start connection to database

    //take a data from a change-pwd form
    $username = $_POST['username'];
    $old_pwd = $_POST['old-pwd'];
    $new_pwd = $_POST['new-pwd'];
    $new_pwd_confirm = $_POST['new-pwd-confirm'];

    $user = mysqli_query($con, "SELECT * FROM tbl_user WHERE username='$username' AND password='$old_pwd' ");

    $check = mysqli_num_rows($user);
    
    if($check > 0){

        $data = mysqli_fetch_assoc($user);

        if ($new_pwd == $new_pwd_confirm){
           $query_edit_user = "UPDATE tbl_user SET password='$new_pwd' WHERE username='$username' " ;
            
           $edit_user = mysqli_query($con, $query_edit_user) ;

           if($edit_user){
                echo "<script>alert('Bagus, password anda berhasil diubah, selanjutnya gunakan password baru untuk login');window.location.replace('../login.php')</script>";
           } else {
               echo "Error : " . "<br>" . mysqli_error($con);
           }

        } else {
            echo "<script> alert('Maaf, password baru yang dimasukkan tidak sesuai');history.go(-1)</script>" ;
        }
    } else {
        echo"<script>alert('Maaf, username dan password lama tidak sesuai');history.go(-1) </script>" ;
    }
?>