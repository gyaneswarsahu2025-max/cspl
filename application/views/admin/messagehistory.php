<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <?php $this->load->view('admin/common/meta');?>

<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('admin/common/topnav');?>
  <!-- /.navbar -->
  <?php $this->load->view('admin/common/sidebar');?>


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Change Password</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Help & Support</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->

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

          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Queries for Support</h3>
              </div>
              <!-- /.card-header -->
               <div class="card-body">
                  <div class="container">
                      <div class="row">
                        <?php if($records){ foreach ($records as $key => $msgval){ ?>
                          <?php if($msgval['from']!=$this->session->userdata('user_id')){ ?>
                                <div class="form-group col-md-12">
                                  <?php
                                      if(!empty($msgval['message'])){
                                        echo $msgval['message'];
                                      }else{ ?>
                                        <a download href="<?php echo base_url().'uploads/message/'.$msgval['file']; ?>" title="Download Attachment" class="btn btn-xs btn-success"><i class="fa fa-download" aria-hidden="true"></i></a>
                                      <?php }
                                  ?>
                                  <br> <small><?php echo date("d M Y H:i A",strtotime($msgval['created_on'])); ?></small>
                                </div>
                              <?php }else{ ?>
                                <div class="form-group col-md-12 text-right">
                                  <?php
                                      if(!empty($msgval['message'])){
                                        echo $msgval['message'];
                                      }else{ ?>
                                        <a download href="<?php echo base_url().'uploads/message/'.$msgval['file']; ?>" title="Download Attachment" class="btn btn-xs btn-success"><i class="fa fa-download" aria-hidden="true"></i></a>
                                      <?php }
                                  ?>
                                  <br> <small><?php echo date("d M Y H:i A",strtotime($msgval['created_on'])); ?></small>
                                </div>
                            <?php } } } ?>
                              <div class="form-group col-md-11">
                                <input class="form-control" id="txt_message" name="txt_message" type="text" placeholder="Type here">
                              </div>
                              <div class="form-group col-md-1">
                                  <button class="btn btn-primary" id="btnSend" name="btnSend" onclick="replayMessage()">Send</button>
                              </div>
                      </div>
                    </div>
              </div>
              <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Main Footer -->
  <?php $this->load->view('admin/common/footer');?>
</div>
<?php $this->load->view('admin/common/script');?>

<script type="text/javascript"> 
function replayMessage(){
  var message = $('#txt_message').val();
  var id = <?php echo $id; ?>;
  if(message != ''){
      $.ajax({
         url     : appUrl+'index.php/ajax/replayMessage',
         type    : "POST",
         data    : {message:message,id:id}, 
         dataType: 'json',
         success : function(resp){
           if(resp.status == 200){
            window.location.reload();
           }
        }
    });
  }else{
    $('#txt_message').focus();
  }
}
</script>

