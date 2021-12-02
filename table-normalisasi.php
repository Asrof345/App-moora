<div class="row mt">

    <div class="col-lg-12">

        <div class="content-panel">

        <span style="float: left; margin: 2rem 0; font-size: 1.5rem; font-weight: bold;">Tabel Normalisasi </span>

            <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">

                    <thead>

                        <tr>
    
                            <th>No</th>

                            <th>Lokasi</th>

                            <th>J1</th>

                            <th>J2</th>

                            <th>J3</th>

                            <th>J4</th>

                            <th>J5</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                            include "config/koneksi.php";
                            $no = 1 ;

                            $sql = mysqli_query($con, "SELECT * FROM tbl_normalisasi");

                            while ($r = mysqli_fetch_array($sql)){

                                $lokasi         = $r['lokasi'];

                                $j1             = $r['j1'];

                                $j2             = $r['j2']; 

                                $j3             = $r['j3'];

                                $j4             = $r['j4'];

                                $j5             = $r['j5'];

                        ?>

                        <tr>

                            <td> <?php echo $no++; ?> </td>

                            <td> <?php echo $lokasi; ?> </td>

                            <td> 

                                <?php 

                                    echo $j1; 

                                ?> 

                            </td>

                            <td class="numeric">

                                <?php 

                                    echo $j2;

                                ?> 

                            </td>

                            <td class="numeric">

                                <?php 

                                    echo $j3; 

                                ?> 

                            </td>

                            <td class="numeric">

                                <?php 

                                    echo $j4; 

                                ?> 

                            </td>

                            <td class="numeric">

                                <?php 

                                    echo $j5; 

                                ?> 

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