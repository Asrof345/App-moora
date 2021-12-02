
<div class="form-panel">
    <form class="form-horizontal style-form" action="edit-kriteria-act.php" method="get">
        <input type="hidden" name="kriteria-id" value="<?php echo $id_kriteria;?>">
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Kode Kriteria</label>
            <div class="col-sm-9">
                <input 
                    type="text" 
                    name="kriteria-code"
                    class="form-control" 
                    placeholder="Kode Kriteria" 
                    value="<?php echo $kode_kriteria;?>"
                    readonly 
                />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Nama Kriteria</label>
            <div class="col-sm-9">
                <input
                    type="text" 
                    name="kriteria-name" 
                    class="form-control" 
                    placeholder="Nama Kriteria" 
                    value="<?php echo $nama_kriteria;?>"
                />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Nilai (%)</label>
            <div class="col-sm-9">
                <input 
                    type="number" 
                    name="score" 
                    class="form-control"
                    placeholder="Nilai"
                    min=0
                    id="nilaiInput<?php echo $kode_kriteria;?>"
                    value="<?php echo $nilai;?>"
                    oninput="sisaFunction()"
                />
            <?php include "config/score-term.php"; ?>
             <p id="infoMax<?php echo $kode_kriteria;?>" style="color: red"></p>
            </div>
        </div>
        <!-- <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Ketentuan</label>
            <div class="col-sm-9">
                <div class="radio">
                    <label>
                    <input type="radio" name="fixity" id="optionsRadios1" value="Benefit" checked>
                        Benefit
                    </label>
                </div>
                <div class="radio">
                    <label>
                    <input type="radio" name="fixity" id="optionsRadios1" value="Cost">
                        Cost
                    </label>
                </div>
            </div>
        </div> -->
        <input type="hidden" id="sisa<?php echo $kode_kriteria;?>" value="<?php echo $sisa;?>">
        <input type="hidden" id="fixedInput<?php echo $kode_kriteria;?>" value="<?php echo $nilai;?>">
        <input type="hidden" id="jumlahInput<?php echo $kode_kriteria;?>" value="0">
        <input type="hidden" id="fixedTotal<?php echo $kode_kriteria;?>" value="<?php echo $nilai_kriteria; ?>">
        <input type="hidden" id="total<?php echo $kode_kriteria;?>" value="<?php echo $nilai_kriteria; ?>">
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="btnSimpan<?php echo $kode_kriteria;?>">Simpan</button>
        </div>
    </form>
</div>