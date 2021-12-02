<div class="form-panel">
    <form class="form-horizontal style-form" action="add-alternatif-act.php" method="post">
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Lokasi</label>
            <div class="col-sm-9">
                <input type="text" name="location" class="form-control" placeholder="Lokasi" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Jarak Kantor (Meter)</label>
            <div class="col-sm-9">
                <input type="number" name="office-distance" class="form-control" placeholder="Jarak Kantor" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Jarak Sekolah (Meter)</label>
            <div class="col-sm-9">
                <input type="number" name="sch-distance" class="form-control" placeholder="Jarak Sekolah" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Luas (M<sup>2</sup>)</label>
            <div class="col-sm-9">
                <input type="number" name="large" class="form-control" placeholder="Luas" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Biaya (Juta)</label>
            <div class="col-sm-9">
                <input type="number" name="cost" class="form-control" placeholder="Biaya" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 col-sm-3 control-label">Kepadatan (Jiwa/Km<sup>2</sup>)</label>
            <div class="col-sm-9">
                <input type="number" name="intensiveness" class="form-control" placeholder="Kepadatan" />
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
