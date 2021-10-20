<?php 
include_once 'includes/header.php';
	$user_value = "";
	$category = "";
	if (isset($_GET['user'])) 
	{
		$user_value = $_GET['user'];
		$category = $_GET['category'];
	} else {
		echo "<script>window.location.href = '../register.html';</script>";
	}

?>








	    <div style="margin-top: 70px !important;" class="container col-md-12  mt-3">


	    	<!--start of first section-->

	    	<div class="row  justify-content-center align-items-center my-3 fix" style="">
	    		<input type="hidden" id="user_value" value="<?php echo $user_value ?>">
	    		<div style="" class="">
	    			<h3 class="text-center"><b>WELCOME TO GHANA BEAUTY AWARDS</b></h3>
	    			<h5 style="font-size: 28px !important; letter-spacing: .0.9rem !important;" class="lead text-center">Please cross-check the submitted record below and do update when applicable or cancel if all is fine.</h5>
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
				    			  	<h4><b><?php echo $category ;?></b></h4> 
								</label>
									
				    			</div>
				    			

				    			<hr>
			    				<div class="form-cont mt-5">	
				    			  <label for=""> Category<span class="red">&#42;</span></label>
				    			  
				    			  <select class="form-control"  name="category" id="category" required disabled="true">
									   <option value="<?php echo $category ; ?>"><?php echo $category ;?></option>
				    			  </select>
				    			</div>



			    			    <div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee Fullt Name  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="nominee_name" name="nominee_name" placeholder="" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Nominee E-mail  <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="email" name="email" placeholder="" />
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
				    			  <label style="diplay: inline" for="">Details about the school being nominated for this category <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="company_details" placeholder="school name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label style="diplay: inline" for="">Short School Profile </label>
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
				    			  <input class="form-control" type="text" id="company_name" name="company_name" placeholder="school name" />
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">School's Contact Number <span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="phone_number" name="phone_number" placeholder="contact number" required/>
				    			</div>

				    			<div class="form-cont mt-1">	
				    			  <label for="">School's E-mail<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="company_email" name="company_email" placeholder="example@example.com" required/>
				    			</div>

				    			<hr>


				    			

				    			<div class="form-cont mt-4">	
				    				<label>Total Number of Graduants<span class="red">&#42;</span></label>
				    			    <input class="form-control" type="text" id="total_graduants" name="total_graduants" placeholder="" required/>
				    			    <small><i>Total for 2017 Graduating Classes</i></small>
				    			</div>
				    			<hr>
				    			<div class="form-cont mt-1">
				    			  <label for="">Name - Graduant 1<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="graduant_2017_name1" name="graduant_2017_name1" placeholder="" required/>
				    			  <label><small><i>Graduant full name</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">E-mail - Graduant 1<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="graduant_2017_email1" name="graduant_2017_email1" placeholder="" required/>
				    			  <label><small><i>Graduant email address (example@example.com)</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">Phone - Graduant 1<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="graduant_2017_phone1" name="graduant_2017_phone1" placeholder="" required/>
				    			</div>
				    			<div class="form-cont mt-1">	
									<label for="">Accomplishments - Graduant 1<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control  mt-1" id="accomplishment1_2017" name="accomplishment1_2017" placeholder="" required></textarea>
				    			  	<label for=""><small><i>The accomplishments of graduant 1</i></small></label>
				    			</div>
				    			<hr>
				    			<div class="form-cont mt-1">
				    			  <label for="">Name - Graduant 2<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="graduant_2017_name2" name="graduant_2017_name2" placeholder="" required/>
				    			  <label><small><i>Graduant full name</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">E-mail - Graduant 2<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="graduant_2017_email2" name="graduant_2017_email2" placeholder="" required/>
				    			  <label><small><i>Graduant email address (example@example.com)</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">Phone - Graduant 2<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="graduant_2017_phone2" name="graduant_2017_phone2" placeholder="" required/>
				    			</div>
				    			<div class="form-cont mt-1">	
									<label for="">Accomplishments - Graduant 2<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control  mt-1" id="accomplishment2_2017" name="accomplishment2_2017" placeholder="" required></textarea>
				    			  	<label for=""><small><i>The accomplishments of graduant 2</i></small></label>
				    			</div>

				    			<hr>
				    			<div class="form-cont mt-1">
				    			  <label for="">Name - Graduant 2<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="graduant_2017_name3" name="graduant_2017_name3" placeholder="" required/>
				    			  <label><small><i>Graduant full name</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">E-mail - Graduant 3<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="email" id="graduant_2017_email3" name="graduant_2017_email3" placeholder="" required/>
				    			  <label><small><i>Graduant email address (example@example.com)</i></small></label>
				    			</div>
				    			<div class="form-cont mt-1">	
				    			  <label for="">Phone - Graduant 3<span class="red">&#42;</span></label>
				    			  <input class="form-control" type="text" id="graduant_2017_phone3" name="graduant_2017_phone3" placeholder="" required/>
				    			</div>
				    			<div class="form-cont mt-1">	
									<label for="">Accomplishments - Graduant 2<span class="red">&#42;</span></label>
				    			  	<textarea class="form-control  mt-1" id="accomplishment3_2017" name="accomplishment3_2017" placeholder="" required></textarea>
				    			  	<label for=""><small><i>The accomplishments of graduant 3</i></small></label>
				    			</div>

				    			<hr>





				    			<div class="form-cont mt-3" style="diplay: inline-block">	
				    			  	<button id="btnSubmit"  class="btn btn-primary mt-3 float-right">Update</button>&nbsp;&nbsp; 
				    				<a href="../register.html"  class="btn btn-danger mt-3 float-left">Cancel</a>&nbsp;&nbsp;
				    			</div>
				    			

				    			</form>
			    			</div>

		    		</div>
		    	</div>
	        </div>
	        <!--end of second section-->


	    </div>








