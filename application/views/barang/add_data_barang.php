<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= site_url('barang') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-undo fa-sm text-white-50"></i> data barang</a>
            </div>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>
        <div class="card-body col-md-8 ">
            <form action="<?= site_url('barang/process') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control form-control-user" placeholder="id" value="<?= $barang->id_barang ?>">
                    <input type="text" name="barcode" class="form-control form-control-user" placeholder="barcode" value="<?php echo $barang->barcode ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama barang" value="<?php echo $barang->nama ?> " required>
                </div>
                <div class=" form-group">
                    <input type="number" name="jumlah" class="form-control form-control-user" placeholder="Jumlah" value="<?php echo $barang->jumlah ?>" required>
                </div>

                <div class="form-group">
                    <input type="text" name="kondisi" class="form-control form-control-user" value="<?php echo $barang->kondisi ?>" required>
                </div>

                <div class="form-group">
                    <input type="date" name="date" class="form-control form-control-user" placeholder="tgl input" value="<?php echo $barang->tgl_input ?>" required>
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