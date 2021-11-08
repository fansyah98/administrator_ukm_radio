<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= site_url('surat') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo fa-sm text-white-50"></i> data surat</a>
            </div>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>
        <div class="card-body col-md-8 ">
            <form action="<?= site_url('surat/process') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="id" class="form-control form-control-user" placeholder="id" value="<?= $surat->id_surat ?>" readonly>
                </div>

                <div class="form-group">
                    <input type="text" name="nama_surat" class="form-control form-control-user" placeholder="nama surat (judul)" value="<?= $surat->nama_surat ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="perihal" class="form-control form-control-user" placeholder="Perihal surat" value="<?= $surat->perihal ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="desposisi" class="form-control form-control-user" placeholder="Jabatan (desposisi)" value="<?= $surat->Desposisi ?>">
                </div>
                <div class="form-group">
                    <input type="date" name="tgl_masuk" class="form-control form-control-user" placeholder="Tanggal masuk surat" value="<?= $surat->tgl_masuk ?>">
                </div>


                <div class=" form-group">
                    <button class="btn btn-success btn-sm" name="<?= $page ?>" type="submit"><i class="fa fa-paper-plane"></i> Input data </button>
                    <button class="btn btn-warning btn-sm" name="reset" type="reset"><i class="fa fa-undo"></i> Reset data </button>
                </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->