<?php include_once 'includes/footer.php'; ?>


<script>
	$(document).ready(function(){
		load_submitted_data();

		function load_submitted_data() {
			const user_value = $("#user_value").val();
            var category = $("#category").val();	

            $.get("controllers/beauty_school_data.php?user="+user_value+'&category='+category, function(response) {
			    $('#nominee_name').val(response.data.nominee_name);
			    $('#email').val(response.data.email);
			    $('#mobile_number').val(response.data.mobile_number);
			    $('#nominee_bio').val(response.data.nominee_bio);
			    $('#instagram').val(response.data.instagram);
			    $('#facebook').val(response.data.facebook);
			    $('#other').val(response.data.other);
			    $('#company_details').val(response.data.company_details);
			    $('#comapny_bio').val(response.data.comapny_bio);
			    $('#company_instagram').val(response.data.company_instagram);
			    $('#company_facebook').val(response.data.company_facebook);
			    $('#company_other').val(response.data.company_other);
			    $('#company_name').val(response.data.company_name);
			    $('#phone_number').val(response.data.phone_number);
			    $('#company_email').val(response.data.company_email);

			    $('#total_graduants').val(response.data.total_graduants);
			    $('#graduant_2017_name1').val(response.data.graduant_2017_name1);
			    $('#graduant_2017_email1').val(response.data.graduant_2017_email1);
			    $('#graduant_2017_phone1').val(response.data.graduant_2017_phone1);
			    $('#accomplishment1_2017').val(response.data.accomplishment1_2017);
			    $('#graduant_2017_name2').val(response.data.graduant_2017_name2);
			    $('#graduant_2017_email2').val(response.data.graduant_2017_email2);
			    $('#graduant_2017_phone2').val(response.data.graduant_2017_phone2);
			    $('#accomplishment2_2017').val(response.data.accomplishment2_2017);
			    $('#graduant_2017_name3').val(response.data.graduant_2017_name3);
			    $('#graduant_2017_email3').val(response.data.graduant_2017_email3);
			    $('#graduant_2017_phone3').val(response.data.graduant_2017_phone3);
			    $('#accomplishment3_2017').val(response.data.accomplishment3_2017);
			});	
		}
	});
</script>



<script>
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


            var total_graduants = $("#total_graduants").val();
            var graduant_2017_name1 = $("#graduant_2017_name1").val();
            var graduant_2017_email1 = $("#graduant_2017_email1").val();
            var graduant_2017_phone1 = $("#graduant_2017_phone1").val();
            var accomplishment1_2017 = $("#accomplishment1_2017").val();
            var graduant_2017_name2 = $("#graduant_2017_name2").val();
            var graduant_2017_email2 = $("#graduant_2017_email2").val();
            var graduant_2017_phone2 = $("#graduant_2017_phone2").val();
            var accomplishment2_2017 = $("#accomplishment2_2017").val();
            var graduant_2017_name3 = $("#graduant_2017_name3").val();
            var graduant_2017_email3 = $("#graduant_2017_email3").val();
            var graduant_2017_phone3 = $("#graduant_2017_phone3").val();
            var accomplishment3_2017 = $("#accomplishment3_2017").val();

            //restrict submitting if first_name is not provided
            if (nominee_name == "") {
                alert('Please enter fullname to continue.');
                return false;
            }
            
            $.ajax({
                url: "controllers/beauty_school_record_update.php",
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

	            	total_graduants,
	            	graduant_2017_name1,
	             	graduant_2017_email1,
	             	graduant_2017_phone1,
	             	accomplishment1_2017,
	             	graduant_2017_name2,
	                graduant_2017_email2,
	                graduant_2017_phone2 ,
	                accomplishment2_2017 ,
	                graduant_2017_name3 ,
	                graduant_2017_email3 ,
	                graduant_2017_phone3, 
	                accomplishment3_2017
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