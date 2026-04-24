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

  <style>


  .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="1" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.1;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .company-logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .section-header {
            background: var(--light-bg);
            border-left: 5px solid var(--secondary-color);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 0 10px 10px 0;
        }

        .section-title {
            color: var(--primary-color);
            font-weight: bold;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            border: 1px solid #e9ecef;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background: var(--light-bg);
            border-radius: 8px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: var(--secondary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .level-badge {
            background: linear-gradient(45deg, var(--success-color), #2ecc71);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 3px 10px rgba(39, 174, 96, 0.3);
        }

        .bank-detail-item {
            background: var(--light-bg);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            border-left: 4px solid var(--secondary-color);
        }

        .dsa-badge {
            background: linear-gradient(45deg, var(--accent-color), #c0392b);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
            margin-bottom: 20px;
        }

        .stat-card {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary-color);
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .navbar-custom {
            background: rgba(44, 62, 80, 0.95);
            backdrop-filter: blur(10px);
        }

        .btn-custom {
            background: linear-gradient(45deg, var(--secondary-color), #2980b9);
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
            color: white;
        }

        .achievement-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
        }

        .achievement-icon {
            width: 30px;
            height: 30px;
            background: var(--success-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 50px 0;
            }
            
            .section-header {
                padding: 15px;
            }
            
            .info-card {
                padding: 20px;
            }
        }

  .custom-navbar {
    background-color: #343a40; /* Dark background */
    color: white;
    padding: 10px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    z-index: 1030;
  }

  .custom-navbar a.nav-item {
    color: white;
    text-decoration: none;
    font-weight: 500;
    display: inline-block;
    transition: color 0.3s;
  }

  .custom-navbar a.nav-item:hover {
    color: #ffc107; /* Bootstrap's warning color */
  }

  .fixed-top {
    position: fixed;
    top: 10%;
    left: 0;
    right: 0;
  }


    .progress-bar { height: 25px; background: lightgray; }
        .bar-inner { height: 100%; transition: 0.3s; }
        .level-box { margin-bottom: 20px; }
        .green { background-color: green; }
        .yellow { background-color: orange; }
        .red { background-color: red; }



         .checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 35px;
            height: 35px;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            cursor: pointer;
            position: relative;
            margin-right: 20px;
            margin-bottom: 10px;
            transition: border-color 0.2s, background-color 0.2s;
        }

        .checkbox:hover {
            border-color: #888;
        }

        .checkbox:checked {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        .checkbox:checked::after {
            content: '';
            position: absolute;
            top: 20%;
            left: 10px;
            width: 10px;
            height: 15px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }


        /* Modal overlay */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            display: none;
            justify-content: center;
            align-items: center;
        }

        /* Modal container */
        .modal-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            animation: modalSlideIn 0.3s ease-out;
        }

        @keyframes modalSlideIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Modal header */
        .modal-header {
            padding: 20px 30px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            margin: 0;
            color: #333;
            font-size: 24px;
        }

        /* Close button */
        .close-btn {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #999;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.2s ease;
        }

        .close-btn:hover {
            background: #f0f0f0;
            color: #333;
        }

        /* Modal body */
        .modal-body {
            padding: 30px;
        }

        /* Form styling */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-group textarea {
            height: 80px;
            resize: vertical;
        }

        /* Modal footer */
        .modal-footer {
            padding: 0 30px 30px;
            text-align: right;
        }

        .btn {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #545b62;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .modal-container {
                margin: 20px;
                width: calc(100% - 40px);
            }
            
            .modal-header,
            .modal-body,
            .modal-footer {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
 
 #openFormBtn {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

/* Overlay */
#details-popup {
    display: none;
    position: fixed;
    z-index: 3000;
    left: 0;
    top: 0;
    align-items: center;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
}

/* Popup Box */
.popup {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
 
   
 
    position: relative;
}

/* Close Button */
.closeBtn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
}

.popup form {
    display: flex;
    flex-direction: column;
}

.popup input, .popup textarea {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.popup button {
    padding: 10px;
    background: #28a745;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.popup button:hover {
    background: #218838;
}
  </style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active"> User List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <section class="ps-section--account">


<!-- Custom Fixed Top Navbar -->
<!-- <div class="custom-navbar fixed-top">
  <div class="container-fluid">
    <div class="row text-center align-items-center">

      <div class="col-md-2 col-6 mb-2 mb-md-0">
        <a href="#" class="nav-item">
          <i class="fas fa-network-wired"></i> MLM Pro
        </a>
      </div>

      <div class="col-md-2 col-6 mb-2 mb-md-0">
        <a href="#profile" class="nav-item">Profile</a>
      </div>

      <div class="col-md-2 col-6 mb-2 mb-md-0">
        <a href="#contact" class="nav-item">Contact</a>
      </div>

      <div class="col-md-2 col-6 mb-2 mb-md-0">
        <a href="#levels" class="nav-item">Levels</a>
      </div>

      <div class="col-md-2 col-6 mb-2 mb-md-0">
        <a href="#banking" class="nav-item">Banking</a>
      </div>

      <div class="col-md-2 col-6 mb-2 mb-md-0">
        <a href="#achievements" class="nav-item">Achievements</a>
      </div>

    </div>
  </div>
</div> -->




     <section id="profile" class="py-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-8">
        <div class="info-card">
        <h4><i class="fas fa-award text-warning"></i> DSA Membership Details</h4>
        <div class="row">
        <div class="col-md-6">
            <p><strong>Name:</strong> <?= ($user['fullname']) ?: '--'; ?></p>
        <p><strong>Member Since:</strong> <?= ($user['created_on']) ?: '--'; ?></p>
        <p><strong>Membership ID:</strong> <?= ($user['custom_user_id']) ?: '--'; ?></p>
        <p><strong>Status:</strong> <span class="badge badge-success"><?= ($user['user_status']) ?: '--'; ?></span>       </p>

        <p>  <span class=" "> <button id="openFormBtn" class="  btn btn-success btn-sm ">Edit</button></span>       </p>
        </div>
        <div class="col-md-6">
        <p><strong>Parent ID:</strong> <?= ($user['parent_id']) ?: 'N/A'; ?></p>
                                <!-- <p><strong>Level:</strong> A+</p> -->
                                <!-- <p><strong>Last Audit:</strong> March 2024</p> -->
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-lg-7 col-md-7">
        <div class="info-card">
        <div class="level-badge mb-3 bg-primary">LEVELS</div>
                        <!-- <h5>Starter Package</h5> -->
        <div id="progress-wrapper" data-userid="<?= $user_id ?>">
    <?php for ($level = 1; $level <= 6; $level++): ?>
    <div class="container" id="level-<?php echo $level; ?>">
    <div class="row d-flex-inline"> 
    <div class="col-auto">
    <div class="level-title "> 
    <h4 class="fw-bold text-primary "> 
    Level <?php echo $level; ?></h4>
</div>
    </div>
    <div class="col-auto">
      <?php for ($i = 1; $i <= 5; $i++): 
        $checked = $this->Common_Model->FetchData('users_lvl','checked',"user_id = '$user_id' and user_lvl='$level'");
        ?>
        <input type="checkbox" class="checkbox" data-level="<?php echo $level; ?>" data-index="<?php echo $i; ?>" <?=$checked>=$i?'checked':''?> >
   <?php endfor; ?>
    </div>
  </div>
      
                      



               <!--  <input type="checkbox" class="checkbox" id="level<?= $level ?>-check<?= $i ?>" data-level="<?= $level ?>" data-index="<?= $i ?>">
                <label for="level<?= $level ?>-check<?= $i ?>"></label> -->
  
      
    </div>
<?php endfor; ?>
</div>
   
      

                        <!-- <p class="text-muted">Minimum Purchase: ₹10,000</p> -->
                    </div>
                </div>

        <div class="col-lg-5 col-md-5">
       <div class="info-card">
                        <h4><i class="fas fa-receipt text-success"></i> Wallet Balance</h4>
                        <div class="bank-detail-item">
                            <!-- <strong>GST Number:</strong> 27AAACM1234L1ZX<br> -->
                            <strong>Shopping Balance:</strong> ₹<?=      number_format( $balance[0]['shopping_balance'] , 2); ?><br>
                            <strong>Wallet Balance:</strong> ₹<?= number_format(isset($balance[0]['wallet_balance']) ? $balance[0]['wallet_balance'] : 0, 2); ?>


<br>
                           <strong>Wallet Balance:</strong> ₹<?= number_format(isset($balance[0]['bank_balance']) ? $balance[0]['bank_balance'] : 0, 2); ?>

                            
<br>


 
 




                        </div>
                        <button class="popup-trigger btn    btn-sm btn-primary" data-popup="simple"> Add / Edit</button>
                        <!-- <div class="bank-detail-item">
                            <strong>Payment Methods:</strong><br>
                            • Net Banking<br>
                            • UPI: mlmsuccess@sbi<br>
                            • Credit/Debit Cards<br>
                            • NEFT/RTGS
                        </div> -->
                        <!-- <div class="bank-detail-item">
                            <strong>Processing Time:</strong> 2-3 Business Days<br>
                            <strong>Minimum Payout:</strong> ₹500<br>
                            <strong>Payout Frequency:</strong> Weekly
                        </div> -->
                    </div>


 
                </div>


 

            </div>


                </div>
  <div class="col-lg-4">

 <div class="info-card">


 
                        <h4><i class="fas fa-map-marker-alt text-primary"></i> Contact </h4>
                        <div class="bank-detail-item">
                            <strong>State:</strong><?= ($user['custstate']) ?: '--'; ?><br>
                            <!-- <strong>Branch:</strong> Gurgaon Sector 18<br> -->
                            <strong>District:</strong> <?= ($user['custdistrict']) ?: '--'; ?>
                        </div>
                        <div class="bank-detail-item">
                            <strong>City:</strong> <?= ($user['custcity']) ?: '--'; ?><br>
                            <strong>  Pincode:</strong> <?= ($user['pincode']) ?: '--'; ?><br>
                            <strong>  Address:</strong> <?= ($user['address']) ?: '--'; ?><br>
                            <!-- <strong>Account Type:</strong> Current Account -->
                        </div>
                      <!--   <div class="bank-detail-item">
                            <strong>Swift Code:</strong> SBININBB123<br>
                            <strong>Branch Code:</strong> 001234<br>
                            <strong>MICR Code:</strong> 122002345
                        </div> -->
                    </div>

      
                    <div class="info-card">
                        <h4><i class="fas fa-credit-card text-primary"></i> Primary Bank Account</h4>
                        <div class="bank-detail-item">
                            <strong>Bank Name:</strong><?= ($user['bank_name']) ?: '--'; ?><br>
                            <!-- <strong>Branch:</strong> Gurgaon Sector 18<br> -->
                            <strong>Account Holder:</strong> <?= ($user['fullname']) ?: '--'; ?>
                        </div>
                        <div class="bank-detail-item">
                            <strong>Account Number:</strong> <?= ($user['bank_ac_no']) ?: '--'; ?><br>
                            <strong>IFSC Code:</strong> <?= ($user['ifsc']) ?: '--'; ?><br>
                            <!-- <strong>Account Type:</strong> Current Account -->
                        </div>
                      <!--   <div class="bank-detail-item">
                            <strong>Swift Code:</strong> SBININBB123<br>
                            <strong>Branch Code:</strong> 001234<br>
                            <strong>MICR Code:</strong> 122002345
                        </div> -->
                    </div>
                

               
                    <div class="info-card">
                        <h4><i class="fas fa-receipt text-success"></i> KYC Information</h4>
                        <div class="bank-detail-item">
                            <!-- <strong>GST Number:</strong> 27AAACM1234L1ZX<br> -->
                            <strong>PAN Number:</strong> <?= ($user['pan_card_no']) ?: '--'; ?><br>
                            <strong>Aadhar Number:</strong> <?= ($user['aadhar_card_no']) ?: '--'; ?>



                        </div>
                        <!-- <div class="bank-detail-item">
                            <strong>Payment Methods:</strong><br>
                            • Net Banking<br>
                            • UPI: mlmsuccess@sbi<br>
                            • Credit/Debit Cards<br>
                            • NEFT/RTGS
                        </div> -->
                        <!-- <div class="bank-detail-item">
                            <strong>Processing Time:</strong> 2-3 Business Days<br>
                            <strong>Minimum Payout:</strong> ₹500<br>
                            <strong>Payout Frequency:</strong> Weekly
                        </div> -->
                    </div>

                    
                 
                </div>
                
            </div>
        </div>
    </section>

 


 <div id="simple-popup" class="modal-overlay">
        <div class="modal-container">
            <div class="modal-header">
                 
                <button class="close-btn">&times;</button>
            </div>
            <div class="modal-body">
              <form class="ps-form--account ps-tab-root" id="myForm" action="<?= site_url('Users/add_wallet'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
    <div id="register">
        <input type="hidden" name="user_id" value="<?= $user_id ?>">

        <div class="ps-form__content">
            <div class="form-group">
                <label for="shopping_bal">Shopping</label>
                <input class="form-control fullname"
                       name="shopping_bal"
                       id="shopping_bal"
                        type="text"
                       placeholder="Enter Shopping Balance"
                       value="<?= isset($balance[0]) ? $balance[0]['shopping_balance'] : '' ?>">
            </div>

            <div class="form-group">
                <label for="wallet_bal">Wallet</label>
                <input class="form-control fullname"
                       name="wallet_bal"
                       id="wallet_bal"
                       type="text"
                       placeholder="Enter Wallet Balance"
                       value="<?= isset($balance[0]) ? $balance[0]['wallet_balance'] : '' ?>">
            </div>

              <div class="form-group">
                <label for="bank_bal">Bank Balance</label>
                <input class="form-control fullname"
                       name="bank_bal"
                       id="bank_bal"
                       type="text"
                       placeholder="Enter Bank Balance"
                       value="<?= isset($balance[0]) ? $balance[0]['bank_balance'] : '' ?>"
                       required>
            </div>


            <div class="form-group ">
                <button type="submit" name="submitBtn" value="submitBtn" onclick="return validate();" id="submitBtn" class="  btn btn-sm btn-success">Update</button>
            </div>
        </div>
    </div>
</form>

            </div>
        </div>
    </div>

 





 






 
 





</div>


 
             <!-- Overlay with new ID -->
 
 



    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<center><div id="details-popup" class="overlay container">
    <div class="popup">
        <span class="closeBtn">&times;</span>
        <h2>Profile Edit</h2>

 <form action="<?= site_url('Users/edit_details'); ?>" method="post" autocomplete="off">
    <p><?=$this->session->flashdata('error')?></p>
        <input type="hidden" name="user_id" value="<?= $user_id; ?>">

        <div class="row g-3">
            <!-- Full Name -->
            <div class="col-md-4">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname" id="fullname" 
                       value="<?= set_value('fullname', $user['fullname'] ?? ''); ?>">
                <?= form_error('fullname', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Mobile -->
            <div class="col-md-4">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile" 
                       value="<?= set_value('mobile', $user['mobile'] ?? ''); ?>">
                <?= form_error('mobile', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" 
                       value="<?= set_value('email', $user['email'] ?? ''); ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Pincode -->
            <div class="col-md-4">
                <label for="pincode" class="form-label">Pincode</label>
                <input type="text" class="form-control" name="pincode" id="pincode" 
                       value="<?= set_value('pincode', $user['pincode'] ?? ''); ?>">
                <?= form_error('pincode', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Address -->
            <div class="col-md-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" 
                       value="<?= set_value('address', $user['address'] ?? ''); ?>">
                <?= form_error('address', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- State -->
            <div class="col-md-4">
                <label for="custstate" class="form-label">State</label>
                <input type="text" class="form-control" name="custstate" id="custstate" 
                       value="<?= set_value('custstate', $user['custstate'] ?? ''); ?>">
                <?= form_error('custstate', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- District -->
            <div class="col-md-4">
                <label for="custdistrict" class="form-label">District</label>
                <input type="text" class="form-control" name="custdistrict" id="custdistrict" 
                       value="<?= set_value('custdistrict', $user['custdistrict'] ?? ''); ?>">
                <?= form_error('custdistrict', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- City -->
            <div class="col-md-4">
                <label for="custcity" class="form-label">City</label>
                <input type="text" class="form-control" name="custcity" id="custcity" 
                       value="<?= set_value('custcity', $user['custcity'] ?? ''); ?>">
                <?= form_error('custcity', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- PAN Card -->
            <div class="col-md-4">
                <label for="pan_card_no" class="form-label">PAN Card No</label>
                <input type="text" class="form-control" name="pan_card_no" id="pan_card_no" 
                       value="<?= set_value('pan_card_no', $user['pan_card_no'] ?? ''); ?>">
                <?= form_error('pan_card_no', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Aadhar Card -->
            <div class="col-md-4">
                <label for="aadhar_card_no" class="form-label">Aadhar Card No</label>
                <input type="text" class="form-control" name="aadhar_card_no" id="aadhar_card_no" 
                       value="<?= set_value('aadhar_card_no', $user['aadhar_card_no'] ?? ''); ?>">
                <?= form_error('aadhar_card_no', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Bank Name -->
            <div class="col-md-4">
                <label for="bank_name" class="form-label">Bank Name</label>
                <input type="text" class="form-control" name="bank_name" id="bank_name" 
                       value="<?= set_value('bank_name', $user['bank_name'] ?? ''); ?>">
                <?= form_error('bank_name', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Bank A/C -->
            <div class="col-md-4">
                <label for="bank_ac_no" class="form-label">Bank A/C No</label>
                <input type="text" class="form-control" name="bank_ac_no" id="bank_ac_no" 
                       value="<?= set_value('bank_ac_no', $user['bank_ac_no'] ?? ''); ?>">
                <?= form_error('bank_ac_no', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- IFSC -->
            <div class="col-md-4">
                <label for="ifsc" class="form-label">IFSC Code</label>
                <input type="text" class="form-control" name="ifsc" id="ifsc" 
                       value="<?= set_value('ifsc', $user['ifsc'] ?? ''); ?>">
                <?= form_error('ifsc', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Submit -->
            <div class="col-12 mt-3">
                 <button type="submit" 
            name="submitBtn" 
            value="Submit" 
            onclick="return validate();" 
            id="submitBtn" 
            class="submit-btn">
        Update
    </button>
            </div>
        </div>
    </form>

    </div>
</div> </center>
  <!-- Main Footer -->
  <?php $this->load->view('admin/common/footer');?>
</div>
<?php $this->load->view('admin/common/script');?>
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

 

   function updateuserstatus(userid,userstatus){
    var user_status = 'Active' ;
    if(status){
      user_status = 'Deactive' ;
    }
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/updateuserstatus',
      dataType:'json',
      data:{product_id:pid,is_feature:is_feature},
      success:function(data){
      }
    });
  }
</script>

 
<script>
$(document).ready(function () {


    $(".checkbox").on("change", function () {

        let levelId = $(this).data("level");
        let index = $(this).data("index");
        let userid ="<?=$user_id?>";

        // alert(userid);

        // Check all previous checkboxes including current one in the same level
        $(`#level-${levelId} .checkbox`).each(function () {
            let currentIndex = $(this).data("index");
            if (currentIndex <= index) {
                $(this).prop("checked", true);
            }
        });

        // Optional: Uncheck all after the clicked one
        $(`#level-${levelId} .checkbox`).each(function () {
            let currentIndex = $(this).data("index");
            if (currentIndex > index) {
                $(this).prop("checked", false);
            }
        });

        // Count how many are checked in this level
        let checkedCount = $(`#level-${levelId} .checkbox:checked`).length;

        // AJAX to save
        $.ajax({
            url: "<?= site_url('Users/user_level')?>",
            method: "POST",
            data: {
                
                level: levelId,
                count: checkedCount,
                user_id: userid,
            },
            success: function (res) {  
                $("#status").text("Level " + levelId + " saved with " + checkedCount + " checkbox(es) checked.");
            }
        });
    });
});




   $(document).ready(function() {
            // Open popup on button click
            $('.popup-trigger').on('click', function() {
                const popupId = $(this).data('popup') + '-popup';
                $('#' + popupId).fadeIn(300).css('display', 'flex');
            });

            // Close popup functions
            function closePopup($popup) {
                $popup.fadeOut(300);
            }

            // Close on X button click
            $('.close-btn').on('click', function() {
                const $popup = $(this).closest('.modal-overlay');
                closePopup($popup);
            });

            // Close on overlay click (clicking outside modal)
            $('.modal-overlay').on('click', function(e) {
                if (e.target === this) {
                    closePopup($(this));
                }
            });

            // Close on Escape key
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    $('.modal-overlay:visible').each(function() {
                        closePopup($(this));
                    });
                }
            });

            // Form submission handler
            $('#submit-form').on('click', function() {
                const form = $('#contact-form')[0];
                if (form.checkValidity()) {
                    // Get form data
                    const formData = {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        subject: $('#subject').val(),
                        message: $('#message').val()
                    };
                    
                    console.log('Form Data:', formData);
                    alert('Form submitted successfully!\nCheck console for data.');
                    
                    // Reset form and close popup
                    form.reset();
                    closePopup($('#form-popup'));
                } else {
                    alert('Please fill in all required fields.');
                }
            });

            // Confirmation handler
            $('#confirm-action').on('click', function() {
                alert('Action confirmed!');
                closePopup($('#confirmation-popup'));
            });

            // Prevent modal content clicks from closing popup
            $('.modal-container').on('click', function(e) {
                e.stopPropagation();
            });
        });


   $(document).ready(function () {
    // Show Popup
    $("#openFormBtn").on("click", function () {
        $("#details-popup").fadeIn();
    });

    // Close Popup when clicking X
    $(".closeBtn").on("click", function () {
        $("#details-popup").fadeOut();
    });

    // Close Popup when clicking outside the popup box
    $(window).on("click", function (e) {
        if ($(e.target).is("#details-popup")) {
            $("#details-popup").fadeOut();
        }
    });
});

</script>


</body>
</html>