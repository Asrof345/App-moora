<div class="row mb">

          <!-- page start-->

          <div class="content-panel">

            <div class="adv-table">

              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

                <thead>

                  <tr>

                    <th> No </th>

                    <th> Kode Kriteria </th>

                    <th> Nama Kriteria </th>

                    <th> Nilai (%) </th>

                    <th> Ketentuan </th>

                    <th> Action </th>

                  </tr>

                </thead>

                <tbody>

                  <?php

                    include "config/koneksi.php";
                    $no = 1 ;

                    $sql = mysqli_query($con, "SELECT * FROM tbl_kriteria ORDER BY id ASC");

                    while ($r = mysqli_fetch_array($sql)){

                      $id_kriteria   = $r['id'];

                      $kode_kriteria = $r['kode_kriteria'];

                      $nama_kriteria = $r['nama_kriteria'];

                      $nilai         = $r['nilai'];

                      $ketentuan     = $r['ketentuan'];

                  ?>

                  <tr>
                    
                    <td> <?php echo $no++ ; ?> </td>
                    <td> <?php echo $kode_kriteria ; ?></td>

                    <td> <?php echo $nama_kriteria ; ?></td>

                    <td> <?php echo $nilai ; ?></td>

                    <td> <?php echo $ketentuan ; ?></td>

                    <td class="center">

                        <button data-toggle="modal" data-target="#ModalEditKriteria<?php echo $id_kriteria;?>" class="btn btn-theme btn-sm"><i class="fa fa-edit"></i></button>

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