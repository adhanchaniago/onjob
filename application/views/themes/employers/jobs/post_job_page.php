<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Post a New Job				
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Post a New Job</a></p>
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
				<?php $this->load->view($emp_sidebar); ?>
			</div>
			
			<div class="col-lg-8 post-list">
				<div class="row">
					<div class="col-12">
						<?php 
							if ($this->session->flashdata('post_job_success')) {
				                echo '<div class="alert alert-success">' . $this->session->flashdata('post_job_success') . '</div>';
				            }
							if($this->session->flashdata('post_job_error')){
				                echo '<div class="alert alert-danger">' . $this->session->flashdata('post_job_error') . '</div>';
				        	}
						?>
					</div>

					<?php $attributes = array('id' => 'post_job', 'method' => 'post');
        			echo form_open('employers/job/post',$attributes);?>

					<div class="add_job_content col-lg-12">
						<div class="headline">
							<h3><i class="fa fa-folder-o"></i> Post a New Job</h3>
						</div>
						<div class="add_job_detail">
							<div class="row">
								<div class="col-12">
									<div class="submit-field">
										<h5>Job Title*</h5>
										<input type="text" name="job_title" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Type*</h5>
										<select name="job_type" class="form-control">
											<option>Select Job Type</option>
											<option value="full-time">Full Time</option>
											<option value="freelance">Freelance</option>
											<option value="part-time">Part Time</option>
											<option value="internship">Internship</option>
											<option value="temporary">Temporary</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Category*</h5>
										<select class="form-control" name="category">
										   <option>Select Category</option>
										   <?php foreach($categories as $category): ?>
										   		<option value="<?= $category['id']?>"><?= $category['name']?></option>
										   <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Indusry*</h5>
										<select class="form-control" name="industry">
										   <option>Select Indusry</option>
										   <?php foreach($industries as $industry):?>
										   		<option value="<?= $industry['id']?>"><?= $industry['name']?></option>
										   <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Working Experience*</h5>
										<select class="form-control" name="experience" >
											<option value="0-1">0-1 Years</option>
											<option value="1-2" >1-2 Years</option>
											<option value="2-5">2-5 Years</option>
											<option value="5-10">5-10 Years</option>
											<option value="10-15">10-15 Years</option>
											<option value="15+">15+ Years</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5>Salary*</h5>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<select name="min_salary" class="form-control">
														<?php for($i=500; $i<10000; $i=$i+500): ?>
												   			<option value="<?= $i; ?>"><?= $i; ?></option>
													    <?php endfor; ?>
													</select>
													<div class="input-group-append">
														<span class="input-group-text">$</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<select name="max_salary" class="form-control">
														<?php for($i=500; $i<10000; $i=$i+500): ?>
												   			<option value="<?= $i; ?>"><?= $i; ?></option>
													    <?php endfor; ?>
													</select>
													<div class="input-group-append">
														<span class="input-group-text">$</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5> Skills*</h5>
										<input type="text" name="skills" class="form-control" placeholder="e.g. job title, responsibilites">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Job Description*</h5>
										<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field"> 
										<h5>Position Available*</h5>
										<select name="total_positions" class="form-control">	
									  	    <?php for($i=1; $i<30; $i++): ?>
									   			<option value="<?= $i; ?>"><?= $i; ?></option>
										    <?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field"> 
										<h5>Gender Requirement*</h5>
										<select name="gender" class="form-control">	
									   		<option value="Male">Male</option>
									   		<option value="Female">Female</option>
									   		<option value="No Preference" selected="">No Preference</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Employment Type*</h5>
										<select class="form-control" name="employment_type" >
											<option value="">Select Employment Type</option>
											<option value="employee">Employee</option>
											<option value="internship">Internship</option>
											<option value="contractor">Contractor</option>
											<option value="temporary-employee">Temporary Employee</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Education*</h5>
										<select class="form-control" name="education">
											<option value="">Select Education</option>
											<?php foreach($educations as $row): ?>
												<option value="<?= $row['id']; ?>"> <?= $row['type']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Country*</h5>
										<select class="form-control" name="country">
										   <option>Select Country</option>
										    <?php foreach($countries as $country):?>
										   		<option value="<?= $country['id']?>"><?= $country['name']?></option>
										    <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>City*</h5>
										<select class="form-control" name="city">
										   <option>Select City</option>
									  	    <?php foreach($cities as $city):?>
									   			<option value="<?= $city['id']?>"><?= $city['name']?></option>
										    <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5>Location*</h5>
										<input type="text" name="location" class="form-control" placeholder="Type Address">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="add_job_btn col-lg-12 mt-3">
						<div class="submit-field">
							<input type="submit" class="job_detail_btn" name="post_job" value="Submit">
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>													
			</div>

		</div>
	</div>	
</section>
<!-- End post Area -->	