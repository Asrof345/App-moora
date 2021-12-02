<?php
    $generate_id = mysqli_query($con, "SELECT * FROM tbl_data_alternatif");
    while ($r = mysqli_fetch_array($generate_id)){
        $id_alternatif  = $r['id_data_alter'];
?>
<div class="modal fade" id="ModalDeleteAlternatif<?php echo $id_alternatif; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Alternatif</h4>
            </div>
            <div class="modal-body">
                <form action="delete-alternatif-act.php">
                    <input type="hidden" name="id_alternatif" value="<?php echo $id_alternatif; ?>">
                    <strong><h4> Anda yakin ingin menghapus data ini ? </h4></strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-theme04">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
    <?php } ?>