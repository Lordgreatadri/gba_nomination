
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

		    				<form id="registrationForm" class="registrationForm">

		    					<div class="form-cont mt-5">	
				    			  <label for="">
				    			  	<h3> <b>Makeup Artist of the Year</b></h3> <br>
									This category seeks to celebrate a makeup artist who has shown exceptional artistic and creative prowess mixed with innovation in the field of practice, with not less than 3 years of experience.</label>
									<ul>
										<li>Must demonstrate exceptional skills in the following makeup categories</li>
										<ul style="margin-left: 30px;">
											<li>Bridal</li>
											<li>Editorial</li>
										</ul>
										<li>Must have Social Media Influence</li>
										<!-- <li>Must not be LESS THAN 3 years in the industry</li> -->
										<li>Must have imparted knowledge to others in the industry</li>
									</ul>
									
				    			</div>


			    				<div class="form-cont mt-3">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
									   <option value="Makeup Artist of the Year">Makeup Artist of the Year</option>
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
				    			  <input class="form-control" type="text" id="company_details" name="company_details" placeholder="business name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Short business Profile <span class="red">&#42;</span> </label>
				    			  <!-- <input class="form-control" type="text" id="last_name" placeholder="first name" /> -->
				    			  <textarea class="form-control"  name="comapny_bio" id="comapny_bio" placeholder="100 word limit 0/100" required></textarea>
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
				    				<h5>General Makeup Project Submissions</h5>
									<label for="">Submit your 2 Best Projects to be judged under General Makeup</label>
									<br><br>

									<label>Provide Link to Project Pictures 1<span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link1">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>


									<label for="">Description of Work 1<span class="red">&#42;</span></label>
				    			  <textarea class="form-control  mt-1" id="makeupart_description1" name="makeupart_description1" placeholder="" ></textarea>
				    			  <label for=""><small><i>Example: Project Theme, Client Brief & Requirements, Artistic Goals, Techniques</i></small></label>

				    			  	<br><br>

				    			  	<label>Provide Link to Project Pictures 2<span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link2">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>


				    			  <label for="">Description of Work 2<span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  id="makeupart_description2" name="makeupart_description2" placeholder=" "  /></textarea>
				    			  <label for=""><small><i>Example: Project Theme, Client Brief & Requirements, Artistic Goals, Techniques</i></small></label>
				    			</div>

				    			<hr>
				    		</div>





				    			<div class="form-cont mt-5">	
				    			  <label for="">
				    			  	<h5>Editorial Makeup Project Submissions</h5> 
								</label>
									
									<label for="">Submit your 2 Projects to be judged under Editorial Makeup</label>
									<br><br>

									<label>Provide Link to Editorial Pictures 1<span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_editorial_link1">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>


									<label for="">Description of Editorial Work 1</label>
				    			  <textarea class="form-control  mt-1" id="editorial_description1" name="editorial_description1" placeholder="" ></textarea>
				    			  <label for=""><small><i>Example: Project Theme, Client Brief & Requirements, Artistic Goals, Techniques</i></small></label><br>
				    			</div>
				    			<div class="form-cont mt-1">

				    				<label>Provide Link to Editorial Pictures 2<span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_editorial_link2">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>

				    			  <label for=""><br>Description of Editorial Work 2</label>
				    			  <textarea class="form-control"  id="editorial_description2" name="editorial_description2" placeholder="" /></textarea>
				    			  <label for=""><small><i>Example: Project Theme, Client Brief & Requirements, Artistic Goals, Techniques</i></small></label>
				    			</div>
				    			
				    			<hr>
				    			<div class="form-cont mt-5">	
				    			  <label for="">
				    			  	<h5>Bridal Makeup Project Submissions</h5> 
								</label>
									
									<label for="">Submit your 2 Projects to be judged under Bridal Makeup</label>
									<br><br>

									<label>Provide Link to Bridal Pictures <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_bridal_link1">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>

									<label for="">Description of Bridal Work 1</label>
				    			  <textarea class="form-control  mt-1" id="bridal_work_description1" name="bridal_work_description1" placeholder="" ></textarea>
				    			  <label for=""><small><i>Example: Project Theme, Client Brief & Requirements, Artistic Goals, Techniques</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	

				    				<label>Provide Link to Bridal Pictures <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_bridal_link2">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>

				    			  <label for="">Description of Bridal Work 2</label>
				    			  <textarea class="form-control"  id="bridal_work_description2" name="bridal_work_description2" placeholder="" /></textarea>
				    			  <label for=""><small><i>Example: Project Theme, Client Brief & Requirements, Artistic Goals, Techniques</i></small></label>
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



	    <!--start of form -->

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

            var photo_link1 = $("#photo_link1").val();
            var makeupart_description1 = $("#makeupart_description1").val();
            var photo_link2 = $("#photo_link2").val();
            var makeupart_description2 = $("#makeupart_description2").val();
            var photo_editorial_link1 = $("#photo_editorial_link1").val();
            var editorial_description1 = $("#editorial_description1").val();
            var photo_editorial_link2 = $("#photo_editorial_link2").val();
            var editorial_description2 = $("#editorial_description2").val();
            var photo_bridal_link1 = $("#photo_bridal_link1").val();
            var bridal_work_description1 = $("#bridal_work_description1").val();
            var photo_bridal_link2 = $("#photo_bridal_link2").val();
            var bridal_work_description2 = $("#bridal_work_description2").val();

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/makeup_artist.php",
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

	             	photo_link1,
	            	makeupart_description1,
	            	photo_link2,
	            	makeupart_description2,
	            	photo_editorial_link1,
	             	editorial_description1,
	             	photo_editorial_link2,
	             	editorial_description2,
	             	photo_bridal_link1,
	             	bridal_work_description1,
	             	photo_bridal_link2,
	                bridal_work_description2 
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');makeup_artist_update.php?user='+user_value+'&category='+category
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





