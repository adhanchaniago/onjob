<!-- #header start -->
<header id="header">
  <div class="container">
    <div class="row align-items-center d-flex">
      <div class="col-2">
        <div id="logo">
          <a href="<?= base_url(); ?>">
          <!--<img src="<?= base_url(); ?>assets/img/logo.png" alt="" title="" />
-->
<h3>Archipelago</h3>
        </a>
        </div>
      </div>
      <div class="col-10">
        <nav id="nav-menu-container">
          <ul class="nav-menu">
           
            <?php if ($this->session->userdata('is_user_login')): ?>
              <li class="menu-has-children"><a href="">Jobs</a>
                <ul>
                  <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                  <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                  <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                  <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                  <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
                </ul>
              </li>
              <li class=""><a href="<?= base_url('about'); ?>">About</a></li>
              <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
              <li><a href="<?= base_url('employers') ?>"> For Employers</a> 
              </li>   
              <li class="menu-has-children margin-left-400"><img src="<?= base_url()?>assets/img/user.png" alt="user_img" height=35 /><a href="#"> <?= $this->session->userdata('username'); ?> </a>
                <ul>
                  <li><a href="<?= base_url('profile'); ?>">My Profile</a></li>
                  <li><a href="<?= base_url('myjobs'); ?>">My Applications</a></li>
                  <li><a href="<?= base_url('myjobs/matching'); ?>">Matching Jobs</a></li>
                  <li><a href="<?= base_url('setting/change_password'); ?>">Change Password</a></li>
                  <li><a href="<?= base_url('auth/logout')?>">LogOut</a></li>
                </ul>
              </li>   
            <?php elseif ($this->session->userdata('is_employer_login')): ?> 
            <li><a href="<?= base_url('employers/profile') ?>"> Dashboard</a>
            <li><a href="<?= base_url('employers/job/listing') ?>"> Manage Jobs</a>
            <li><a href="<?= base_url('employers/cv/search') ?>"> CV Search</a>
            <li><a href="<?= base_url('employers/job/post') ?>"> Post a Job</a> 
            </li>
            <li class="menu-has-children margin-left-400"><img src="<?= base_url()?>assets/img/user.png" alt="user_img"  height=35 /><a href="#"> <?= $this->session->userdata('username'); ?> </a>
                <ul>
                  <li><a href="<?= base_url('employers/profile') ?>">Dashboard</a></li>
                  <li><a href="<?= base_url('employers/job/listing') ?>">Manage Jobs</a></li>
                  <li><a href="<?= base_url('employers/setting/change_password'); ?>">Change Password</a></li>
                <li><a href="<?= base_url('employers/auth/logout')?>">LogOut</a></li>
                </ul>
              </li>   
            <?php else: ?> 
            <li class=""><a href="<?= base_url(); ?>">Home</a></li>
            <li class="menu-has-children"><a href="">Jobs</a>
              <ul>
                <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
              </ul>
            </li>
            <li class=""><a href="<?= base_url('about'); ?>">About</a></li>
            <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
            <li><a class="ticker-btn-nav btn_login mt-1" href="<?= ($this->uri->segment(1) == 'employers')?base_url('employers/auth/login'): base_url('auth/login') ?>"><i class="lnr lnr-user pr-1"></i> Login</a></li>
            <li><a class="nav_btn mt-1" href="<?= base_url('employers') ?>"><i class="lnr lnr-briefcase pr-1"></i> For Employers</a> </li>
            <?php endif; ?>                                 
          </ul>
        </nav><!-- #nav-menu-container -->      
      </div>      
    </div>
  </div>
</header><!-- #header End-->