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
              <li class="breadcrumb-item active">Vendor Profile</li>
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
                <h3 class="card-title text-center">Vendor Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" action="<?=site_url('vendor/profileupdate');?>" enctype="multipart/form-data">
                <div class="row m-2">
                  <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Owner Details</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="cur_password">Name</label>
                           <input class="form-control" name="owner_name" id="owner_name" type="text" placeholder="Owner Name" value="<?php echo $vendorData[0]['owner_name']; ?> ">
                        </div>
                        <div class="form-group">
                          <label>Contact No.</label>
                          <input class="form-control" name="owner_contact_no" id="owner_contact_no" type="text" placeholder="Owner Contact No." maxlength="10" value="<?php echo  $vendorData[0]['owner_contact_no']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Email Id</label>
                          <input class="form-control" name="owner_email" id="owner_email" type="text" placeholder="Owner Email Id" value="<?php echo  $vendorData[0]['owner_email']; ?>">
                        </div>
                        <div class="form-group">
                          <label>PAN Card No.</label>
                          <input class="form-control" name="PAN_card_no" id="PAN_card_no" type="text" placeholder="PAN Card No." value="<?php echo  $vendorData[0]['PAN_card_no']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Aadhar Card No.</label>
                          <input class="form-control" name="aadhar_card_no" id="aadhar_card_no" type="text" placeholder="Aadhar Card No. " maxlength="12" value="<?php echo  $vendorData[0]['aadhar_card_no']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Country</label>
                          <select class="form-control" name="country" id="country">
                              <option value="">Choose...</option>
                              <option value="India" <?php echo ($vendorData[0]['country'] == 'India')?'selected':''; ?> >India</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>State</label>
                          <select class="form-control" name="state" id="state">
                              <option value="">Choose...</option>
                              <option value="Odisha" <?php echo ($vendorData[0]['state'] == 'Odisha')?'selected':''; ?> >Odisha</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>City</label>
                          <select class="form-control" name="city" id="city">
                              <option value="">Choose...</option>
                              <option value="Bhubaneswar" <?php echo ($vendorData[0]['city'] == 'Bhubaneswar')?'selected':''; ?> >Bhubaneswar</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Other Documents</h3>
                        <input type="hidden" name="old_GST_no_file" value="<?php echo $vendorData[0]['GST_no_file']; ?>">
                        <input type="hidden" name="old_company_PAN_file" value="<?php echo $vendorData[0]['company_PAN_file']; ?>">
                        <input type="hidden" name="old_owner_PAN_file" value="<?php echo $vendorData[0]['owner_PAN_file']; ?>">
                        <input type="hidden" name="old_aadhar_card_file" value="<?php echo $vendorData[0]['aadhar_card_file']; ?>">
                        <input type="hidden" name="old_company_image" value="<?php echo $vendorData[0]['company_image']; ?>">
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="GST_no_file">GST No Uploads</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="GST_no_file" id="GST_no_file">
                              <label class="custom-file-label" for="GST_no_file">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['GST_no_file']; ?>" title="View Uploaded GST File"><i class="fa fa-download"></i></a></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="owner_PAN_file">Owner PAN Card Uploads</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="owner_PAN_file" id="owner_PAN_file">
                              <label class="custom-file-label" for="owner_PAN_file">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['owner_PAN_file']; ?>" title="View Uploaded Owner PAN Card"><i class="fa fa-download"></i></a></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="aadhar_card_file">Aadhar Card Uploads</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="aadhar_card_file" id="aadhar_card_file">
                              <label class="custom-file-label" for="aadhar_card_file">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['aadhar_card_file']; ?>" title="View Uploaded Aadhar Card"><i class="fa fa-download"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Company Details</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Company Name</label>
                          <input class="form-control" name="company_name" id="company_name" type="text" placeholder="Company Name" value="<?php echo $vendorData[0]['company_name']; ?>">
                        </div>                      
                        <div class="form-group">
                          <label for="company_image">Company Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="company_image" id="company_image">
                              <label class="custom-file-label" for="company_image">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['company_image']; ?>" title="View Uploaded Company Image"><i class="fa fa-download"></i></a></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Company Contact No.</label>
                          <input class="form-control" name="company_contact_no" id="company_contact_no" type="text" placeholder="Company Contact No" maxlength="10" value="<?php echo  $vendorData[0]['company_contact_no']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Year Of Establishment</label>
                          <input class="form-control" name="year_of_establishment" id="year_of_establishment" type="text" placeholder="Year Of Establishment" value="<?php echo  $vendorData[0]['year_of_establishment']; ?>"> 
                        </div>
                        <div class="form-group">
                          <label>GST No.</label>
                          <input class="form-control" name="GST_no" id="GST_no" type="text" placeholder="GST No." value="<?php echo  $vendorData[0]['GST_no']; ?>"> 
                        </div>                        
                        <div class="form-group">
                          <label for="company_PAN_file">Company PAN Card Uploads</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="company_PAN_file" id="company_PAN_file">
                              <label class="custom-file-label" for="company_PAN_file">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['company_PAN_file']; ?>" title="View Uploaded Company PAN Card"><i class="fa fa-download"></i></a></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Bank Details</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Bank Name</label>
                        <input class="form-control" name="bank_name" id="bank_name" type="text" placeholder="Bank Name" value="<?php echo $vendorData[0]['bank_name']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Account Name</label>
                          <input class="form-control" name="account_name" id="account_name" type="text" placeholder="Account Name" value="<?php echo  $vendorData[0]['account_name']; ?>">
                        </div>
                        <div class="form-group">
                          <label>Account Number</label>
                          <input class="form-control" name="account_number" id="account_number" type="text" placeholder="Account Number" value="<?php echo  $vendorData[0]['account_number']; ?>">
                        </div>
                        <div class="form-group">
                          <label>IFSC Code</label>
                          <input class="form-control" name="IFSC_code" id="IFSC_code" type="text" placeholder="IFSC Code" value="<?php echo  $vendorData[0]['IFSC_code']; ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <button type="submit" name="updateBtn" value="Update" class="btn btn-primary" onclick="return validate();">Update</button>
                </div>
              </form>
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

