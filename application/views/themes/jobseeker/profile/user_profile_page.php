    <!-- start banner Area -->
    <section class="banner-area relative" id="home">  
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Canidate Profile        
            </h1> 
            <p class="text-white link-nav"><a href="<?= base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Canidate Profile</a></p>
          </div>                      
        </div>
      </div>
    </section>
    <!-- End banner Area -->  

    <!-- Start post Area -->
    <section class="post-area section-gap">
      <div class="container">
        <div class="row justify-content-center d-flex">
          <div class="col-lg-4 sidebar">            
            <?php $this->load->view($user_sidebar); ?>
          </div>
          <div class="col-lg-8 post-list">

            <?php if ($this->session->flashdata('file_error')) {
              echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
            } ?>

            <?php if ($this->session->flashdata('error_update')) {
              echo '<div class="alert alert-danger">' . $this->session->flashdata('error_update') . '</div>';
            } ?>

            <?php if ($this->session->flashdata('update_success')) {
              echo '<div class="alert alert-success">' . $this->session->flashdata('update_success') . '</div>';
            } ?>

            <?php $attributes = array('id' => 'update_user_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
            <?php echo form_open_multipart('profile',$attributes);?>

            <div class="profile_job_content col-lg-12">
              <div class="headline">
                <h3> Basic Information</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>First Name *</h5>
                      <input class="form-control" type="text" name="firstname" value="<?= $user_info['firstname']  ?>" placeholder="John Wick">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Last Name *</h5>
                      <input class="form-control" type="text" name="lastname" value="<?= $user_info['lastname']  ?>" placeholder="John Wick">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Email *</h5>
                      <input class="form-control" type="email" name="email" value="<?= $user_info['email']  ?>" placeholder="example@example.com">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Date of Birth:</h5>
                      <input class="form-control" type="date" name="dob" value="<?= $user_info['dob']  ?>">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Phone *</h5>
                      <input class="form-control" type="tel" name="mobile_no" value="<?= $user_info['mobile_no']  ?>" placeholder="444 5555 66666">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Nationality *</h5>
                      <select name="nationality" class="form-control">
                        <option>Select Nationality</option>
                         <?php foreach($countries as $country):?>
                            <?php if($user_info['nationality'] == $country['id']): ?>
                              <option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
                            <?php else: ?>
                              <option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
                          <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Category *</h5>
                      <select class="form-control" name="category">
                        <option value="">Select Category</option>
                        <?php foreach($categories as $category):?>
                            <?php if($user_info['category'] == $category['id']): ?>
                            <option value="<?= $category['id']; ?>" selected> <?= $category['name']; ?> </option>
                          <?php else: ?>
                            <option value="<?= $category['id']; ?>"> <?= $category['name']; ?> </option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Job Title *</h5>
                      <input class="form-control" type="text" name="job_title" value="<?= $user_info['job_title']; ?>" placeholder="web developer & designer">
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                      <h5>Description *</h5>
                      <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae. Praesent vitae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt.Donec pretium gravida erat, a faucibus velit egestas eget."><?= $user_info['description']; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="profile_job_content col-lg-12 mt-5">
              <div class="headline">
                <h3>Address / Location</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Country *</h5>
                      <select name="country" class="form-control">
                        <option>Select Country</option>
                         <?php foreach($countries as $country):?>
                            <?php if($user_info['country'] == $country['id']): ?>
                              <option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
                            <?php else: ?>
                              <option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
                          <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>City / Town *</h5>
                      <select name="city" class="form-control">
                        <option>Select City</option>
                        <?php foreach($cities as $city):?>
                            <?php if($user_info['city'] == $city['id']): ?>
                            <option value="<?= $city['id']; ?>" selected> <?= $city['name']; ?> </option>
                          <?php else: ?>
                            <option value="<?= $city['id']; ?>"> <?= $city['name']; ?> </option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Postcode *</h5>
                      <input type="tel" name="postcode" value="<?= $user_info['postcode']  ?>" class="form-control" placeholder="12345">
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                      <h5>Full Address *</h5>
                      <input type="text" name="address" value="<?= $user_info['address']  ?>" class="form-control" >
                    </div>
                  </div>
                </div>
              </div>
            </div>  

            <div class="profile_job_content col-lg-12 mt-5">
              <div class="headline">
                <h3>Other Information</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Experience *</h5>
                      <select name="experience" class="form-control">
                        <option value="0-1" <?php if($user_info['experience'] == '0-1'){ echo "selected";} ?>>0-1 Years</option>
                        <option value="1-2" <?php if($user_info['experience'] == '1-2'){ echo "selected";} ?>>1-2 Years</option>
                        <option value="2-5" <?php if($user_info['experience'] == '2-5'){ echo "selected";} ?>>2-5 Years</option>
                        <option value="5-10" <?php if($user_info['experience'] == '5-10'){ echo "selected";} ?>>5-10 Years</option>
                        <option value="10-15" <?php if($user_info['experience'] == '10-15'){ echo "selected";} ?>>10-15 Years</option>
                         <option value="15+" <?php if($user_info['experience'] == '15+'){ echo "selected";} ?>>15+ Years</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Age *</h5>
                      <select name="age" class="form-control">
                        <option>20</option>
                        <option>19</option>
                        <option>18</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Current Salary($) *</h5>
                      <select name="current_salary" class="form-control">
                        <option>Select Salary</option>
                        <?php for($i=500; $i<10000; $i=$i+500): ?>
                          <?php if($user_info['current_salary'] == $i): ?>
                          <option value="<?= $i; ?>" selected> <?= $i; ?> </option>
                        <?php else: ?>
                            <option value="<?= $i; ?>"> <?= $i; ?> </option>
                        <?php endif; endfor; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Expected Salary($) *</h5>
                      <select name="expected_salary" class="form-control">
                        <option>Select Salary</option>
                        <?php for($i=500; $i<10000; $i=$i+500): ?>
                            <?php if($user_info['expected_salary'] == $i): ?>
                          <option value="<?= $i; ?>" selected> <?= $i; ?> </option>
                        <?php else: ?>
                            <option value="<?= $i; ?>"> <?= $i; ?> </option>
                        <?php endif; endfor; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Education Levels *</h5>
                      <select name="education_level" class="form-control">
                        <option>Select Education</option>
                        <?php foreach($educations as $education):?>
                          <?php if($user_info['education_level'] == $education['id']): ?>
                          <option value="<?= $education['id']; ?>" selected> <?= $education['type']; ?> </option>
                          <?php else: ?>
                            <option value="<?= $education['id']; ?>"> <?= $education['type']; ?> </option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                      <h5>Skills *</h5>
                      <input type="tel" name="skills" value="<?= $user_info['skills']  ?>" class="form-control" placeholder="eg, html, css, php, javascript">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                        <h5>Resume * <small>(Maximum file size is 100kb, pdf, docx)</small></h5>
                        <input type="file" name="userfile" value="" class="onjob-upload">
                        <input type="hidden" name="old_resume" value="<?= $user_info['resume']; ?>" >
                        <?php if(!empty($user_info['resume'])): ?>    
                          <a class="btn btn-outline" href="<?= base_url().$user_info['resume']; ?>"><i class="lnr lnr-download"></i> <small>Downloaded Uploaded Resume</small></a>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="add_job_btn col-lg-12 mt-5">
              <div class="submit-field">
                <input type="submit" class="btn job_detail_btn" name="update" value="Update">
             </div>
           </div>   
           <?php echo form_close();?>                           
         </div>
       </div>
     </div>  
   </section>
   <!-- End post Area -->    