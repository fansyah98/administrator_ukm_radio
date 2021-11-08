<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= site_url('anggota/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah data anggota</a>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $b ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                    <thead>
                        <tr class="text-center ">
                            <th>no</th>
                            <th>nrp </th>
                            <th>nama</th>
                            <th>email</th>
                            <th>jabatan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>no</th>
                            <th>nrp </th>
                            <th>nama</th>
                            <th>email</th>
                            <th>jabatan</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $sayang => $data) { ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data->nrp ?> </td>
                                <td><?= $data->nama  ?> </td>
                                <td><?= $data->email ?> </td>
                                <td><?= $data->jabatan ?> </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#data-anggota" id="anggota" data-id="<?= $data->id_anggota ?>" data-nama="<?= $data->nama ?>" data-nrp="<?= $data->nrp ?>" data-email="<?= $data->email ?>" data-jabatan="<?= $data->jabatan ?>" data-jk="<?= $data->JK ?>" data-nia="<?= $data->nia ?>" data-status="<?= $data->status ?>">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    <a href="<?= site_url('anggota/edit/' . $data->id_anggota) ?>" class="btn btn-success btn-sm"> <i class="fa fa-pencil-alt  "> </i></a>
                                    <a href="<?= site_url('anggota/delete/' . $data->id_anggota) ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin Hapus data !!!')"> <i class="fa fa-trash "> </i></a>
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

<div class="modal fade" id="data-anggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="data-anggota">Detail Data anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="3">
                    <tr>
                        <th>ID Anggota </th>
                        <td id="id"> </td>
                    </tr>
                    <tr>
                        <th> Nomor Registrasi Pendaftaran (NRP) </th>
                        <td id="nrp"> </td>
                    </tr>
                    <tr>
                        <th> Nomor Induk Anggota (NIA) </th>
                        <td id="nia"> </td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap </th>
                        <td id="nama"> </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin </th>
                        <td id="jk"> </td>
                    </tr>
                    <tr>
                        <th> Email </th>
                        <td id="email"> </td>
                    </tr>
                    <tr>
                        <th> Jabatan </th>
                        <td id="jabatan"> </td>
                    </tr>
                    <tr>
                        <th> Status Anggota </th>
                        <td id="status"> </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#anggota', function() {

            var id = $(this).data('id');
            var nia = $(this).data('nia');
            var nama = $(this).data('nama');
            var jk = $(this).data('jk');
            var jabatan = $(this).data('jabatan');
            var nrp = $(this).data('nrp');
            var id = $(this).data('id');
            var email = $(this).data('email');
            var status = $(this).data('status');

            $('#id').text(id);
            $('#nia').text(nia);
            $('#jabatan').text(jabatan);
            $('#nama').text(nama);
            $('#nrp').text(nrp);
            $('#jk').text(jk == 1 ? 'Laki Laki' : 'Perempuan');
            $('#id').text(id);
            $('#email').text(email);
            $('#status').text(status == 1 ? 'masih aktif' : 'tidak aktif');

        })
    })
</script>