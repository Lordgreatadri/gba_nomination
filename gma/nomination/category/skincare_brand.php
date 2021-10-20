<?php include 'includes/header.php'; $user_value =   substr(md5(time()), 0, 22);?>
        <!--start of steps area-->
	    <div style="margin-top: 70px !important;" class="container col-md-12  mt-3">


	    	<!--start of first section-->

	    	<div class="row  justify-content-center align-items-center my-3 fix" style="">
	    		<input type="hidden" id="user_value" value="<?php echo $user_value ?>">
	    		<div style="" class="">
	    			<h3 class="text-center"><b>WELCOME TO MAKEUP AWARDS NOMINATION</b></h3>
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
				    			  	<h5><b>Skincare Brand of the Year</b></h5> 
				    			  	The <b>Skincare Brand of the Year</b> category seeks to find the best skincare product designed for regular daily use on the face and neck.
									<ul>
										<!-- <li>This category is open to any skincare product designed for regular daily use on the face and neck.</li> -->
										<li>This includes but is not limited to exfoliators, masks, moisturisers, cleansers and toners, skin care wipes, essences, oils and BB creams</li>
										<li>Entries will be judged on the following criteria:</li>
										<ul style="margin-left: 30px;">
											<li>Consumer Appeal (Public Votes)</li>
											<li>Design & Packaging (Design and packaging that exceeds expectation in terms of its presentation, usability and functionality.)</li>
											<li>Product Distribution(Availability on the market)</li>
											<li>Marketing</li>
										</ul>
										<li>Products entered into this category must have approval from relevant licensing body (Eg. Food and Drug Authority and/or Ghana Standards Authority)</li>
										<li>Must have been available within Ghana for at least 1 Year, that is available for sale on or before December 31, 2020, to be eligible for this edition.</li>
									</ul>
								</label>
									<label><b>Eligibility</b></label>
				    			  	<label>Products must be LICENSED and have been available within Ghana for AT LEAST 1 YEAR</label>
				    			</div>


			    				<div class="form-cont mt-3">	
				    			  <label for="">  Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
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
				    			  <label style="diplay: inline" for="">Details about the business being nominated for this category<!--  <span class="red">&#42;</span> --></label>
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
				    				<h5><b>Product Design</b></h5>
									<label for="">Submissions to showcase the design and packaging  in terms of its unique presentation, usability and functionality.</label> <br>
									<label for="">Comments or Additional Info<span class="red">&#42;</span></label>
				    			    <textarea class="form-control"  name="skincare_product_comment" id="skincare_product_comment" placeholder="" ></textarea required>				    			    		    			
				    			</div>

				    			


				    			<hr>


				    		<div style="display: none;">

				    			<div class="form-cont mt-5">	
				    			    <label for="">
				    			  	 	<h5><b>Marketing & Distribution</b></h5> 				    			  
									</label>
									<br>
									<label for="">Submissions around marketing, branding & distribution for this nomination</label>
									<label for=""><b>Product Marketing</b></label>
									<label for="">Submissions to showcase marketing initiatives towards marketing this product. Sample Marketing can use EITHER links to online content (social media posts, YouTube links or links to a website)</label>
				    			  	
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label>Provide Links to your business' social media accounts or website <span class="red">&#42;</span></label>
									<textarea  class="form-control" id="media_links" ></textarea>
									<label><small><i>Please list down links to social media accounts (e.i 1. https://www.instagram.com/group_mcc/; 2. https://twitter.com/group_mcc)</i></small></label> <br>
				    			</div>

				    		</div>




				    			<div class="form-cont mt-1">	
									<label for=""><b>Distribution Network</b></label>
				    			  	<label>Submissions to support the significance of the product's distribution and sales network within the industry. Provide your total number of distribution outlets and contacts to your Top Regional distributors, providing one per region, if applicable.</label>
				    			  	<label for="">Total Number of Distribution Outlets<span class="red">&#42;</span></label>
				    			    <input type="text" class="form-control  mt-1" id="skincare_total_outlets" name="skincare_total_outlets" placeholder="" required>
				    			</div>

				    			<hr>


				    			


				    			


				    			<button id="btnSubmit"  class="btn btn-primary mt-3 float-right">Submit</button>

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

            var media_links = $("#media_links").val();
            var skincare_product_comment = $("#skincare_product_comment").val();
            var skincare_total_outlets = $("#skincare_total_outlets").val();


            //restrict submitting if first_name is not provided rexmerlo
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/skincare_brand_entry.php",
                type: "POST",
                data: {
                	user_value,
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

	             	media_links,
	             	skincare_product_comment,
	             	skincare_total_outlets


                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');skincare_brand_update.php?user='+user_value+'&category='+category
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#registrationForm').trigger('reset');
                		console.log(response);
                		window.location.href = '../register.html?user='+user_value+'&category='+category;
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




