<?php include 'includes/header.php';  $user_value =   substr(md5(time()), 0, 22); ?>
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
				    			  	<!-- <h5>Best Makeup Blog of the Year</h5>  -->
				    			  	<h5><b>Student/Apprentice of the Year </b> </h5>
				    			  	<!-- The Best Makeup Blog </b>category seeks to find the most influential blog covering the makeup industry in Ghana across diverse content topics. -->
				    			  	<label>The Student/Apprentice of the Year category seeks to reward an exceptional learner who has demonstrated discipline and diligence in the learning center.</label>
									<!-- <ul>
										<li>Must have relevant original content on the makeup industry across any of the following content topics:</li>
										<ul style="margin-left: 30px;">
											<li>Tips & Tricks and How Tos</li>
											<li>Industry News</li>
											<li>Coverage of latest trends</li>
											<li>Interviews & Features</li>
											<li>Articles</li>
										</ul>
										<li>Must publish content frequently</li>
										<li>Must have the ability to engage readers</li>
										<li>Must be influential on social media</li>
										<li>Must have been in existence for at least a year (started on or before December 31, 2016) to be eligible</li>
										<li>Content Submissions must be for content published between November 2020 - July 2021 to be eligible for this edition.</li>
									</ul> -->
								</label>
									
				    			  
				    			</div>


			    				<div class="form-cont mt-3">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
				    			  		<option value="Student/Apprentice of the Year">Student/Apprentice of the Year</option>
									   <!-- <option value="Best Makeup Blog of the Year">Best Makeup Blog of the Year</option> -->
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
				    			  <label style="diplay: inline" for="">Details about the school you attend  <!-- <span class="red">&#42;</span> --></label>
				    			  <input class="form-control" type="text" id="company_details" placeholder="school's name" required />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Short Profile on the School </label>
				    			  <!-- <input class="form-control" type="text" id="last_name" placeholder="first name" /> -->
				    			  <textarea class="form-control"  name="comapny_bio" id="comapny_bio" placeholder="100 word limit 0/100" ></textarea>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">School's Instagram Account  </label>
				    			  <input class="form-control" type="text" id="company_instagram" name="company_instagram" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">School's Facebook Account </label>
				    			  <input class="form-control" type="text" id="company_facebook" name="company_facebook" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Other  </label>
				    			  <input class="form-control" type="text" id="company_other" name="company_other" placeholder="website eg. www.example.com" />
				    			</div>

				    			<div class="form-cont mt-5">	
				    			  <label style="diplay: inline" for="">Contact details for the main contact person for this nomination <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="company_name" name="company_name" placeholder="contact person's name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">School's Contact Number  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="phone_number" name="phone_number" placeholder="contact number" required/>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">School's E-mail<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="company_email" name="company_email" placeholder="example@example.com" required/>
				    			</div>



				    		<div class="" style="display: none;">	
				    			<div class="form-cont mt-5">
				    				<h4><b>Contact Info</b></h4>
				    				<label>Submit Contacts of 5 Customers to be interviewed for this Category</label>
				    			</div>
				    			<div class="form-cont mt-2">
				    				<label for="">Contacts 1<span class="red">&#42;</span></label>
				    			    <input class="form-control" type="text" id="contact1" name="contact1" placeholder="" required />
				    			</div>
				    			<div class="form-cont mt-2">
				    				<label for="">Contacts 2<span class="red">&#42;</span></label>
				    			    <input class="form-control" type="text" id="contact2" name="contact2" placeholder="" required />
				    			</div>
				    			<div class="form-cont mt-2">
				    				<label for="">Contacts 3<span class="red">&#42;</span></label>
				    			    <input class="form-control" type="text" id="contact3" name="contact3" placeholder="" required />
				    			</div>
				    			<div class="form-cont mt-2">
				    				<label for="">Contacts 4<span class="red">&#42;</span></label>
				    			    <input class="form-control" type="text" id="contact4" name="contact4" placeholder="" required />
				    			</div>
				    			<div class="form-cont mt-2">
				    				<label for="">Contacts 5<span class="red">&#42;</span></label>
				    			    <input class="form-control" type="text" id="contact5" name="contact5" placeholder="" required />
				    			</div>
				    		</div>


				    			<!-- <hr>


				    			<div class="form-cont mt-5">
				    				<h5><b>Main Blog Details</b></h5>
									<label for="">The main details for the blog for this nomination</label> <br>
									<label for="">Name of the Blog<span class="red">&#42;</span></label>
				    			    <input type="text" class="form-control  mt-1" id="blog_name" name="blog_name" placeholder="" >	
				    			    <label for="">Blog Address/URL <span class="red">&#42;</span> </label>
				    			    <input type="text" class="form-control"  id="blog_url" name="blog_url" placeholder="" />			    			
				    			</div>

				    			


				    			<hr>

				    			<div class="form-cont mt-5">	
				    			    <label for="">
				    			  	 	<h5><b>Content Relevance Details</b></h5> 				    			  
									</label>
									<br>
									<label for="">Content Category 1:Tips & Tricks and How Tos</label>
									<label for="">Your <b>Two (2) Best </b>blog posts providing makeup tips, tricks, step by step guides, etc</label>
									<label for="">Blog Cat 1 - Post 1</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog1_cat_1" name="blog1_cat_1" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">	
									<label for="">Blog Cat 1 - Post 2</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog1_cat_2" name="blog1_cat_2" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<hr>


				    			<div class="form-cont mt-3">	

									<label for="">Content Category 2: Industry News</label>
									<label for="">Your Two (2) Best blog posts providing news about the makeup industry, events, brands</label>
									<label for="">Blog Cat 2 - Post 1</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog2_cat_1" name="blog2_cat_1" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">	
									<label for="">Blog Cat 2 - Post 2</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog2_cat_2" name="blog2_cat_2" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			
				    			<div class="form-cont mt-3">	

									<label for="">Content Category 3: Latest Trends</label>
									<label for="">Your Two (2) Best blog posts about latest makeup trends (techniques, styles, products, equipment)</label>
									<label for="">Blog Cat 3 - Post 1</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog3_cat_1" name="blog3_cat_1" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">	
									<label for="">Blog Cat 3 - Post 2</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog3_cat_2" name="blog3_cat_2" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			

				    			<div class="form-cont mt-3">	

									<label for="">Content Category 4: Interviews & Features</label>
									<label for="">Your Two (2) Best blog posts interviewing or featuring people or brands from the makeup industry</label>
									<label for="">Blog Cat 4 - Post 1</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog4_cat_1" name="blog4_cat_1" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">	
									<label for="">Blog Cat 4 - Post 2</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog4_cat_2" name="blog4_cat_2" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div> -->

				    			

				    			<!-- <hr>


				    			<div class="form-cont mt-5">	
				    			    <label for="">
				    			  	 	<h5><b>Content Engagement Details</b></h5> 				    			  
									</label>
									<br>
									<label for="">Content details for your submissions for Top 3 most engaging content. Content can be directly on your blog or shared on social media</label>
									<label for="">Blog Engagement - Post 1</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog_engagement_post_1" name="blog_engagement_post_1" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">	
									<label for="">Blog Engagement - Post 2</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog_engagement_post_2" name="blog_engagement_post_2" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">	
									<label for="">Blog Engagement - Post 3</label>
				    			  	<input type="text" class="form-control  mt-1" id="blog_engagement_post_3" name="blog_engagement_post_3" placeholder="" >
				    			  	<label for=""><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div> -->

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

            var contact1 = $("#contact1").val();
            var contact2 = $("#contact2").val();
            var contact3 = $("#contact3").val();
            var contact4 = $("#contact4").val();
            var contact5 = $("#contact5").val();
            // var vlog_name = $("#blog_name").val();
            // var vlog_url = $("#blog_url").val();
            // var vlog_cat1_post1 = $("#blog1_cat_1").val();
            // var vlog_cat1_post2 = $("#blog1_cat_2").val();
            // var vlog_cat2_post1 = $("#blog2_cat_1").val();
            // var vlog_cat2_post2 = $("#blog2_cat_2").val();
            // var vlog_cat3_post1 = $("#blog3_cat_1").val();
            // var vlog_cat3_post2 = $("#blog3_cat_2").val();
            // var vlog_cat4_post1 = $("#blog4_cat_1").val();
            // var vlog_cat4_post2 = $("#blog4_cat_2").val();
            // var vlog_engagement_post1 = $("#blog_engagement_post_1").val();
            // var vlog_engagement_post2 = $("#blog_engagement_post_1").val();
            // var vlog_engagement_post3 = $("#blog_engagement_post_1").val();

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/general_entry.php",
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

	             	contact1,
	             	contact2,
	             	contact3,
	             	contact4,
	             	contact5

	            	// vlog_name,
            		// vlog_url,
            		// vlog_cat1_post1 ,
            		// vlog_cat1_post2 ,
            		// vlog_cat2_post1 ,
            		// vlog_cat2_post2 ,
            		// vlog_cat3_post1,
            		// vlog_cat3_post2 ,
            		// vlog_cat4_post1,
            		// vlog_cat4_post2 ,
            		// vlog_engagement_post1,
            		// vlog_engagement_post2,
            		// vlog_engagement_post3
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset'); general_update.php?user='+user_value+'&category='+category;
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#registrationForm').trigger('reset');
                		console.log(response);
                		window.location.href = 'upload_none_business_document.php?user_value='+user_value+'&category='+category+'&user_name='+first_name;//beauty_vlog_update
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





