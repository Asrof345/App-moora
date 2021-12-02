<?php

    $generate_id = mysqli_query($con, "SELECT * FROM tbl_data_alternatif");

    while ($r = mysqli_fetch_array($generate_id)){

        $id_alternatif  = $r['id_data_alter'];

        $lokasi         = $r['lokasi'];

        $jarak_kantor   = $r['jarak_kantor'];

        $jarak_sekolah  = $r['jarak_sekolah']; 

        $luas           = $r['luas'];

        $biaya          = $r['biaya'];

        $kepadatan      = $r['kepadatan'];

?>

<div class="modal fade" id="ModalEditAlternatif<?php echo $id_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title" id="myModalLabel">Edit Data Alternatif</h4>

            </div>

            <div class="modal-body">
                <?php include "form-edit-alternatif.php"; ?>

            </div>

        </div>

    </div>

</div>

    <?php } ?>