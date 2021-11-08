<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <ol class="breadcrumb btn-success ">
        <li><a href="<?= site_url('user') ?>"> <i class="fa fa-file text-blue"> </i> Data Anggota</a></li>
    </ol>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> </h6>
        </div>
        <div class="card-body col-md-8 ">
            <form action="<?= site_url('user/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control form-control-user" placeholder="id" value="">
                    <input type="text" name="nrp" class="form-control form-control-user" placeholder="nrp" value="" required>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-user" placeholder="nama lengkap" value="" required>
                </div>
    
                <div class="form-group">
                    <input type="text" name="usrname" class="form-control form-control-user" placeholder="username" value="" required>
                </div>

            

                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" value="" required>
                </div>

                <div class="form-group">
                    <input type="text" name="alamat" class="form-control form-control-user" placeholder="alamat" value="" required>
                </div>


                <div class="form-group">
                    <input type="radio" name="status"  placeholder="level" value="" required> admin
                    <input type="radio" name="status"  placeholder="level" value="" required> staff admin
                    <input type="radio" name="status"  placeholder="level" value="" required> admin barang
                </div>
                <div class=" form-group">
                    <button class="btn btn-success btn-sm" name="" type="submit"><i class="fa fa-paper-plane"></i> Input data </button>
                    <button class="btn btn-warning btn-sm" name="reset" type="reset"><i class="fa fa-undo"></i> Reset data </button>
                </div>
                

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->    