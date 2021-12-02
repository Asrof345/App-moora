<div class="row mb">

          <!-- page start-->

          <div class="content-panel">

            <div class="adv-table">

              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

                <thead>

                  <tr>
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>Jarak Kantor (Meter)</th>
                    <th>Jarak Sekolah (Meter)</th>
                    <th>Luas (M<sup>2</sup>)</th>
                    <th>Biaya(Juta)</th>
                    <th>Kepadatan (Jiwa/Km<sup>2</sup>)</th>
                    <th> Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      include "config/koneksi.php";
                      $no = 1 ;
                      $sql = mysqli_query($con, "SELECT * FROM tbl_data_alternatif ORDER BY id_data_alter ASC");
                      while ($r = mysqli_fetch_array($sql)){
                        $id_alternatif  = $r['id_data_alter'];
                        $lokasi         = $r['lokasi'];
                        $jarak_kantor   = $r['jarak_kantor'];
                        $jarak_sekolah  = $r['jarak_sekolah']; 
                        $luas           = $r['luas'];
                        $biaya          = $r['biaya'];
                        $kepadatan      = $r['kepadatan'];
                    ?>

                  <tr>

                    <td> <?php echo $no++ ; ?> </td>

                    <td> <?php echo $lokasi; ?> </td>

                    <td> <?php echo $jarak_kantor; ?> </td>

                    <td> <?php echo $jarak_sekolah; ?> </td>

                    <td> <?php echo $luas; ?> </td>

                    <td> <?php echo $biaya; ?> </td>

                    <td> <?php echo $kepadatan; ?> </td>

                    <td class="center">

                        <button data-toggle="modal" data-target="#ModalEditAlternatif<?php echo $id_alternatif; ?>" class="btn btn-theme btn-sm"><i class="fa fa-edit"></i></button>

                        <button type="button" data-toggle="modal" data-target="#ModalDeleteAlternatif<?php echo $id_alternatif; ?>" class="btn btn-theme04 btn-sm"><i class="fa fa-trash-o"></i></button>

                    </td>

                  </tr>

                  <?php } ?>
                  
                </tbody>

              </table>

            </div>

          </div>

          <!-- page end-->

        </div>

        <!-- /row -->