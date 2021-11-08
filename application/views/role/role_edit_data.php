<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
           <a href="<?=site_url('role')?>" class="btn btn-success btn-sm" ><i class="fa fa-undo"></i></a>
        </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>
        <div class="card-body col-md-8 ">
            <form action="<?= site_url('role/process') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="id" class="form-control form-control-user" placeholder="id" value="<?= $role->role_id ?>" readonly>
                </div>
              
                <div class="form-group">
                    <input type="text" name="nama" class="form-control form-control-user" placeholder="nama" value="<?= $role->nama ?>">
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
    