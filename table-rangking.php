<div class="row mt">

	<div class="col-lg-12">

		<div class="content-panel">

			<span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Rangking </span>

			<span style="float: right; margin: 2rem 0;">

				<a class="btn btn-theme02" href="cetak-laporan.php" target="_blank">

					<i class="fa fa-print"></i> Cetak

				</a>

			</span>

			<section id="unseen">

				<table class="table table-bordered table-striped table-condensed" >

					<thead>

						<tr>

							<th>No</th>

							<th>Lokasi</th>

							<th>Nilai Yi</th>

							<th>Rangking</th>

						</tr>

					</thead>

					<tbody>

						<?php

                            include "config/koneksi.php";

							$no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_ranking ORDER BY nilai_yi desc");

                            $rank = 1 ;

                            while ($r = mysqli_fetch_array($sql)){

                              $lokasi        = $r['lokasi'];

                              $nilai_yi      = $r['nilai_yi'];

                        ?>

						<tr>

							<td> <?php echo $no++; ?> </td>

							<td> <?php echo $lokasi; ?> </td>

							<td>

								<?php echo $nilai_yi; ?>

							</td>

							<td class="numeric">

								<?php echo $rank++; ?>

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