<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>
        <div class="card-body col-md-8 ">
            <form action="<?= site_url('anggota/process') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control form-control-user" placeholder="id" value="<?= $anggota->id_anggota ?>">
                    <input type="text" name="nrp" class="form-control form-control-user" placeholder="nrp" value="<?= $anggota->nrp ?>" readonly >
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
    