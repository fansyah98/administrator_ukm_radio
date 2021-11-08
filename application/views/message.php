<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i><?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>

<?php if ($this->session->has_userdata('warning')) { ?>
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-warning"></i> <?= $this->session->flashdata('warning') ?>
    </div>
<?php } ?>

<?php if ($this->session->has_userdata('danger')) { ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-danger"></i> <?= $this->session->flashdata('danger') ?>
    </div>
<?php } ?>