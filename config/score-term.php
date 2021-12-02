<span style="color:red">
	<?php
                include "koneksi.php";
                $max = 100;
                $sql = mysqli_query($con, "SELECT * FROM tbl_kriteria");
                while ($r = mysqli_fetch_array($sql)){
                $nilai_kriteria += $r['nilai'];
                }
        ?>
	<?php
                $sisa = $max - $nilai_kriteria ;
                echo "max = 100 ; total = $nilai_kriteria ; sisa = $sisa <br/>";
        ?>
        <?php
                if($sisa <= 0){
                        echo "Total nilai untuk tabel ini sudah max <br/> 
                                anda tidak dapat menambahkan nilai lagi<br/>
                                <span style=color:blue>Tips : Kurangi nilai pada kolom lain</span>";
                }
        ?>
</span>