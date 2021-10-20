<?php include 'includes/header.php';  $user_value =   substr(md5(time()), 0, 22);?>
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
				    			  	<h5><b>Beauty Brand Ambassador of the Year</b></h5> 
				    			  	The Beauty Brand Ambassador of the Year category seeks to find the most influential personality promoting a beauty brand effectively.
				    			  	<br>
				    			  	The Individual should have;
									<ul>
										<li>An Established Online Presence.</li>
										
										<li>A High Level of Professionalism</li>
										<li>The Ability to Gather Feedback and Provide Innovative Insight</li>
										<li>Knowledge of (and Appreciation for) Marketing</li>
										<li>Entries must be for programs aired between November 2020 - July 2021</li>
									</ul>
								  </label>
								  
									
				    			</div>

			    				<div class="form-cont mt-3">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
				    			  	   <option value="Beauty Brand Ambassador of the Year">Beauty Brand Ambassador of the Year</option>
				    			  </select>
				    			</div>



			    			    <div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee First Name  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="first_name" name="first_name" placeholder="" required/>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee Last Name  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="last_name" name="last_name" placeholder="" required/>
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
				    			  <label for=""> <b>Project Submission </b></label>
				    			  <label for="">Submit 3 projects you have worked on and provide contact details of the brand/business manager each project to confirm your submissions. Please fill in the contact details below  </label>
	
				    	
				    			  <label for="">Contact Detail 1 <span class="red">&#42;</span></label>
				    			   <textarea class="form-control"  name="tvstation_video_description" id="tvstation_video_description" placeholder="" ></textarea>
				    			</div>


				    			<div class="form-cont mt-3">	
				    			  <label for="">Contact Detail 2  <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="tvstation_video_description2" id="tvstation_video_description2" placeholder="" ></textarea>
				    			  
				    			</div>


				    			<div class="form-cont mt-3">	
				    			  <label for="">Contact Detail 2  <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="tvstation_video_description3" id="tvstation_video_description3" placeholder="" ></textarea>
				    			 
				    			</div>








				    		<div style="display: none;">
				    			<div class="form-cont mt-5">	
									<h5><b>Television Station Details</b></h5>
									<label for="">The details for the television station or media entity for this nomination</label> <br>
									<label for="">Television Station Name<span class="red">&#42;</span></label>
				    			  <input type="text" class="form-control  mt-1" id="tvstation_name" name="tvstation_name" placeholder="" />
				    			  
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">Website URL <span class="red">&#42;</span> </label>
				    			  <input type="text" class="form-control"  id="website_url" name="website_url" placeholder="" />
				    			  
				    			</div>

				    			<hr>



				    			<div class="form-cont mt-5">	
				    			  <label for=""> <b>TV Station Content Details </b></label>
				    			  <label for="">Content details for up to five (5) relevant video clip submissions for this nomination </label>
				    			  <label for="">Video Submission 1: <br>
				    			  A video clip of up to <b>sixty seconds(60 secs) </b> extracted from a TV station broadcast 'as aired' Please upload your video to any video site or cloud storage of your preference and share the link. </label>
				    			  <label for="">TV Station Video 1 <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="tvstation_video" name="tvstation_video" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  <label for="">TV Station Video 1: Description <span class="red">&#42;</span></label>
				    			 <!--  <textarea class="form-control"  name="tvstation_video_description" id="tvstation_video_description" placeholder="" ></textarea> -->
				    			  <label for=""><small><i>Please describe and provide context for this video clip</i></small></label>
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  
				    			  <label for="">Video Submission 2: <br>
				    			  A video clip of up to <b>sixty seconds(60 secs) </b> extracted from a TV station broadcast <b>'as aired'</b> Please upload your video to any video site or cloud storage of your preference and share the link. </label>
				    			  <label for="">TV Station Video 2 <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="tvstation_video2" name="tvstation_video2" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  <label for="">TV Station Video 2: Description <span class="red">&#42;</span></label>
				    			  <!-- <textarea class="form-control"  name="tvstation_video_description2" id="tvstation_video_description2" placeholder="" ></textarea> -->
				    			  <label for=""><small><i>Please describe and provide context for this video clip</i></small></label>
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  
				    			  <label for="">Video Submission 3: <br>
				    			  A video clip of up to <b>sixty seconds(60 secs) </b> extracted from a TV station broadcast <b>'as aired'</b> Please upload your video to any video site or cloud storage of your preference and share the link. </label>
				    			  <label for="">TV Station Video 3 <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="tvstation_video3" name="tvstation_video3" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  <label for="">TV Station Video 3: Description <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="tvstation_video_description3" id="tvstation_video_description3" placeholder="" ></textarea>
				    			  <label for=""><small><i>Please describe and provide context for this video clip</i></small></label>
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  
				    			  <label for="">Video Submission 4: <br>
				    			  A video clip of up to <b>sixty seconds(60 secs) </b> extracted from a TV station broadcast <b>'as aired'</b> Please upload your video to any video site or cloud storage of your preference and share the link. </label>
				    			  <label for="">TV Station Video 4 <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="tvstation_video4" name="tvstation_video4" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  <label for="">TV Station Video 3: Description <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="tvstation_video_description4" id="tvstation_video_description4" placeholder="" ></textarea>
				    			  <label for=""><small><i>Please describe and provide context for this video clip</i></small></label>
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  
				    			  <label for="">Video Submission 5: <br>
				    			  A video clip of up to <b>sixty seconds(60 secs) </b> extracted from a TV station broadcast <b>'as aired'</b> Please upload your video to any video site or cloud storage of your preference and share the link. </label>
				    			  <label for="">TV Station Video 5 <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="tvstation_video5" name="tvstation_video5" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-3">	
				    			  <label for="">TV Station Video 3: Description <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="tvstation_video_description5" id="tvstation_video_description5" placeholder="" ></textarea>
				    			  <label for=""><small><i>Please describe and provide context for this video clip</i></small></label>
				    			</div>


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


            var tvstation_video = $("#tvstation_video").val();
            var tvstation_video_description = $("#tvstation_video_description").val();
            var tvstation_name = $("#tvstation_name").val();
            var website_url = $("#website_url").val();
            var tvstation_video2 = $("#tvstation_video2").val();
            var tvstation_video_description2 = $("#tvstation_video_description2").val();
            var tvstation_video3 = $("#tvstation_video3").val();
            var tvstation_video_description3 = $("#tvstation_video_description3").val();
            var tvstation_video4 = $("#tvstation_video4").val();
            var tvstation_video_description4 = $("#tvstation_video_description4").val();
            var tvstation_video5 = $("#tvstation_video5").val();
            var tvstation_video_description5 = $("#tvstation_video_description5").val();
            // var ghanaian_top_training_project3 = $("#ghanaian_top_training_project3").val();


            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter fullname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/makeup_television_entry.php",
                type: "POST",
                data: {
                    first_name,
                    last_name,
	             	user_value,
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

	            	// total_indiginous_product_sponsored,
	            	tvstation_name ,
            		website_url ,
            		tvstation_video,
            		tvstation_video_description ,
            		
            		tvstation_video2 ,
            		tvstation_video_description2,
            		tvstation_video3 ,
            		tvstation_video_description3,
            		tvstation_video4 ,
            		tvstation_video_description4,
            		tvstation_video5,
            		tvstation_video_description5
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset'); upload_makeup_television.php
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#registrationForm').trigger('reset');//makeup_television_update.php?user='+user_value+'&category='+category
                		console.log(response);
                		window.location.href = 'upload_none_business_document.php?user_value='+user_value+'&category='+category+'&user_name='+first_name;//upload_makeup_television.php
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

<!-- <script>
	$(document).ready(function(){
        $("#registrationForm").submit(function(event) {
            event.preventDefault();
            const user_value = $("#user_value").val();
            var nominee_name = $("#nominee_name").val();
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


            var tvstation_video = $("#tvstation_video").val();
            var tvstation_video_description = $("#tvstation_video_description").val();
            var tvstation_name = $("#tvstation_name").val();
            var tvstation_video_description3 = $("#tvstation_video_description3").val();
            var website_url = $("#website_url").val();
            var tvstation_video2 = $("#tvstation_video2").val();
            var tvstation_video_description2 = $("#tvstation_video_description2").val();
            var tvstation_video3 = $("#tvstation_video3").val();
            var tvstation_video4 = $("#tvstation_video4").val();
            var tvstation_video_description4 = $("#tvstation_video_description4").val();
            var tvstation_video5 = $("#tvstation_video5").val();
            var tvstation_video_description5 = $("#tvstation_video_description5").val();
            // var ghanaian_top_training_project3 = $("#ghanaian_top_training_project3").val();


            //restrict submitting if first_name is not provided
            if (nominee_name == "") {
                alert('Please enter fullname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/makeup_television_record_update.php",
                type: "POST",
                data: {
                    nominee_name,
	             	user_value,
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

	            	// total_indiginous_product_sponsored,
	            	tvstation_name ,
            		website_url ,
            		tvstation_video,
            		tvstation_video_description ,
            		
            		tvstation_video2 ,
            		tvstation_video_description2,
            		tvstation_video3 ,
            		tvstation_video_description3,
            		tvstation_video4 ,
            		tvstation_video_description4,
            		tvstation_video5,
            		tvstation_video_description5
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#registrationForm').trigger('reset');
                		console.log(response);
                		window.location.href = '../register.html';
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

 -->

