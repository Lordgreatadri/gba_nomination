<?php include 'includes/header.php'; $user_value = rand(); ?>
        <!--start of steps area-->
	    <div style="margin-top: 70px !important;" class="container col-md-12  mt-3">


	    	<!--start of first section-->

	    	<div class="row  justify-content-center align-items-center my-3 fix" style="">
	    		<input type="hidden" id="user_value" value="<?php echo $user_value ?>">
	    		<div style="" class="">
	    			<h3 class="text-center"><b>WELCOME TO GHANA BEAUTY AWARDS</b></h3>
	    			<h4 style="font-size: 32px !important; letter-spacing: .2rem !important;" class="lead text-center">Please complete the nomination/registration form below</h4>
	    		</div>
	    		

	    		<div class="row col-md-12 justify-content-center">
		    		<span style="display: flex;">
		    			<hr style="border: #fcc22a 1px solid; width: 208px; height: 1.5px; background-color: #fcc22a;"/>
		    			<hr style="border: #57c0ce 1px solid; width: 208px; height:1.5px; background-color: #57c0ce;"/>
			    	    <hr style="border: #e12b74 1px solid; width: 208px; height:1.5px; background-color: #e12b74;"/>
			    	</span>
		        </div>
		    	
	    	</div>

	    	<!--end of first section-->

	    	<!--start of seconf section-->

	    	<div style="max-width:1600px !important;" class="container mt-5">
		    	<div class="row ">
		    		<div class="row col-md-12 justify-content-center  m-2">
		    			<div class="register-form form-card col-md-6">

		    				<form id="registrationForm">
		    					<div class="form-cont mt-3">	
				    			  <label for="">
				    			  	<h4><b>Best Special Effects Makeup Artist</b></h4> 
				    			  	The <b>Best Special Effects Makeup Artist </b>category seeks to award a makeup artist who has shown exceptional and flawless skill in special effects makeup.
									<ul>
										<li>Must be flawlessly skilled across the following areas:</li>
										<ul style="margin-left: 30px;">
											<li>Television</li>
											<li>Film</li>
											<li>Theatre Production</li>
										</ul>
										<li>Entries must be between November 2020 - July 2021 to be eligible</li>
									</ul>
								</label>
									
				    			</div>
				    			

				    			<hr>
			    				<div class="form-cont mt-5">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
									   <option value="Best Special Effects Makeup Artist">Best Special Effects Makeup Artist</option>
									   <option value="Best Editorial Makeup Artist">Best Editorial Makeup Artist</option>
									   <option value="Best Bridal Makeup Artist">Best Bridal Makeup Artist</option>
									   <option value="Hair Stylist of the Year">Hair Stylist of the Year</option>
									   <option value="Bridal Hair Stylist of the Year">Bridal Hair Stylist of the Year</option>
									   <option value="Nail Technician of the Year">Nail Technician of the Year</option>
									   <option value="Beauty Retail Business of the Year">Beauty Retail Business of the Year</option>
									   <option value="Beauty School of the Year">Beauty School of the Year</option>
									   <option value="Indigenous Brand of the Year">Indigenous Brand of the Year</option>
									   <option value="Makeup Brand of the Year">Makeup Brand of the Year</option>
									   <option value="Skincare Brand of the Year">Skincare Brand of the Year</option>
									   <option value="Digital Commerce & Marketing">Digital Commerce & Marketing</option>
									   <option value="Hair Brand of the Year">Hair Brand of the Year</option>
									   <option value="Beauty Vlog of the Year">Beauty Vlog of the Year</option>
									   <option value="Beauty Brand of the Year">Beauty Brand of the Year</option>

									   <option value="Discovery of the Year">Discovery of the Year</option>
									   <option value="Photographer of the Year">Photographer of the Year</option>
									   <option value="Spa and Wellness Center">Spa and Wellness Center</option>
									   <option value="Best Customer Experience">Best Customer Experience</option>
									   <option value="Best Salon/Studio">Best Salon/Studio</option>
									   <option value="Beauty Entrepreneur of the Year">Beauty Entrepreneur of the Year</option>
									   <option value="Colorist of the Year">Colorist of the Year</option>
									   <option value="Barber of the Year">Barber of the Year</option>
									   <option value="People`s Choice Award">People's Choice Award</option>
				    			  </select>
				    			</div>



			    			    <div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee First Name  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="first_name" name="first_name" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee Last Name  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="last_name" name="last_name" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee E-mail  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="email" name="email" placeholder="example@example.com" />
				    			</div>


				    			<div class="form-cont mt-1">	
				    			  <label for="">Mobile Number <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="mobile_number" name="mobile_number" placeholder="" required/>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee Short Bio <span class="red">&#42;</span></label>
				    			  <!-- <input class="form-control" type="text" id="last_name" placeholder="first name" /> -->
				    			  <textarea class="form-control"  name="nominee_bio" id="nominee_bio" placeholder="nominee bio 50 word limit 0/50" ></textarea>
				    			</div>


				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Instagram Account  </label>
				    			  <input class="form-control" type="text" id="instagram" name="instagram" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Facebook Account </label>
				    			  <input class="form-control" type="text" id="facebook" name="facebook" placeholder="eg. makeupghana" />
				    			</div>



				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Other  </label>
				    			  <input class="form-control" type="text" id="other" name="other" placeholder="website eg. www.example.com" />
				    			</div>

				    			<div class="form-cont mt-5">	
				    			  <label style="diplay: inline" for="">Details about the business being nominated for this category <!-- <span class="red">&#42;</span> --></label>
				    			  <input class="form-control" type="text" id="company_details" placeholder="business name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Short Business Profile </label>
				    			  <!-- <input class="form-control" type="text" id="last_name" placeholder="first name" /> -->
				    			  <textarea class="form-control"  name="comapny_bio" id="comapny_bio" placeholder="100 word limit 0/100" ></textarea>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Business' Instagram Account  </label>
				    			  <input class="form-control" type="text" id="company_instagram" name="company_instagram" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Business' Facebook Account </label>
				    			  <input class="form-control" type="text" id="company_facebook" name="company_facebook" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Other  </label>
				    			  <input class="form-control" type="text" id="company_other" name="company_other" placeholder="website eg. www.example.com" />
				    			</div>

				    			<div class="form-cont mt-5">	
				    			  <label style="diplay: inline" for="">Contact details for the main contact person for this nomination <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="company_name" name="company_name" placeholder="business name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">Business' Contact Number <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="phone_number" name="phone_number" placeholder="contact number" required/>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">Business' E-mail<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="company_email" name="company_email" placeholder="example@example.com" required/>
				    			</div>

				    			<hr>


				    			

				    			<div class="form-cont mt-5">
				    				<h5><b>Television Makeup Submission</b></h5>
									<label for="">Submit your best makeup for a Television appearance for this nomination</label>

									<label>Provide Link to Project Pictures <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>

									<label for="">Television:  Description</label>
				    			  <textarea class="form-control  mt-1" id="photo_description" name="photo_description" placeholder="" ></textarea>
				    			  <label for=""><small><i>Please describe the nature of this TV appearance</i></small></label>		    			  
				    			</div>
				    			
				    			<div class="form-cont mt-1">
				    				<label for="">
				    			  	<h5>Film Makeup Submission</h5> 
					    			  	
									</label>

										<label for="">Submit your best makeup for a print publication for this nomination</label>

									<label>Provide Link to Project Pictures <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="special_effect_link">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>

										<label for="">Film:  Description</label>
					    			  <textarea class="form-control  mt-1" id="special_effect_print" name="special_effect_print" placeholder="" ></textarea>
					    			  <label for=""><small><i>Please describe the nature of this Print appearance</i></small></label>
				    			</div>

				    			<hr>

				    			<div class="form-cont mt-1">	
				    			  <label for="">
				    			  	<h5>Theatre Makeup Submission</h5> 
				    			  	
								</label>

									<label for="">Submit your best makeup for a print publication for this nomination</label>

									<label>Provide Link to Project Pictures <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="theatre_link">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>

									<label for="">Theatre:  Description</label>
				    			  <textarea class="form-control  mt-1" id="theatre_description" name="theatre_description" placeholder="" ></textarea>
				    			  <label for=""><small><i>Please describe the nature of this Print appearance</i></small></label>
				    			</div>


				    			<hr>


				    		<div style="display: none;">
				    			<div class="form-cont mt-5">	
				    			    <label for="">
				    			  	 	<h5>Social Media Makeup Submission</h5> 
				    			  	
									</label>

									<label for="">Submit your best makeup on social media for this nomination</label>

									<label>Provide Link to your social media account<span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="social_media_link">
									<label><small><i>Please copy and paste the link to the social media account.)</i></small></label> <br>

									<label for="">Social Media:  Description</label>
				    			  	<textarea class="form-control  mt-1" id="social_media_description" name="social_media_description" placeholder="" ></textarea>
				    			  	<label for=""><small><i>Please describe the nature of this Print appearance</i></small></label>
				    			</div>

				    			<hr>
				    		</div>






				    			<button id="btnSubmit"  class="btn btn-primary mt-3 float-right">Next Page</button>

				    			</form>
			    			</div>

		    		</div>
		    	</div>
	        </div>
	        <!--end of second section-->


	    </div>

	    <!--end of steps area-->





