<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="<?= site_url('barang/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah data barang</a>
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
                            <th>no</th>
                            <th>barcode</th>
                            <th>nama barang</th>
                            <th>jumlah</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>no</th>
                            <th>barcode</th>
                            <th>nama barang</th>
                            <th>jumlah</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $sayang => $data) { ?>
                            <tr>
                                <td><?= $no++ ?> </td>
                                <td><?= $data->barcode ?> </td>
                                <td><?= $data->nama  ?> </td>
                                <td><?= $data->jumlah ?> </td>
                                <td>
                                    <a href="<?= site_url('barang/edit/' . $data->id_barang) ?>" class="btn btn-success btn-sm"> <i class="fa fa-pencil-alt  "> </i></a>
                                    <a href="<?= site_url('barang/del/' . $data->id_barang) ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin Hapus data !!!')"> <i class="fa fa-trash "> </i></a>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#data-barang" id="barang" data-id="<?= $data->id_barang ?>" data-barcode="<?= $data->barcode ?>" data-nama="<?= $data->nama ?>" data-jumlah="<?= $data->jumlah ?>" data-tgl_input="<?= $data->tgl_input ?>" data-kondisi="<?= $data->kondisi ?>">
                                        <i class="fa fa-eye"></i>
                                    </button>
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

<!-- Modal -->
<div class="modal fade" id="data-barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="data-barang">Detail data barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="3">
                    <tr>
                        <th>ID Barang</th>
                        <td id="id"></td>
                    </tr>
                    <tr>
                        <th>Barcode</th>
                        <td id="barcode"></td>
                    </tr>
                    <tr>
                        <th>Nama Barang</th>
                        <td id="nama"></td>
                    </tr>
                    <tr>
                        <th>Jumlah Barang</th>
                        <td id="jumlah"></td>
                    </tr>
                    <tr>
                        <th>Kodisi Barang</th>
                        <td id="kondisi"></td>
                    </tr>
                    <tr>
                        <th>Tgl_input</th>
                        <td id="tgl_input"></td>
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
        $(document).on('click', '#barang', function() {

            var barcode = $(this).data('barcode');
            var nama = $(this).data('nama');
            var id = $(this).data('id');
            var jumlah = $(this).data('jumlah');
            var tgl_input = $(this).data('tgl_input');
            var kondisi = $(this).data('kondisi');

            $('#barcode').text(barcode);
            $('#nama').text(nama);
            $('#id').text(id);
            $('#jumlah').text(jumlah);
            $('#tgl_input').text(tgl_input);
            $('#kondisi').text(kondisi);

        })
    })
</script>