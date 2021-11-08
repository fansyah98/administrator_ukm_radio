<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <ol class="breadcrumb btn-success ">
        <li><a href="<?= site_url('user/eprotd') ?>"> <i class="fa fa-file text-blue"> </i> Export Pdf</a></li>
    </ol>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $b ?></h1>
        <a href="<?= site_url('user/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah user</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                    <thead>
                        <tr class="text-center ">
                            <th>no</th>
                            <th>name </th>
                            <th>username</th>
                            <th>alamat</th>
                            <th>level</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>no</th>
                            <th>name </th>
                            <th>username</th>
                            <th>alamat</th>
                            <th>level</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $sayangwidad => $data) { ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data->name ?> </td>
                                <td><?= $data->username ?> </td>
                                <td><?= $data->address ?> </td>
                                <td><?= $data->nama ?> </td>
                                <td class="text-center">
                                    <a href="<?=site_url('user/del/'. $data->id_user)?>" class="btn btn-success btn-sm  btn-shadow" onclick="return confirm('Yakin data mau dihapus !!! ')"><i class="fa fa-trash"></i></a>
                                    <a href="" class="btn btn-danger btn-sm  btn-shadow"><i class="fa fa-pencil-alt"></i></a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->