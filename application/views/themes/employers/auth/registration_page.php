
<!-- registration-section-starts -->
<div class="container-login100">
  <div class="wrap-login100" style="width: 650px;">
    <div class="container">
      <span class="login100-form-title pb-5">
       Sign up <small>(Employers)</small>
      </span>
      
      <div class="line-title-left"></div>
      <?php 
      if($this->session->flashdata('error')){
        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
      }
      ?>

      <?php $attributes = array('id' => 'registeration_form', 'method' => 'post'); ?>
      <?php echo form_open('employers/auth/registration',$attributes); ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter your first name" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter your last name" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" />
          </div>
        </div>
        <div class="col-lg-6">      
         <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirmpassword" class="form-control" placeholder="Enter your password again" />
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5>Company Information</h5>
        <hr />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Company Name</label>
          <input type="text" name="company_name" class="form-control" placeholder="" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="category" id="">
            <option value="">Select category</option>
            <?php foreach($categories as $category):?>
              <option value="<?= $category['id']?>"><?= $category['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label>Organization Type</label>
          <select class="form-control" name="org_type" id="org_type">
            <option value="Private">Private</option>
            <option value="Public">Public</option>
            <option value="Government">Government</option>
            <option value="NGO">NGO</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control" placeholder="" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label>Country</label>
          <select class="form-control" name="country" id="country">
            <option>Select Country</option>
            <?php foreach($countries as $country):?>
              <option value="<?= $country['id']?>"><?= $country['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label>City</label>
          <select class="form-control" name="city">
            <option>Select City</option>
            <?php foreach($cities as $city):?>
              <option value="<?= $city['id']?>"><?= $city['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label>Phone No.</label>
          <input type="text" name="phone_no" class="form-control" placeholder="" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label>Website</label>
          <input type="text" name="website" class="form-control" placeholder="" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Company Description.</label>
          <textarea name="description" class="form-control" placeholder=""></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <input type="checkbox" name="termsncondition"> Agree to our <small> Terms and Conditions</small>
        </div>
        <div class="form-group">
          <input type="submit" class="login100-form-btn btn-block" name="submit" value="Register">
        </div>
      </div>
    </div>
    <?php echo form_close(); ?>
    <div class="text-center w-full pt-4">
          <span class="txt1">
            Already have an account?
          </span>
          <a class="txt1 bo1 hov1" href="<?= base_url(); ?>employers/auth/login">
            SignIn now             
          </a>
      </div>
  </div>  
</div>  
</div>


<!-- registration-section-Ends -->
