<?php include 'includes/header.php'; $user_value =   substr(md5(time()), 0, 22);?>
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
		    					
				    			<div class="form-cont mt-5">	
				    			  <label for="">
				    			  	<h3><b>Beauty Product of the Year</b></h3> 
				    			  	The <b>Beauty Product of the Year</b> category seeks to reward the best decorative beauty product.
								</label>
									<ul>
										<!-- <li>This category is open to any decorative cosmetic product or accessory used on the face, eye and lips.</li>
										<ul style="margin-left: 30px;">
											<li>For face, this includes but is not limited to foundation, skin primer, CC Cream, face powders, cream, powder blush and concealer.</li>
											<li>For eyes, this includes but is not limited to including but not limited to eye shadow, eyeliner, kohl, mascara and brow liner/kit.</li>
											<li>For lips, this includes but is not limited to lip colour, lip liner and lip-gloss.</li>
										</ul> -->
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
				    			</div>
				    			<div class="form-cont mt-2">	
				    			  <label for="">
				    			  	<b>Eligibility</b></label>
				    			  	<label>Products must be LICENSED and have been available within Ghana for AT LEAST 1 YEAR, unless otherwise exempted from licensing or certification. If your product is exempt, please provide other proof of availability, such as a Customs Document, Purchase Order, Press or Media in Print or Third Party websites.</label>				
				    			</div>

			    				<div class="form-cont mt-3">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
				    			  	<option value="Beauty Product of the Year">Beauty Product of the Year</option>
									   <option value="Makeup Brand of the Year">Makeup Brand of the Year</option>
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
				    			  <label style="diplay: inline" for="">Short business Profile </label>
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

				    			<div class="form-cont mt-3">	
									<label for=""><b>Product Design</b></label>
									<label>Submissions to showcase the design and packaging  in terms of its unique presentation, usability and functionality.</label>
									<label for="">Comments or Additional Info<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control  mt-1" id="makeup_product_comment" name="makeup_product_comment" placeholder="" required></textarea>
				    			  	<label for=""><small><i>Not more than 100 words 0/100</i></small></label>
				    			</div>
				    			<!-- <div class="form-cont mt-1">	
				    				<label><b>Marketing & Distribution</b></label>
				    				<label>Submissions around marketing, branding & distribution for this nomination</label>
				    				<label>Sample Marketing can use EITHER links to online content (social media posts, YouTube links or links to a website) </label>				    			  
				    			</div> -->
				    			<div class="form-cont mt-1">	
				    				<label><b>Product Marketing</b></label>
				    				<label>Sample Marketing can use EITHER links to online content (social media posts, YouTube links or links to a website).</label>
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label>Provide Links to your business' social media accounts or website <span class="red">&#42;</span></label>
									<textarea  class="form-control" id="media_links" required></textarea>
									<label><small><i>Please list down links to social media accounts (e.i 1. https://www.instagram.com/group_mcc/; 2. https://twitter.com/group_mcc)</i></small></label> <br>
				    			</div>
				    			<div class="form-cont mt-1">	
				    				<label>Total Number of Distribution Outlets<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="total_makeup_product_outlet" name="total_makeup_product_outlet" placeholder="" required/>
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




            //################################################
            //THIS NOMINATION HAS SAME FIELDS AS SKINCARE PRODUCT SO PASING THE VALUES TO SKINCARE PROCESSOR
            var media_links = $("#media_links").val();
            var skincare_product_comment = $("#makeup_product_comment").val();
            var skincare_total_outlets = $("#total_makeup_product_outlet").val();


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




