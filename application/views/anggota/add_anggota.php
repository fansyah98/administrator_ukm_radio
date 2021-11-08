<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= site_url('anggota') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo fa-sm text-white-50"></i> Kembali anggota</a>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>
        <div class="card-body col-md-8 ">
            <form action="<?= site_url('anggota/process') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="number" name="id" class="form-control form-control-user" placeholder="id" value="<?= $anggota->id_anggota ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="nrp" class="form-control form-control-user" placeholder="nrp" value="<?= $anggota->nrp ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control form-control-user" placeholder="nama" value="<?= $anggota->nama ?>">
                </div>
                <div class=" form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="email" value="<?= $anggota->email ?>">
                </div>
                <div class="form-group">
                    <input type="jabatan" name="jabatan" class="form-control form-control-user" placeholder="jabatan" value="<?= $anggota->jabatan ?>">
                </div>
                <div class="form-group">
                    <select name="JK" id="" value="<?= $anggota->JK ?>" name="jabatan" class="form-control form-control-user" placeholder="Jenis Kelamin" value="<?= $anggota->JK ?>">
                        <option value="1">Pilih Jenis kelamin</option>
                        <option value="1" <?= $anggota->JK == 1 ? 'selected' : null ?>>laki laki</option>
                        <option value="2" <?= $anggota->JK == 2 ? 'selected' : null ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="status" id="" value="<?= $anggota->status ?>" class="form-control form-control-user" value="<?= $anggota->status ?>">
                        <option value="1">Pilih</option>
                        <option value="1" <?= $anggota->status == 1 ? 'selected' : null ?>>Masih Aktif</option>
                        <option value="2" <?= $anggota->status == 2 ? 'selected' : null ?>>Tidak Aktif</option>
                    </select>
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