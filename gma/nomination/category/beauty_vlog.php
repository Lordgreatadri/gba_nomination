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
				    			  	<h3><b>Beauty Vlog of the Year</b></h3> 
				    			  	<label>The Best Makeup Vlog category seeks to find the best and most influential online video blog covering the makeup industry in Ghana across diverse content topics.</label>
								</label>	
									<ul>
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
									</ul>	
									<label>Content Submissions must be for content published between November 2020 - July 2021 to be eligible for this edition</label>									
				    			</div>

			    				<div class="form-cont mt-3">	
				    			  <label for="">Makeup Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
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
				    			  <label style="diplay: inline" for="">Details about the company being nominated for this category <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="company_details" placeholder="company name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Short Company Profile </label>
				    			  <!-- <input class="form-control" type="text" id="last_name" placeholder="first name" /> -->
				    			  <textarea class="form-control"  name="comapny_bio" id="comapny_bio" placeholder="100 word limit 0/100" ></textarea>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Company's Instagram Account  </label>
				    			  <input class="form-control" type="text" id="company_instagram" name="company_instagram" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Company's Facebook Account </label>
				    			  <input class="form-control" type="text" id="company_facebook" name="company_facebook" placeholder="eg. makeupghana" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Other  </label>
				    			  <input class="form-control" type="text" id="company_other" name="company_other" placeholder="website eg. www.example.com" />
				    			</div>

				    			<div class="form-cont mt-5">	
				    			  <label style="diplay: inline" for="">Contact details for the main contact person for this nomination <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="company_name" name="company_name" placeholder="company name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">Company's Contact Number <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="phone_number" name="phone_number" placeholder="contact number" required/>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">Company's E-mail<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="company_email" name="company_email" placeholder="example@example.com" required/>
				    			</div>

				    			<hr>

				    			<div class="form-cont mt-5">
				    				<label><b>Main Vlog Details</b></label>	
				    				<label>The main details for the video blog or other online video content channel for this nomination</label>
				    			  	<label for="">Vlog Name<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_name" name="vlog_name" placeholder="" required/>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog URL<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_url" name="vlog_url" placeholder="" required/>
				    			</div>
				    			<div class="form-cont mt-5">
				    				<label><b>Content Relevance Details</b></label>	
				    				<label>Content details for your relevant submissions for content topics for this nomination</label>
				    				<label><b>Content Category 1:Tips & Tricks and How Tos</b></label>
				    				<label>Your <b>Two (2) Best </b> video posts providing makeup tips, tricks, step by step guides, etc</label>

				    			  	<label for="">Vlog Cat 1 - Post 1<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat1_post1" name="vlog_cat1_post1" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog Cat 1 - Post 2<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat1_post2" name="vlog_cat1_post2" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label><b>Content Category 2: Industry News</b></label>	
				    				<label>Your <b>Two (2) Best</b> video posts providing news about the makeup industry, events, brands, etc</label>
				    			  	<label for="">Vlog Cat 2 - Post 1<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat2_post1" name="vlog_cat2_post1" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog Cat 2 - Post 2<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat2_post2" name="vlog_cat2_post2" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label><b>Content Category 3: Latest Trends</b></label>	
				    				<label>Your <b>Two (2) Best</b> video posts about latest makeup trends (techniques, styles, products, equipment)</label>
				    			  	<label for="">Vlog Cat 3 - Post 1<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat3_post1" name="vlog_cat3_post1" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog Cat 3 - Post 2<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat3_post2" name="vlog_cat3_post2" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>

				    			<div class="form-cont mt-1">
				    				<label><b>Content Category 4: Articles</b></label>	
				    				<label>Your<b> Two (2) Best </b> in-depth video content covering an industry brand, issue or trend</label>
				    			  	<label for="">Vlog Cat 4 - Post 1<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat4_post1" name="vlog_cat4_post1" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog Cat 4 - Post 2<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_cat4_post2" name="vlog_cat4_post2" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<hr>
				    			<div class="form-cont mt-3">
				    				<label><b>Content Engagement Details</b></label>	
				    				<label>Content details for your submissions for Top 3 most engaging video content. Content can be directly on your blog or another video channel</label>
				    			  	<label for="">Vlog Engagement - Post 1<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_engagement_post1" name="vlog_engagement_post1" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog Engagement - Post 2<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_engagement_post2" name="vlog_engagement_post2" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">
				    			  	<label for="">Vlog Engagement - Post 3<span class="red">&#42;</span></label>
				    			  	<input class="form-control" type="text" id="vlog_engagement_post3" name="vlog_engagement_post3" placeholder="" />
				    			  	<label><small><i>Copy and paste full Link/URL here</i></small></label>
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

            var vlog_name = $("#vlog_name").val();
            var vlog_url = $("#vlog_url").val();
            var vlog_cat1_post1 = $("#vlog_cat1_post1").val();
            var vlog_cat1_post2 = $("#vlog_cat1_post2").val();
            var vlog_cat2_post1 = $("#vlog_cat2_post1").val();
            var vlog_cat2_post2 = $("#vlog_cat2_post2").val();
            var vlog_cat3_post1 = $("#vlog_cat3_post1").val();
            var vlog_cat3_post2 = $("#vlog_cat3_post2").val();
            var vlog_cat4_post1 = $("#vlog_cat4_post1").val();
            var vlog_cat4_post2 = $("#vlog_cat4_post2").val();
            var vlog_engagement_post1 = $("#vlog_engagement_post1").val();
            var vlog_engagement_post2 = $("#vlog_engagement_post2").val();
            var vlog_engagement_post3 = $("#vlog_engagement_post3").val();

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/beauty_vlog_entry.php",
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

	            	vlog_name,
            		vlog_url,
            		vlog_cat1_post1 ,
            		vlog_cat1_post2 ,
            		vlog_cat2_post1 ,
            		vlog_cat2_post2 ,
            		vlog_cat3_post1,
            		vlog_cat3_post2 ,
            		vlog_cat4_post1,
            		vlog_cat4_post2 ,
            		vlog_engagement_post1,
            		vlog_engagement_post2,
            		vlog_engagement_post3
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#registrationForm').trigger('reset');
                		console.log(response);
                		window.location.href = 'beauty_vlog_update.php?user='+user_value+'&category='+category;
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





