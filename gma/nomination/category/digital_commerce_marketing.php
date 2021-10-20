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
				    			  	<h3><b>Digital Commerce & Marketing of the Year</b></h3> 
				    			  	<label>The <b> Digital Commerce & Marketing </b>category seeks to reward an individual or brand who excelled in using digital commerce by combining and leveraging digital tools to market and sell in new ways.</label>
									<ul>
										<li>This category is open to brands, agencies or individuals for any marketing campaign across PRINT, TV, RADIO, OUTDOOR or DIGITAL</li>										
										<li>Multiple entries per brand, agency or individual are allowed for different products, services or social causes. Each entry will be judged on its own merit</li>
										<li>Campaigns executed across multiple media categories (PRINT, TV, RADIO, OUTDOOR, DIGITAL) must select One (1) primary media category and compete on that basis for the campaign.</li>								
										<li>The campaign must have been executed between November 2020 - July 2021 to be eligible for this edition</li>
										<li>Each campaign entry must provide information as follows:</li>
										<ul style="margin-left: 30px;">
											<li>Media Category (Print, TV, Radio, Outdoor or Digital);</li>
											<li>Insight (What insight did you draw on to come up with an idea);</li>
											<li>The Big Idea;</li>
											<li>Execution of the Idea (What your team did to execute on the idea);</li>
											<li>Results (Did it achieve the overall goal and what was the measurable impact)</li>
										</ul>
									</ul>
								</label>									
				    			</div>

			    				<div class="form-cont mt-3">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
									   <option value="Digital Commerce and Marketing">Digital Commerce & Marketing</option>
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

				    			<div class="form-cont mt-4">	
				    				<h5><b>Marketing Campaign Details</b></h5>									
									<label for="">List or Information about the goal, audience, media category, distribution strategy and results of the marketing campaign (<small><i>e.g Print, TV, Radio, Outdoor, Digital</i></small>) <span class="red">&#42;</span> </label>
				    			  <textarea  class="form-control"  id="midea_category_list" name="midea_category_list" placeholder="" ></textarea>
				    			</div>
				    			<div class="form-cont mt-1">	
				    				<h5><b>The Brief</b></h5>									
				    			  <textarea  class="form-control"  id="digital_campaign_summmary" name="digital_campaign_summmary" placeholder="" ></textarea>
				    			  <label for=""><small><i>A summary of the campaign brief 0/50</i></small> </label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    				<h5><b>Insight</b></h5>									
				    			    <textarea  class="form-control"  id="digital_insight" name="digital_insight" placeholder="" ></textarea>
				    			    <label for=""><small><i>The main insight you drew on to execute the brief 0/50</i></small> </label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    				<h5><b>The Big Idea</b></h5>									
				    			    <textarea  class="form-control"  id="digital_big_idea" name="digital_big_idea" placeholder="" ></textarea>
				    			    <label for=""><small><i>The central idea for the campaign 0/50</i></small> </label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    				<h5><b>Execution</b></h5>									
				    			    <textarea  class="form-control"  id="digital_execution" name="digital_execution" placeholder="" ></textarea>
				    			    <label for=""><small><i>How did your team execute on the central idea 0/120</i></small> </label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    				<h5><b>Results</b></h5>									
				    			    <textarea  class="form-control"  id="digital_results" name="digital_results" placeholder="" ></textarea>
				    			    <label for=""><small><i>How well did your campaign work? Provide verifiable metrics wherever possible. 0/120</i></small> </label>
				    			</div>







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


            var midea_category_list = $("#midea_category_list").val();
            var digital_campaign_summmary = $("#digital_campaign_summmary").val();
            var digital_insight = $("#digital_insight").val();
            var digital_big_idea = $("#digital_big_idea").val();
            var digital_execution = $("#digital_execution").val();
            var digital_results = $("#digital_results").val();
            // var bridal_work_description2 = $("#bridal_work_description2").val();

            //restrict submitting if first_name is not provided
            if (first_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            

            $.ajax({
                url: "controllers/digital_marketing_entry.php",
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

	            	midea_category_list,
	            	digital_campaign_summmary,
	             	digital_insight,
	             	digital_big_idea,
	             	digital_execution,
	             	digital_results
	             	
	              //   bridal_work_description2 
                },
                beforeSend: function() {
                    // $("#registrationForm").trigger('reset');digital_marketing_update.php
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
