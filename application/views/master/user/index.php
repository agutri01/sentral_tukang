<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">List User</h3>
            </div>
            <div class="box-body">
                <?= $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered table-striped tabel-data">
                    <thead>
                        <tr>
                            <th class="text-center" width="40px">No</th>
                            <th class="text-center" width="40px">Nama</th>
                            <th class="text-center" width="40px">Email</th>
                            <th class="text-center" width="40px">Alamat</th>
                            <th class="text-center" width="40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $d) { ?>
                            <tr>
                                <td class="text-center"><?= $no . '.' ?></td>
                                <td><?= $d['nama_user'] ?></td>
                                <td><?= $d['email'] ?></td>
                                <td><?= $d['alamat'] ?></td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" onclick="edit('<?= $d['kode_user'] ?>','edit')"><i class="icon-pencil7 text-green" data-toggle="tooltip" data-original-title="Edit Data"></i></a>
                                    <a href="javascript:void(0)" onclick="hapus('<?= $d['kode_user'] ?>','hapus')"><i class="icon-trash text-red" data-toggle="tooltip" data-original-title="Hapus Data"></i></a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="tampil_modal"></div>
<script>
    function edit(kode, jenis) {
        datanya = "&kode=" + kode + "&jenis=" + jenis;
        $.ajax({
            url: "<?= site_url('backend/master/users/show') ?>",
            type: "post",
            data: datanya,
            success: function(ajaxData) {
                $("#tampil_modal").html(ajaxData);
                $("#modal_edit").modal('show');
            }
        });
    }

    function hapus(kode, jenis) {
        datanya = "&kode=" + kode + "&jenis=" + jenis;
        $.ajax({
            url: "<?= site_url('backend/master/users/show') ?>",
            type: "post",
            data: datanya,
            success: function(ajaxData) {
                $("#tampil_modal").html(ajaxData);
                $("#modal_hapus").modal('show');
            }
        });
    }
</script>