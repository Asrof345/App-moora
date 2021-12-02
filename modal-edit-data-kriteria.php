<?php
    $generate_id = mysqli_query($con, "SELECT * FROM tbl_kriteria");
    while ($r = mysqli_fetch_array($generate_id)){
        $nilai_kriteria = 0 ;
        $id_kriteria = $r['id'];
        $kode_kriteria = $r['kode_kriteria'];
        $nama_kriteria = $r['nama_kriteria'];
        $nilai         = $r['nilai'];
        $ketentuan     = $r['ketentuan'];
?>

<div class="modal fade" id="ModalEditKriteria<?php echo $id_kriteria;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Kriteria</h4>
            </div>
            <div class="modal-body">
                <?php include "form-edit-kriteria.php"; ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>