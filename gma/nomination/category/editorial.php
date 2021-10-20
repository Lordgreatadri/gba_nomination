<?php include 'includes/header.php'; $user_value = rand();?>
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
		    					<div class="form-cont mt-5">	
					    			<label for="">
					    			  	<h5><b>Best Editorial Makeup Artist</b></h5> 
					    			  	The <b>Best Editorial Makeup Artist </b>category seeks to find the best makeup artist for the use of makeup to enhance artistic expression across different subjects or visual themes in a publication or exhibition.
										<ul>
											<li>Must have avant-garde elements (new and experimental ideas and methods) in at least one of their submissions</li>
											
											<li>Must be creative and artistic</li>
											<li>Must have worked on this in the context of a project (photo shoot, magazine editorial or exhibition)</li>
											<li>Entries must be for work done between November 2020 - July 2021</li>
										</ul>
										</label>									
				    			</div>


			    				<div class="form-cont mt-3">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
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
				    			  <h5><b>Editorial: Project 1</b></h5>
									
									<label for="">Name - Editorial: Project 1<span class="red">&#42;</span></label>
				    			  <input type="text" class="form-control  mt-1" id="editorial_project_name1" name="editorial_project_name1" placeholder="" >
				    			</div>

				    			<div class="form-cont mt-1">
				    				<label>Provide Link to Pictures of Editorial Project 1 <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link1">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">Description - Editorial: Project 1 <span class="red">&#42;</span> </label>
				    			  <textarea  class="form-control"  id="editorial_project_description1" name="editorial_project_description1" placeholder="" ></textarea>
				    			  
				    			</div>


				    			<div class="form-cont mt-3">	
				    			  <label for="">Name - Editorial: Project 2<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="editorial_project_name2" name="editorial_project_name2" placeholder="" />
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label>Provide Link to Pictures of Editorial Project 2 <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link2">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>
				    			</div>
				    			<div class="form-cont mt-3">	
				    			  <label for="">Description - Editorial: Project 2 <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="editorial_project_description2" id="editorial_project_description2" placeholder="" ></textarea>
				    			</div>



				    			<div class="form-cont mt-3">	
				    			  <label for="">Name - Editorial: Project 3<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="editorial_project_name3" name="editorial_project_name3" placeholder="" />
				    			</div>
				    			<div class="form-cont mt-1">
				    				<label>Provide Link to Pictures of Editorial Project 3 <span class="red">&#42;</span></label>
									<input type="text" class="form-control" id="photo_link3">
									<label><small><i>Please upload pictures of this project to any platform and share the link(e.i dropbox, google drive, wetransfare or social media etc.)</i></small></label> <br>
				    			</div>
				    			<div class="form-cont mt-3">	
				    			  <label for="">Description - Editorial: Project 3 <span class="red">&#42;</span></label>
				    			  <textarea class="form-control"  name="editorial_project_description3" id="editorial_project_description3" placeholder="" ></textarea>
				    			  <label for=""><small><i>Please describe and provide context for this video clip</i></small></label>
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

			var photo_link1 = $("#photo_link1").val();
            var editorial_project_name1 = $("#editorial_project_name1").val();
            var editorial_project_description1 = $("#editorial_project_description1").val();
            var editorial_project_name2 = $("#editorial_project_name2").val();
            var photo_link2 = $("#photo_link2").val();
            var editorial_project_description2 = $("#editorial_project_description2").val();
            var editorial_project_name3 = $("#editorial_project_name3").val();
            var photo_link3 = $("#photo_link3").val();
            var editorial_project_description3 = $("#editorial_project_description3").val();
            // var bridal_work_description2 = $("#bridal_work_description2").val();

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/editorial_entry.php",
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

	             	photo_link1,
	            	editorial_project_name1,
	            	editorial_project_description1,
	             	editorial_project_name2,
	             	photo_link2,
	             	editorial_project_description2,
	             	editorial_project_name3,
	             	photo_link3,
	             	editorial_project_description3,
	             	user_value
	              //   bridal_work_description2 
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');editorial_update.php?user='+user_value+'&category='+category
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


