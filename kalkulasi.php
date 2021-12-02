<?php

    error_reporting(0);

    include "config/koneksi.php"; 



    $sql = mysqli_query($con, "SELECT * FROM tbl_normalisasi");

    while ($r = mysqli_fetch_array($sql)){

        $J1 += pow($r['j1'],2);

        $J2 += pow($r['j2'],2);

        $J3 += pow($r['j3'],2);

        $J4 += pow($r['j4'],2);

        $J5 += pow($r['j5'],2);



        $xJ1 = sqrt($J1);

        $xJ2 = sqrt($J2);

        $xJ3 = sqrt($J3);

        $xJ4 = sqrt($J4);

        $xJ5 = sqrt($J5);



    }

?>

<div class="row mt">

	<div class="col-lg-12">

		<div class="content-panel">

			<span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Max dan Min </span>

			<section id="unseen">

				<table class="table table-bordered table-striped table-condensed">

					<thead>

						<tr>

                            <th>No</th>

							<th>Alternatif</th>

							<th>Max (J1+J2+J3+J5)</th>

							<th>Min (J4) </th>

							<th>Yi (Max-Min)</th>

						</tr>

					</thead>

					<tbody>

						<?php


                            $no = 1 ;
                            $query_kriteriaJ1 = mysqli_query($con, "SELECT * FROM tbl_kriteria WHERE kode_kriteria='J1'");

                            $kriteriaJ1 = mysqli_fetch_array($query_kriteriaJ1) ;

                            $kJ1        = $kriteriaJ1['nilai']/100;



                            $query_kriteriaJ2 = mysqli_query($con, "SELECT * FROM tbl_kriteria WHERE kode_kriteria='J2'");

                            $kriteriaJ2 = mysqli_fetch_array($query_kriteriaJ2) ;

                            $kJ2        = $kriteriaJ2['nilai']/100;



                            $query_kriteriaJ3 = mysqli_query($con, "SELECT * FROM tbl_kriteria WHERE kode_kriteria='J3'");

                            $kriteriaJ3 = mysqli_fetch_array($query_kriteriaJ3) ;

                            $kJ3        = $kriteriaJ3['nilai']/100;



                            $query_kriteriaJ4 = mysqli_query($con, "SELECT * FROM tbl_kriteria WHERE kode_kriteria='J4'");

                            $kriteriaJ4 = mysqli_fetch_array($query_kriteriaJ4) ;

                            $kJ4        = $kriteriaJ4['nilai']/100;



                            $query_kriteriaJ5 = mysqli_query($con, "SELECT * FROM tbl_kriteria WHERE kode_kriteria='J5'");

                            $kriteriaJ5 = mysqli_fetch_array($query_kriteriaJ5) ;

                            $kJ5        = $kriteriaJ5['nilai']/100;



                            $sql2 = mysqli_query($con, "SELECT * FROM tbl_normalisasi");

                            while ($t = mysqli_fetch_array($sql2)){

                                    $lokasi = $t['lokasi'];

                                    $AJ1 = $t['j1']/$xJ1*$kJ1;

                                    $AJ2 = $t['j2']/$xJ2*$kJ2;

                                    $AJ3 = $t['j3']/$xJ3*$kJ3;

                                    $AJ4 = $t['j4']/$xJ4*$kJ4;

                                    $AJ5 = $t['j5']/$xJ5*$kJ5;

                                    

                                    $Jmax = $AJ1+$AJ2+$AJ3+$AJ5 ;

                                    $Jmin = $AJ4 ;



                                    $Yi = $Jmax - $Jmin ;

                            ?>

						<tr>
    
                            <td> <?php echo $no++; ?> </td>

							<td> <?php echo $lokasi; ?> </td>

							<td>

								<?php echo round($Jmax,3); ?>

							</td>

							<td class="numeric">

								<?php echo round($Jmin,3); ?>

							</td>

							<td class="numeric">

								<?php echo round($Yi,3); ?>

							</td>

						</tr>

						<?php } ?>

					</tbody>

				</table>

			</section>

		</div>

		<!-- /content-panel -->

	</div>

	<!-- /col-lg-4 -->

</div>

<!-- /row -->

<div style="max-height:10px; overflow: hidden;"> 

        <?php



            $location = 0;

            $yi_value = 0;

            

            $sql3 = mysqli_query($con, "SELECT * FROM tbl_normalisasi");

            $count_data = mysqli_num_rows($sql3);

            while ($t = mysqli_fetch_array($sql3)){

            $lokasi = $t['lokasi'];

            $AJ1 = $t['j1']/$xJ1*0.25;

            $AJ2 = $t['j2']/$xJ2*0.20;

            $AJ3 = $t['j3']/$xJ3*0.20;

            $AJ4 = $t['j4']/$xJ4*0.20;

            $AJ5 = $t['j5']/$xJ5*0.15;

                                    

            $Jmax = $AJ1+$AJ2+$AJ3+$AJ5 ;

            $Jmin = $AJ4 ;



            $Yi = $Jmax - $Jmin ;

        ?>

    

        <form action="add-rank-act.php" method="post">

            <input type="hidden" name="lokasi<?php echo $location++; ?>" value="<?php echo $lokasi; ?>">

            <input type="hidden" name="nilai_yi<?php echo $yi_value++; ?>" value="<?php echo round($Yi,3); ?>">

        <?php } ?>

            <input type="hidden" name="count-data" value=<?php echo $count_data; ?>>

            </div>

            <div class="col" style="margin-top:2rem;"> 

                <button type="submit" class="btn btn-success  btn-lg btn-block">

                    Konfirmasi Untuk Perangkingan

                </button>

            </div>

        </form>



