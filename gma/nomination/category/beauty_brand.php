<?php include 'includes/header.php'; $user_value =   substr(md5(time()), 0, 22); ?>
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
				    			  	<h5><b>Beauty Brand of the Year</b></h5> 
				    			  	<br>
				    			  	<label>This category seeks to celebrate the most popular consumer brand with the highest industry regard and accolades for marketing, customer service and supporting the beauty industry</label>
									<ul>
										<li>Must have brand presence on digital and social channels</li>										
										<li>High quality branding, marketing and advertising standards</li>
										<li>Must be popular and highly regarded in the industry</li>
										<li>Good number of distribution outlets & product availability across the country</li>								
										<li>Good CSR (Corporate Social Responsibility) policies</li>
										<li>Contribution to the industry</li>
										<li>Good sales assistants/technique of sales</li>
										<li>Must have been in existence for at least 5 years</li>
									</ul>
								</label>
									<h5><b>Eligibility</b></h5>
									<label>Brand nominees for this category must have been at least 5 years in existence.</label>			
				    			</div>

			    				<div class="form-cont mt-3">	
				    			  <label for="">  Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
									   <option value="Beauty Brand of the Year">Beauty Brand of the Year</option>
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


				    		<div style="display: none;">
				    			<div class="form-cont mt-5">	
									<h5>Marketing, Branding & Visibility</h5>
									Submissions around marketing, branding & visibility for this nomination
									<h5>Brand Marketing</h5>
									Submissions to support the significance of a brand's marketing reach and popularity using social media reach and influence. Provide <b>up to ten (10)</b> brand social media accounts, as applicable. 
									
									
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label>Provide Links to your business' social media accounts <span class="red">&#42;</span></label>
									<textarea  class="form-control" id="media_links" ></textarea>
									<label><small><i>Please list down links to social media accounts (e.i 1. https://www.instagram.com/group_mcc/; 2. https://twitter.com/group_mcc)</i></small></label> <br><br>
				    			</div>
				    		</div>



				    			<div class="form-cont mt-3">
				    				<h5>Brand Visibility</h5>
									Submissions to support the significance of a brand's visibility within the industry using events sponsorships. Provide your total number of events sponsored and your Top 3 sponsorships with highest brand visibility or impact below.
									<br><br>
									<label for="">Total Number of Events Sponsored <span class="red">&#42;</span> </label>
									<input type="text" id="total_brand_sponsored" class="form-control" name="total_brand_sponsored">


									<label>Provide Link to Pictures of CSR Projects <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link_sponsor">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>


									<label for="">Top Sponsorship: Event 1 <span class="red">&#42;</span> </label>
				    			  <textarea  class="form-control"  id="top_brand_sponsorship_event1" name="top_brand_sponsorship_event1" placeholder="" ></textarea>
				    			  <label><small><i>Brief of this sponsorship</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  	<label for="">Top Sponsorship: Event 2 <span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_sponsorship_event2" id="top_brand_sponsorship_event2" placeholder="" ></textarea>
				    			  	<label><small><i>Brief of this sponsorship</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  	<label for="">Top Sponsorship: Event 3 <span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_sponsorship_event3" id="top_brand_sponsorship_event3" placeholder="" ></textarea>
				    			  	<label><small><i>Brief of this sponsorship</i></small></label>
				    			</div>

				    			<div class="form-cont mt-3">
				    				<label><b>Distribution Network</b></label><br>	
				    				Submissions to support the significance of a brand's distribution and sales network within the industry. Provide your total number of distribution outlets and contacts to your Top Regional distributors, providing <b>one per region</b>, if applicable. <br><br>

				    				


				    			  	<label for="">Total Number of Distribution Outlets <span class="red">&#42;</span></label>
				    			  	<input type="text" id="total_brand_distribution_outlet" class="form-control" name="total_brand_distribution_outlet">


				    			  	<!-- <h5><b>Industry Support</b></h5>
				    			  	<label>Submissions around brand contribution and impact on the industry for this nomination</label> -->
				    			  	<h5><b>CSR Initiatives</b></h5>
				    			  	<label>Submissions to support the significance of a brand's Corporate Social Responsibility (CSR) within the industry. Provide your total number of CSR initiatives and your Top 3 initiatives with the most significant impact on the industry.</label><br><br>

				    			  	<label for="">Total Number of CSR Events <span class="red">&#42;</span></label><br>
				    			  	<input type="text" id="total_brand_csr_events" class="form-control" name="total_brand_csr_events"><br><br>


				    			  	<label>Provide Link to Pictures of CSR Projects <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link_csr">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>


				    			  	<label for="">Top CSR Events 1<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_csr_events1" id="top_brand_csr_events1" placeholder="" ></textarea>

				    			  	<label for="">Top CSR Events 2<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_csr_events2" id="top_brand_csr_events2" placeholder="" ></textarea>

				    			  	<label for="">Top CSR Events 3<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_csr_events3" id="top_brand_csr_events3" placeholder="" ></textarea>
				    			  	
				    			</div>
								
								<hr>

								<div class="form-cont mt-3">	
									<label><b>Training Initiatives</b></label>
									<label>Submissions to support the significance of a brand's training initiatives within the industry. Provide your total number of training & empowerment initiatives and your Top 3 initiatives with the most significant impact on the industry.</label>

				    			  <label for="">Total Number of Training Events <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="total_brand_training_event" name="total_brand_training_event" placeholder="" />
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label>Provide Link to Pictures of Training Events <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link_events">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>
				    			</div>
				    			<div class="form-cont mt-3">	
				    			    <label for="">Top Training Initiatives 1 <span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_training_initiative1" id="top_brand_training_initiative1" placeholder="" ></textarea>
				    			</div>
				    			<div class="form-cont mt-3">	
				    			    <label for="">Top Training Initiatives 2 <span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_training_initiative2" id="top_brand_training_initiative2" placeholder="" ></textarea>
				    			</div>
				    			<div class="form-cont mt-3">	
				    			    <label for="">Top Training Initiatives 3 <span class="red">&#42;</span></label>
				    			  	<textarea class="form-control"  name="top_brand_training_initiative3" id="top_brand_training_initiative3" placeholder="" ></textarea>
				    			</div>


								<hr>


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
			

			var media_links = $("#media_links").val();
			var photo_link_sponsor = $("#photo_link_sponsor").val();
			var photo_link_csr = $("#photo_link_csr").val();
			var photo_link_events = $("#photo_link_events").val();
            var total_brand_sponsored = $("#total_brand_sponsored").val();
            var top_brand_sponsorship_event1 = $("#top_brand_sponsorship_event1").val();
            var top_brand_sponsorship_event2 = $("#top_brand_sponsorship_event2").val();
            var top_brand_sponsorship_event3 = $("#top_brand_sponsorship_event3").val();
            var total_brand_distribution_outlet = $("#total_brand_distribution_outlet").val();
            var total_brand_csr_events = $("#total_brand_csr_events").val();
            var top_brand_csr_events1 = $("#top_brand_csr_events1").val();
            var top_brand_csr_events2 = $("#top_brand_csr_events2").val();
            var top_brand_csr_events3 = $("#top_brand_csr_events3").val();
            var total_brand_training_event = $("#total_brand_training_event").val();
            var top_brand_training_initiative1 = $("#top_brand_training_initiative1").val();
            var top_brand_training_initiative2 = $("#top_brand_training_initiative2").val();
            var top_brand_training_initiative3 = $("#top_brand_training_initiative3").val();
            

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/makeup_brand_entry.php",
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
	             	photo_link_sponsor,
	             	photo_link_csr,
	             	photo_link_events,
	            	total_brand_sponsored,
					top_brand_sponsorship_event1,
					top_brand_sponsorship_event2,
					top_brand_sponsorship_event3,
					total_brand_distribution_outlet,
					total_brand_csr_events,
					top_brand_csr_events1,
					top_brand_csr_events2,
					top_brand_csr_events3 ,
					total_brand_training_event,
					top_brand_training_initiative1,
					top_brand_training_initiative2,
					top_brand_training_initiative3
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');makeup_brand_update.php?user='+user_value+'&category='+category
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




