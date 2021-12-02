        <div class="row">

              <div class="col-md-4 col-sm-4 mb">

                <div class="grey-panel pn donut-chart">

                  <div class="grey-header">

                    <h5>Data Kriteria</h5>

                  </div>

                  <?php

                    include "config/koneksi.php" ;  

                    $query = mysqli_query($con, "SELECT * FROM tbl_kriteria");

                    $kriteria_count = mysqli_num_rows($query);

                  ?>

                  <span style="font-size: 8rem; color : ##797979"> <?php echo $kriteria_count;?> </span>

                    <h3><a href="data-kriteria.php" class="btn btn-primary">View data</a></h3>



                </div>

                <!-- /grey-panel -->

              </div>

              <!-- /col-md-4-->

              <div class="col-md-4 col-sm-4 mb">

                <div class="darkblue-panel pn">

                  <div class="darkblue-header">

                    <h5>Data Alternatif</h5>

                  </div>

                  <?php

                    $query2 = mysqli_query($con, "SELECT * FROM tbl_data_alternatif");

                    $alter_count = mysqli_num_rows($query2);

                  ?>

                  <span style="font-size: 8rem; color : #fff"> <?php echo $alter_count;?> </span>

                    <h3><a href="data-alternatif.php" class="btn btn-primary">View data</a></h3>

                </div>

                <!--  /darkblue panel -->

              </div>

              <!-- /col-md-4 -->

              <div class="col-md-4 col-sm-4 mb">

                <div class="green-panel pn">

                  <div class="green-header">

                    <h5 style="color: #393e46">Data Petunjuk </h5>

                  </div>

                  <?php

                    $query3 = mysqli_query($con, "SELECT * FROM tbl_nilai_bobot_kriteria");

                    $bobot_count = mysqli_num_rows($query3);

                  ?>

                  <span style="font-size: 8rem;color : #393e46"> <?php echo $bobot_count; ?> </span>

                    <h3><a href="data-bobot-alternatif.php" class="btn btn-primary">View data</a></h3>

                </div>

              </div>

              <!-- /col-md-4 -->

            </div>