<script src="<?php echo base_url()?>assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
  function validate(){
    $('#myForm').validate({
      rules: {
        company_name: {
          required: true,
        },
        owner_name: {
          required: true,
        },
        company_contact_no: {
          required: true,
        },
        owner_contact_no: {
          required: true,
        },
        owner_email: {
          required: true,
        },
        GST_no: {
          required: true,
        },
        PAN_card_no: {
          required: true,
        },
        aadhar_card_no: {
          required: true,
        },
        year_of_establishment: {
          required: true,
        },
        bank_name: {
          required: true,
        },
        account_name: {
          required: true,
        },
        account_number: {
          required: true,
        },
        IFSC_code: {
          required: true,
        },
        country: {
          required: true,
        },
        state: {
          required: true,
        },
        city: {
          required: true,
        },
        // GST_no_file: {
        //   required: true,
        // },
        // company_PAN_file: {
        //   required: true,
        // },
        // owner_PAN_file: {
        //   required: true,
        // },
        // aadhar_card_file: {
        //   required: true,
        // },
      },
      messages: {
        company_name: {
          required: "Please enter then company name",
        },
        owner_name: {
          required: "Please enter your owner name",
        },
        company_contact_no: {
          required: "Please enter your company contact no",
        },      
        owner_contact_no: {
          required: "Please enter your owner contact no",
        },     
        owner_email: {
          required: "Please enter your owner email id",
        },
        GST_no: {
          required: "Please enter your GST no",
        },
        PAN_card_no: {
          required: "Please enter your PAN card no",
        },
        aadhar_card_no: {
          required: "Please enter your aadhar card no",
        },
        year_of_establishment: {
          required: "Please enter year of establishment of your company",
        },
        bank_name: {
          required: "Please enter your bank name",
        },
        account_name: {
          required: "Please enter your account name",
        },
        account_number: {
          required: "Please enter your account number",
        },
        IFSC_code: {
          required: "Please enter your IFSC code",
        },
        country: {
          required: "Please enter your country",
        },
        state: {
          required: "Please enter your state",
        },
        city: {
          required: "Please enter your city",
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  }
</script>
</body>
</html>