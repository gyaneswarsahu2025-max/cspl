<div class="col-md-12">
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Success !</strong> <?=$this->session->flashdata('success')?>
</div>
<?php }?>
<?php if($this->session->flashdata('error')){ ?>
<div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Error !</strong> <?=$this->session->flashdata('error')?>
</div>
<?php }?>
</div>