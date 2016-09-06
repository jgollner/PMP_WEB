	
	
	<section id="land">
		<div class="landing landing-8 landing-sm">
			<div class="land-intro">
				<!-- <h1>A team with over 35 Years of Experience</h1> -->

			</div>
		</div>
	</section>



	<div class="wwd-content">
		<div class="content-title">
			<h1>Why Work For Us?</h1>
		</div>

		<div class="content-underline">
			<div class="red-underline"></div>
		</div>

		<div class="wwd-body form">
			<div class="grid">
				<div class="unit unit-s-1 unit-m-1 unit-l-1 text_left">
					<div class="wwd-body-type">
						<p>Pitt Meadows Plumbing provides employees with a safe work environment and competitive wages. Other employee benefits include:</p><br>
						
						<div>
							<ul>
							<li>Long-term, full-time employment</li>
							<li>Apprenticeship registration & sponsorship</li>
							<li>Subsidies for training & upgrading skills</li>
							<li>Employer-paid medical, dental, life and disability insurance</li>
							<li>Company vehicles for senior employees</li>
							</ul>
						</div>
						
						<button id="apply_now" class="btn_submit">Apply Now</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="wwd-content" id="application_form" style="display: none;">
		<div class="content-title">
			<h1>Apply for Position</h1>
		</div>

		<div class="content-underline">
			<div class="red-underline"></div>
		</div>

		<div class="wwd-body form">
			<div class="grid">
				<div class="unit unit-s-1 unit-m-1 unit-l-1">
					<div class="wwd-body-type">
					
						<link rel="stylesheet" type="text/css" href="css/register.css"/>
						
						<p>Please complete the online application below. All applications will be reviewed.</p>
						
						<p class="note req">All fields are required</p>
						
						<form id="career_form" name="career_form" method="post" action="i.formmail_careers.php" enctype="multipart/form-data" style="margin: 0; padding: 0;">
							
							<div class="field">
								<label>First Name</label>
								<input type="text" class="validate[required,custom[FirstName]]" id="first_name" name="first_name" value="" tabindex="1" />
							</div>
							
							<div class="field">
								<label>Last Name</label>
								<input type="text" class="validate[required,custom[LastName]]" id="last_name" name="last_name" value="" tabindex="2" />
							</div>
							
							<div class="field">
								<label>Phone</label>
								<input type="text" class="validate[required,custom[Phone]]" id="phone" name="phone" value="" tabindex="3" />
							</div>
							
							<div class="field">
								<label>Email</label>
								<input type="email" class="validate[required,custom[Email]]" id="email" name="email" value="" tabindex="4" />
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div class="field">
								<label>Do you own a reliable vehicle?</label>
							</div>
							<div class="field">
								<input type="radio" id="rb1" name="vehicle" value="Yes" class="validate[required] radio" tabindex="5" />
								<label for="rb1"><span></span>Yes</label>&nbsp; &nbsp; &nbsp;
								<input type="radio" id="rb2" name="vehicle" value="No" class="validate[required] radio" tabindex="6" />
								<label for="rb2"><span></span>No</label>
							</div>
							
							<div class="field">
								<label>Do you own plumbing and/or construction tools?</label>
							</div>
							<div class="field">
								<input type="radio" id="rb3" name="tools" value="Yes" class="validate[required] radio" tabindex="7" />
								<label for="rb3"><span></span>Yes</label>&nbsp; &nbsp; &nbsp;
								<input type="radio" id="rb4" name="tools" value="No" class="validate[required] radio" tabindex="8" />
								<label for="rb4"><span></span>No</label>
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div class="field">
								<label>Upload Resume</label>
							</div>
							<div class="field">
								<input type="file" id="upload_resume" name="upload_resume" class="validate[required]" tabindex="9">
							</div>
							
							<div class="field">
								<label>Upload Cover Letter</label>
							</div>
							<div class="field">
								<input type="file" id="upload_cover" name="upload_cover" class="validate[required]" tabindex="10">
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div>
							<h1><small>EDUCATION</small></h1>
							</div>
							
							<div class="field">
								<label>Secondary School Attended</label>
							</div>
							<div class="field">
								<input type="text" class="validate[required]" id="secondary_school" name="secondary_school" value="" tabindex="10" />
							</div>
							
							<div class="field">
								<label>Last Grade Completed</label>
							</div>
							<div class="field">
								<input type="text" class="validate[required]" id="grade_completed" name="grade_completed" value="" tabindex="11" />
							</div>
							
							<div class="field">
								<label>Graduation Date</label>
							</div>
							<div class="field">
								<input type="date" class="validate[required]" id="graduation_date" name="graduation_date" value="" tabindex="12" />
							</div>
							
							<div class="field_full">
								<label>Post Secondary Education</label>
								<textarea class="validate[required]" id="postsecondary_education" name="postsecondary_education" rows="5" cols="50" tabindex="13"></textarea>
							</div>
							
							<div class="field_full">
								<label>Construction Experience</label>
								<textarea class="validate[required]" id="construction_experience" name="construction_experience" rows="5" cols="50" tabindex="14"></textarea>
							</div>
							
							<div class="field_full">
								<label>Why would you make an ideal employee of Pitt Meadows Plumbing?</label>
								<textarea class="validate[required]" id="ideal_employee" name="ideal_employee" rows="5" cols="50" tabindex="15"></textarea>
							</div>
							
							<div class="field_full">
								<label>What activities are important to you outside of work?</label>
								<textarea class="validate[required]" id="activities" name="activities" rows="5" cols="50" tabindex="16"></textarea>
							</div>
							
							<div class="field_full">
								<label>Anything else you’d like us to know?</label>
								<textarea class="validate[required]" id="anything_else" name="anything_else" rows="5" cols="50" tabindex="17"></textarea>
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div class="disclaimer">
							Pitt Meadows Plumbing & Mechanical Systems (2001) Ltd. takes your privacy seriously. Submitted information is for hiring purposes only. We do not discriminate based on gender, race or religion.
							</div>
							
							<div class="button">
								<button type="submit" name="submitForm" id="submitForm" class="btn_submit" tabindex="18">Send Application</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">
<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	// binds form submission and fields to the validation engine
	$("#career_form").validationEngine({
		promptPosition : "bottomLeft",
		scroll: false,
		showOneMessage: true
	});
});
</script>	