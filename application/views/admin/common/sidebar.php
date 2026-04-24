<aside class="main-sidebar elevation-4 sidebar-light-info">
  <!-- Brand Logo -->
  <a href="<?=site_url();?>" class="brand-link elevation-4 navbar-info bg-light">
    <!--<img src="<?=base_url();?>assets/img/big_img/logo.avif" alt="Smart Showroom" class="brand-image img-circle elevation-3" style="opacity: .8">-->
    <!--<span class="brand-text font-weight-light">Big Bargains</span>-->
     <img alt="Celtic Life Science – Trusted Pharmaceutical Company in India" width="100%" height="45"   src="<?=base_url('website_assets/img/celtic.png') ?>">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?=base_url();?>assets/admin/dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=$this->session->userdata('fullname');?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-compact text-sm" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="<?=site_url('dashboard');?>" class="nav-link <?=$mainmenu == 'dashboard' ? 'active' : ''?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php if($this->session->userdata('user_type') == 0){ ?>
        <li class="nav-item has-treeview <?=$mainmenu == 'user' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'masters' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="d-none nav-item">
              <a href="<?=site_url('masters/homeslider');?>" class="nav-link <?=$submenu == 'homeslider' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Home Page</p>
              </a>
            </li>
            <li class=" d-none nav-item">
              <a href="<?=site_url('masters/location');?>" class="nav-link <?=$submenu == 'location' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Location</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('masters/category');?>" class="nav-link <?=$submenu == 'category' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Category</p>
              </a>
            </li>
           <!--  <li class="nav-item  ">
              <a href="<?=site_url('brand');?>" class="nav-link <?=$submenu == 'brand' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Brand</p>
              </a>
            </li> -->
            <li class="  nav-item">
              <a href="<?=site_url('Masters/add_edit_banner');?>" class="nav-link <?=$submenu == 'communication' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Banner</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="d-none nav-item has-treeview <?=$mainmenu == 'user' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'user' ? 'active' : ''?>">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Manage User
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class=" d-none nav-item">
              <a href="<?=site_url('vendor/vendorlist');?>" class="nav-link <?=$submenu == 'vendor' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Vendor User</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="d-none nav-item">
              <a href="<?=site_url('Users/index2');?>" class="nav-link <?=$submenu == 'vendor' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>  User List</p>
              </a>
            </li>
          </ul>
        </li> 
        <li class="nav-item has-treeview <?=$mainmenu == 'product' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'product' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Product
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="d-none nav-item">
              <a href="<?=site_url('brand');?>" class="nav-link <?=$submenu == 'brand' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Brand</p>
              </a>
            </li>  
            <li class="d-none nav-item">
              <a href="<?=site_url('attribute');?>" class="nav-link <?=$submenu == 'attribute' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Attributes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('product');?>" class="nav-link <?=$submenu == 'product' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Product List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class=" d-none nav-item has-treeview <?=$mainmenu == 'order' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'order' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Order
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=site_url('order/orderdetails');?>" class="nav-link <?=$submenu == 'orderdetails' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Order Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/pending_delivery');?>" class="nav-link <?=$submenu == 'pending_delivery' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Pending Delivery</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/completeorders');?>" class="nav-link <?=$submenu == 'completeorders' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Complete Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/orderscancel');?>" class="nav-link <?=$submenu == 'orderscancel' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Cancel Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/order_restock');?>" class="nav-link <?=$submenu == 'order_restock' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Order Re-stock</p>
              </a>
            </li>
          </ul>
        </li>
        <li class=" d-none nav-item has-treeview <?=$mainmenu == 'report' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'report' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Report
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=site_url('report/customers');?>" class="nav-link <?=$submenu == 'customers' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Customer Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('report/vendors');?>" class="nav-link <?=$submenu == 'vendors' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Vendor Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('report/products');?>" class="nav-link <?=$submenu == 'products' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Product Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('report/stockreport');?>" class="nav-link <?=$submenu == 'stockreport' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Stock Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('report/sale_report');?>" class="nav-link <?=$submenu == 'sale_report' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Sale Report</p>
              </a>
            </li>
          </ul>
        </li>
        <li class=" d-none nav-item">
          <a href="<?=site_url('adminlogin/policy');?>" class="nav-link <?=$submenu == 'policy' ? 'active' : ''?>">
            <i class="nav-icon fas fa-star text-dark"></i>
            <p>Privacy Policy</p>
          </a>
        </li>
        <li class="d-none nav-item">
          <a href="<?=site_url('adminlogin/terms');?>" class="nav-link <?=$submenu == 'terms' ? 'active' : ''?>">
            <i class="nav-icon fas fa-star text-dark"></i>
            <p>Terms & Conditions</p>
          </a>
        </li>
        <?php } ?>

        <?php if($this->session->userdata('user_type') == 1){ ?>
        <li class="nav-item has-treeview <?=$mainmenu == 'user' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'masters' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item d-none">
              <a href="<?=site_url('masters/vendorslider');?>" class="nav-link <?=$submenu == 'vendorslider' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Home Page</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="<?=site_url('master/add_edit_banner');?>" class="nav-link <?=$submenu == 'communication' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Admin-Vendor Communicaton</p>
              </a>
            </li>
          </ul>
        </li>
         <li class="nav-item has-treeview <?=$mainmenu == 'product' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'product' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Product
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=site_url('brand');?>" class="nav-link <?=$submenu == 'brand' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Brand</p>
              </a>
            </li>
            <li class="nav-item d-none">
              <a href="<?=site_url('attribute');?>" class="nav-link <?=$submenu == 'attribute' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Attributes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('product');?>" class="nav-link <?=$submenu == 'product' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Manage Products</p>
              </a>
            </li>
          </ul>
        </li>
        <li class=" d-none nav-item has-treeview <?=$mainmenu == 'order' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'order' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Order
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=site_url('order/orderdetails');?>" class="nav-link <?=$submenu == 'orderdetails' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Order Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/pending_delivery');?>" class="nav-link <?=$submenu == 'pending_delivery' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Pending Delivery</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/completeorders');?>" class="nav-link <?=$submenu == 'completeorders' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Complete Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('order/orderscancel');?>" class="nav-link <?=$submenu == 'orderscancel' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Cancel Orders</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="d-none  nav-item has-treeview <?=$mainmenu == 'report' ? 'menu-open' : '';?>">
          <a href="javascript:;" class="nav-link <?=$mainmenu == 'report' ? 'active' : ''?>">
            <i class="nav-icon fas fa-atom"></i>
            <p>
              Manage Report
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!--<li class="nav-item">
              <a href="<?=site_url('report/customers');?>" class="nav-link <?=$submenu == 'products' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Customer Details</p>
              </a>
            </li>-->
            <li class="nav-item">
              <a href="<?=site_url('report/products');?>" class="nav-link <?=$submenu == 'products' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p> Product Details</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('report/stockreport');?>" class="nav-link <?=$submenu == 'stockreport' ? 'active' : '';?>">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Stock Report</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
              <a href="<?=site_url('site/vendor_category/'.data_enc('encrypt','0::'.$this->session->userdata('user_id')));?>" class="nav-link <?=$submenu == 'stockreport' ? 'active' : '';?>" target="_blank">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Catalogue</p>
              </a>
        </li>
        <li class="nav-item">
              <a href="<?=site_url('site/vendor_prom/'.data_enc('encrypt','0::'.$this->session->userdata('user_id')));?>" class="nav-link <?=$submenu == 'stockreport' ? 'active' : '';?>" target="_blank">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Promotional</p>
              </a>
            </li>
        <li class="nav-item">
              <a href="<?=site_url('site/vendor_prom2/'.data_enc('encrypt','0::'.$this->session->userdata('user_id')));?>" class="nav-link <?=$submenu == 'stockreport' ? 'active' : '';?>" target="_blank">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Promotional-2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=site_url('site/showroom_offer');?>" class="nav-link <?=$submenu == 'stockreport' ? 'active' : '';?>" target="_blank">
                <i class="fas fa-bullseye nav-icon"></i>
                <p>Showroom Offer</p>
              </a>
            </li>
        <li class="nav-header">Profile</li>
        <li class="nav-item">
          <a href="<?=site_url('vendor/profileupdate');?>" class="nav-link <?=$submenu == 'profileupdate' ? 'active' : ''?>">
            <i class="nav-icon fas fa-user text-warning"></i>
            <p>Profile Update</p>
          </a>
        </li>
        <?php } ?>
        <?php if($this->session->userdata('user_type') == 0){ ?>
        <li class=" d-none nav-item">
          <a href="<?=site_url('adminlogin/message');?>" class="nav-link <?=$submenu == 'support' ? 'active' : ''?>">
            <i class="nav-icon fas fa-question-circle text-dark"></i>
            <p>Help & Support</p>
          </a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a href="<?=site_url('adminlogin/change_password');?>" class="nav-link <?=$submenu == 'change_password' ? 'active' : ''?>">
            <i class="nav-icon fas fa-key text-warning"></i>
            <p>Change Password</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=site_url('adminlogin/logout');?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>