<div class="modal fade" id="modal_hapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data</h4>
            </div>
            <?= form_open('backend/master/users/destroy', ['id' => 'Hapus'], ['kode' => $data['kode_user']]) ?>
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data <strong><?= $data['nama_user'] ?></strong> ?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-trash"></i> Hapus</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>