<?php include 'includes/footer.php'; ?>




<script>
	$(document).ready(function(){
        $("#registrationForm").submit(function(event) {
            event.preventDefault();
            const user_value = $("#user_value").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var email = $("#email").val();
            var mobile_number = $("#mobile_number").val();
            var nominee_bio = $("#nominee_bio").val();
            var instagram = $("#instagram").val();
            var facebook = $("#facebook").val();
            var other = $("#other").val();
            var company_details = $("#company_details").val();
            var comapny_bio = $("#comapny_bio").val();
            var company_instagram = $("#company_instagram").val();
            var company_facebook = $("#company_facebook").val();
            var company_other = $("#company_other").val();
            var company_name = $("#company_name").val();
            var phone_number = $("#phone_number").val();
            var company_email = $("#company_email").val();
            var category = $("#category").val();

			var photo_link = $("#photo_link").val();
            var photo_description = $("#photo_description").val();
            var special_effect_link = $("#special_effect_link").val();
            var special_effect_print = $("#special_effect_print").val();
            var theatre_link = $("#theatre_link").val();
            var theatre_description = $("#theatre_description").val();
            var social_media_link = $("#social_media_link").val();
            var social_media_description = $("#social_media_description").val();
            // var bridal_work_description1 = $("#bridal_work_description1").val();
            // var bridal_work_description2 = $("#bridal_work_description2").val();

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/special_effects.php",
                type: "POST",
                data: {
                    first_name,
	             	last_name,
	             	email,
	              	mobile_number,
	             	nominee_bio,
	            	instagram,
	            	facebook,
	             	other,
	             	company_details,
	             	comapny_bio,
	             	company_instagram,
	             	company_facebook,
	            	company_other,
	            	company_name,
	            	phone_number,
	             	company_email,
	             	category,

	             	photo_link,
	            	photo_description,
	            	special_effect_link,
	            	special_effect_print,
	            	theatre_link,
	             	theatre_description,
	             	social_media_link,
	             	social_media_description,
	             	user_value
	              //   bridal_work_description2 
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');special_effects_update.php?user='+user_value+'&category='+category
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#registrationForm').trigger('reset');
                		console.log(response);
                		window.location.href = 'upload_none_business_document.php?user_value='+user_value+'&category='+category+'&user_name='+first_name;
                	}else{
                		console.log(response);
                		alert(response.message);
                	}
                },
                error:function(response){
                	console.log(response);
                	alert(response);
                }
            });
        });
    });
</script>
