<div class="row mt">

    <div class="col-lg-12">

        <div class="content-panel">

        <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Bobot Jarak Lokasi Dengan Perkantoran</span>

            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">

                    <thead>

                        <tr>

                            <th>No</th>
                            
                            <th>Kode Kriteria</th>

                            <th>Nilai Awal</th>

                            <th>Nilai Akhir</th>

                            <th>Satuan</th>

                            <th>Nilai Bobot</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                            include "config/koneksi.php";

                            $no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_nilai_bobot_kriteria WHERE kode_kriteria='J1' ORDER BY id ASC");

                            while ($r = mysqli_fetch_array($sql)){

                              $kode_kriteria = $r['kode_kriteria'];

                              $nilai_awal    = $r['nilai_awal'];

                              $nilai_akhir   = $r['nilai_akhir'];

                              $satuan        = $r['satuan'];

                              $nilai_bobot   = $r['nilai_bobot'];

                        ?>

                        <tr>

                            <td> <?php echo $no++; ?> </td>

                            <td> <?php echo $kode_kriteria; ?> </td>

                            <td> <?php echo $nilai_awal; ?> </td>

                            <td class="numeric"> <?php echo $nilai_akhir; ?> </td>

                            <td class="numeric"> <?php echo $satuan; ?> </td>

                            <td class="numeric"> <?php echo $nilai_bobot; ?> </td>

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





<div class="row mt">

    <div class="col-lg-12">

        <div class="content-panel">

        <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Bobot Jarak Lokasi Dengan Sekolah/Universitas</span>

            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Kode Kriteria</th>

                            <th>Nilai Awal</th>

                            <th>Nilai Akhir</th>

                            <th>Satuan</th>

                            <th>Nilai Bobot</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                            include "config/koneksi.php";
                            $no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_nilai_bobot_kriteria WHERE kode_kriteria='J2' ORDER BY id ASC");

                            while ($r = mysqli_fetch_array($sql)){

                              $kode_kriteria = $r['kode_kriteria'];

                              $nilai_awal    = $r['nilai_awal'];

                              $nilai_akhir   = $r['nilai_akhir'];

                              $satuan        = $r['satuan'];

                              $nilai_bobot   = $r['nilai_bobot'];

                        ?>

                        <tr>

                            <td> <?php echo $no++; ?> </td>

                            <td> <?php echo $kode_kriteria; ?> </td>

                            <td> <?php echo $nilai_awal; ?> </td>

                            <td class="numeric"> <?php echo $nilai_akhir; ?> </td>

                            <td class="numeric"> <?php echo $satuan; ?> </td>

                            <td class="numeric"> <?php echo $nilai_bobot; ?> </td>

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



<div class="row mt">

    <div class="col-lg-12">

        <div class="content-panel">

        <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Bobot Luas Bangunan</span>

            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">

                    <thead>

                        <tr>

                            <th>No</th>
                            
                            <th>Kode Kriteria</th>

                            <th>Nilai Awal</th>

                            <th class="numeric">Nilai Akhir</th>

                            <th class="numeric">Satuan</th>

                            <th class="numeric">Nilai Bobot</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                            include "config/koneksi.php";

                            $no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_nilai_bobot_kriteria WHERE kode_kriteria='J3' ORDER BY id ASC");

                            while ($r = mysqli_fetch_array($sql)){

                              $kode_kriteria = $r['kode_kriteria'];

                              $nilai_awal    = $r['nilai_awal'];

                              $nilai_akhir   = $r['nilai_akhir'];

                              $satuan        = $r['satuan'];

                              $nilai_bobot   = $r['nilai_bobot'];

                        ?>

                        <tr>

                            <td> <?php echo $no++; ?> </td>

                            <td> <?php echo $kode_kriteria; ?> </td>

                            <td> <?php echo $nilai_awal; ?> </td>

                            <td class="numeric"> <?php echo $nilai_akhir; ?> </td>

                            <td class="numeric"> <?php echo $satuan; ?> </td>

                            <td class="numeric"> <?php echo $nilai_bobot; ?> </td>

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



<div class="row mt">

    <div class="col-lg-12">

        <div class="content-panel">

        <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Bobot Biaya Bangunan </span>

            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Kode Kriteria</th>

                            <th>Nilai Awal</th>

                            <th>Nilai Akhir</th>

                            <th>Satuan</th>

                            <th>Nilai Bobot</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                            include "config/koneksi.php";

                            $no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_nilai_bobot_kriteria WHERE kode_kriteria='J4' ORDER BY id ASC");

                            while ($r = mysqli_fetch_array($sql)){

                              $kode_kriteria = $r['kode_kriteria'];

                              $nilai_awal    = $r['nilai_awal'];

                              $nilai_akhir   = $r['nilai_akhir'];

                              $satuan        = $r['satuan'];

                              $nilai_bobot   = $r['nilai_bobot'];

                        ?>

                        <tr>

                            <td> <?php echo $no++; ?> </td>

                            <td> <?php echo $kode_kriteria; ?> </td>

                            <td> <?php echo $nilai_awal; ?> </td>

                            <td class="numeric"> <?php echo $nilai_akhir; ?> </td>

                            <td class="numeric"> <?php echo $satuan; ?> </td>

                            <td class="numeric"> <?php echo $nilai_bobot; ?> </td>

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



<div class="row mt">

    <div class="col-lg-12">

        <div class="content-panel">

        <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Bobot Kepadatan Penduduk </span>

            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Kode Kriteria</th>

                            <th>Nilai Awal</th>

                            <th>Nilai Akhir</th>

                            <th>Satuan</th>

                            <th>Nilai Bobot</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                            include "config/koneksi.php";
                            $no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_nilai_bobot_kriteria WHERE kode_kriteria='J5' ORDER BY id ASC");

                            while ($r = mysqli_fetch_array($sql)){

                              $kode_kriteria = $r['kode_kriteria'];

                              $nilai_awal    = $r['nilai_awal'];

                              $nilai_akhir   = $r['nilai_akhir'];

                              $satuan        = $r['satuan'];

                              $nilai_bobot   = $r['nilai_bobot'];

                        ?>

                        <tr>

                            <td> <?php echo $no++; ?> </td>

                            <td> <?php echo $kode_kriteria; ?> </td>

                            <td> <?php echo $nilai_awal; ?> </td>

                            <td class="numeric"> <?php echo $nilai_akhir; ?> </td>

                            <td class="numeric"> <?php echo $satuan; ?> </td>

                            <td class="numeric"> <?php echo $nilai_bobot; ?> </td>

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