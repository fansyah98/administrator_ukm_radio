<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= site_url('role/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah role</a>
            </div>
        </div>
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
                            <th class="text-center">no</th>
                            <th class="text-center">nama</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>no</th>
                            <th>nama</th>
                            <th>actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($row->result() as $sayangwidad => $data) { ?>
                                <td><?= $no++ ?> </td>
                                <td><?= $data->nama ?> </td>
                                <td class="text-center">
                                    <a href="<?= site_url('role/edit/' . $data->role_id) ?>" class="btn btn-info btn-xs "><i class="fa fa-pencil-alt"></i></a>
                                    <a href="<?= site_url('role/del/' . $data->role_id) ?>" onclick="return confirm('Yakin hapus data !!')" class="btn btn-primary btn-xs "><i class="fa fa-trash-alt"></i></a>
                                </td>
                        </tr>
                    </tbody>
                <?php }  ?>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->