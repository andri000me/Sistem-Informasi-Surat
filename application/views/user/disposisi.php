<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambahkan Disposisi</a>
            </div>
    </div>



</div>

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('user/disposisi'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_" name="surat_dari" placeholder="Surat Dari">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="no_" name="no_surat" placeholder="Nomor Surat">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tgl_surat" placeholder="Tanggal Surat">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tujuan" name="tgl_terima" placeholder="Tanggal Terima">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sifat" name="sifat" placeholder="Sifat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="teruskan" name="teruskan" placeholder="Teruskan kepada">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div> 