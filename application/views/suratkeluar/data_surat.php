<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?= site_url('keluar/add') ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah data surat keluar</a>
      </div>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $a ?> </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>bentuk surat</th>
              <th>Desposisi</th>
              <th>tgl_keluar</th>
              <th>actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th class="text-center">#</th>
              <th>bentuk surat </th>
              <th>Desposisi</th>
              <th>tgl_keluar </th>
              <th>actions</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <?php
              $no = 1;
              foreach ($row as $sayangwidad => $data) { ?>
                <td><?= $no++ ?> </td>
                <td><?= $data->nama_surat ?> </td>
                <td><?= $data->Desposisi ?> </td>
                <td><?= $data->date ?> </td>
                <td class="text-center">
                  <a href="<?= site_url('keluar/edit/' . $data->id_surat) ?>" class="btn btn-info btn-xs "><i class="fa fa-pencil-alt"></i></a>
                  <a href="<?= site_url('keluar/del/' . $data->id_surat) ?>" class="btn btn-primary btn-xs "><i class="fa fa-trash-alt"></i></a>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#data-surat" id="surat" data-id="<?= $data->id_surat ?>" data-nama="<?= $data->nama_surat ?>" data-desposisi="<?= $data->Desposisi ?>" data-date="<?= $data->date ?>">
                    <i class="fa fa-eye"></i>
                  </button>
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



<!-- Modal -->
<div class="modal fade" id="data-surat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="data-surat">Detail surat keluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="3">
          <tr>
            <th>ID Surat </th>
            <td id="id"> </td>
          </tr>
          <tr>
            <th> Bentuk Surat </th>
            <td id="nama"> </td>
          </tr>
          <tr>
            <th>Desposisi (jabatan) </th>
            <td id="desposisi"> </td>
          </tr>
          <tr>
            <th> Tanggal surat </th>
            <td id="date"> </td>
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
    $(document).on('click', '#surat', function() {
      var date = $(this).data('date');
      var desposisi = $(this).data('desposisi');
      var image = $(this).data('image');
      var nama = $(this).data('nama');
      var id = $(this).data('id');
      $('#date').text(date);
      $('#desposisi').text(desposisi);
      $('#image').text(image);
      $('#nama').text(nama);
      $('#id').text(id);

    })
  })
</script>