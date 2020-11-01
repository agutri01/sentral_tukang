<div class="modal fade" id="modal_tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <?= form_open('backend/master/users/store', ['id' => 'form_create']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level" required>
                        <option value="">-- Pilih --</option>
                        <option value="1">Admin</option>
                        <option value="2">Dapur</option>
                        <option value="3">Pimpinan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" required>
                        <option value="">-- Pilih --</option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>