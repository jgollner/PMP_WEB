	
	
	<section id="land">
		<div class="landing landing-8 landing-sm">
			<div class="land-intro">
				<!-- <h1>A team with over 35 Years of Experience</h1> -->

			</div>
		</div>
	</section>



	<div class="wwd-content">
		<div class="content-title">
			<h1>Partner with Pitt Meadows Plumbing</h1>
		</div>

		<div class="content-underline">
			<div class="red-underline"></div>
		</div>

		<div class="wwd-body form">
			<div class="grid">
				<div class="unit unit-s-1 unit-m-1 unit-l-1 text_left">
					<div class="wwd-body-type">
						<p>Is your company interested in partnering with Pitt Meadows Plumbing for a future project?<br />
						Please fill out the Partnership Form below and we will keep your business contact information in our records.</p><br>
					</div>
				</div>
			</div>
		</div>

		<div class="wwd-body form">
			<div class="grid">
				<div class="unit unit-s-1 unit-m-1 unit-l-1">
					<div class="wwd-body-type">
					
						<link rel="stylesheet" type="text/css" href="css/register.css"/>
						
						<p class="note req">* required fields</p>
						
						<form id="partner_form" name="partner_form" method="post" action="i.formmail_partner.php" style="margin: 0; padding: 0;">
							
							<div class="field">
								<label><span class="req">*</span>Company Name</label>
							</div>
							<div class="field">
								<input type="text" class="validate[required,custom[CompanyName]]" id="company_name" name="company_name" value="" tabindex="1" />
							</div>
							
							<div class="field">
								<label><span class="req">*</span>Company Phone</label>
							</div>
							<div class="field">
								<input type="text" class="validate[required,custom[Phone]]" id="company_phone" name="company_phone" value="" tabindex="2" />
							</div>
							
							<div class="field">
								<label><span class="req">*</span>Company Email</label>
							</div>
							<div class="field">
								<input type="email" class="validate[required,custom[Email]]" id="company_email" name="company_email" value="" tabindex="3" />
							</div>
							
							<div class="field">
								<label><span class="req">*</span>Contact First Name</label>
							</div>
							<div class="field">
								<input type="text" class="validate[required,custom[FirstName]]" id="first_name" name="first_name" value="" tabindex="4" />
							</div>
							
							<div class="field">
								<label><span class="req">*</span>Contact Last Name</label>
							</div>
							<div class="field">
								<input type="text" class="validate[required,custom[LastName]]" id="last_name" name="last_name" value="" tabindex="5" />
							</div>
							
							<div class="field">
								<label>Contact Phone <span class="note">(if different from above)</span></label>
							</div>
							<div class="field">
								<input type="text" class="validate[custom[Phone]]" id="phone" name="phone" value="" tabindex="6" />
							</div>
							
							<div class="field">
								<label>Contact Email <span class="note">(if different from above)</span></label>
							</div>
							<div class="field">
								<input type="email" class="validate[custom[Email]]" id="email" name="email" value="" tabindex="7" />
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div>
							<h1><small>SUBTRADE CHECKLIST</small></h1>
							</div>
							
							<div class="field">
								<label><span class="req">*</span>Which sub-trades does your company identify with?<br />
								Please check all that apply.</label><br />
							</div>
							<div class="field">
								<input type="checkbox" id="cb1" name="subtrade[]" value="Fire Protection" class="validate[required] checkbox" tabindex="8" />
								<label class="block" for="cb1"><span></span>Fire Protection</label>
								
								<input type="checkbox" id="cb2" name="subtrade[]" value="Sheet Metal" class="validate[required] checkbox" tabindex="9" />
								<label class="block" for="cb2"><span></span>Sheet Metal</label>
								
								<input type="checkbox" id="cb3" name="subtrade[]" value="Refrigeration" class="validate[required] checkbox" tabindex="10" />
								<label class="block" for="cb3"><span></span>Refrigeration</label>
								
								<input type="checkbox" id="cb4" name="subtrade[]" value="Insulation" class="validate[required] checkbox" tabindex="11" />
								<label class="block" for="cb4"><span></span>Insulation</label>
								
								<input type="checkbox" id="cb5" name="subtrade[]" value="Controls" class="validate[required] checkbox" tabindex="12" />
								<label class="block" for="cb5"><span></span>Controls</label>
								
								<input type="checkbox" id="cb6" name="subtrade[]" value="Balancing" class="validate[required] checkbox" tabindex="13" />
								<label class="block" for="cb6"><span></span>Balancing</label>
								
								<input type="checkbox" id="cb7" name="subtrade[]" value="Commissioning" class="validate[required] checkbox" tabindex="14" />
								<label class="block" for="cb7"><span></span>Commissioning</label>
								
								<input type="checkbox" id="cb8" name="subtrade[]" value="Manuals" class="validate[required] checkbox" tabindex="15" />
								<label class="block" for="cb8"><span></span>Manuals</label>
								
								<input type="checkbox" id="cb9" name="subtrade[]" value="Fixtures" class="validate[required] checkbox" tabindex="16" />
								<label class="block" for="cb9"><span></span>Fixtures</label>
								
								<input type="checkbox" id="cb10" name="subtrade[]" value="Equipment" class="validate[required] checkbox" tabindex="17" />
								<label class="block" for="cb10"><span></span>Equipment</label>
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div class="field_full">
								<label><span class="req">*</span>What fixture brands do you supply?</label>
								<textarea class="validate[required]" id="fixture_brands" name="fixture_brands" rows="5" cols="50" tabindex="18"></textarea>
							</div>
							
							<div class="field_full">
								<label><span class="req">*</span>What specific equipment do you supply?</label>
								<textarea class="validate[required]" id="equipment" name="equipment" rows="5" cols="50" tabindex="19"></textarea>
							</div>
							
							<div class="clear"></div>
							<br />
							
							<div class="disclaimer">
							Please ensure that all contact information is correct. Your responses will be kept in our records for use in future projects. Thank you for your interest in partnering with us.
							</div>
							
							<div class="button">
								<button type="submit" name="submitForm" id="submitForm" class="btn_submit" tabindex="18">Send Form</button>
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
	$("#partner_form").validationEngine({
		promptPosition : "bottomLeft",
		scroll: false,
		showOneMessage: true
	});
});
</script>	