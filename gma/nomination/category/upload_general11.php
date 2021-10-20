

<?php 
	include 'includes/header.php';// $user_value =   substr(md5(time()), 0, 22); 

	$user_value = "";
	$category = "";
	$user_name = "";

	if (isset($_GET['user_value'])) 
	{
		$user_value = $_GET['user_value'];
		$category = $_GET['category'];
		$user_name = $_GET['user_name'];
	}

?>
        <!--start of steps area-->
	    <div style="margin-top: 70px !important;" class="container col-md-12  mt-3">


	    	<!--start of first section-->

	    	<div class="row  justify-content-center align-items-center my-3 fix" style="">
	    		<input type="hidden" id="user_value" value="<?php echo $user_value ?>">
	    		<div style="" class="">
	    			<h3 class="text-center"><b>WELCOME TO GHANA BEAUTY AWARDS</b></h3>
	    			<h4 style="font-size: 32px !important; letter-spacing: .2rem !important;" class="lead text-center">Please complete the file upload form below</h4>
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

		    				<form id="uploadForm"   enctype="multipart/form-data" method="post"><!-- action="controllers/upload_photo_general.php" -->
		    					<input type="hidden" name="user_name" id="user_name"  value="<?php echo $user_name; ?>">
		    					<input type="hidden" name="user_value" id="user_value"  value="<?php echo $user_value; ?>">
		    					<input type="hidden" name="category" id="category" value="<?php echo $category; ?>">
				    			<div class="form-cont mt-2">	
				    			  <label for="">
				    			  	<h3><b>File Uploads for <?php echo $category; ?></b></h3> 
				    			  	<br>

				    			  	<?php 
				    			  	session_start();
				    			  		if(isset($_SESSION['uploaded']) && !empty($_SESSION['uploaded']))
						                {
						                    echo '<h6 class="text-danger text-center"> <i><span style="margin: 3px auto; font-sieze: 18">' . $_SESSION['uploaded'] .'</span></i></h6>';
						                    //destroy session after use.........
						                    unset($_SESSION['uploaded']);
						                }else{

						                    echo  $_SESSION['uploaded']="" ;
						                    unset($_SESSION['uploaded']);
						                }

				    			  	?>
				    			  	<label>Kindly upload pictures of the required project photos and business document</label>
								</label>	
								<br><hr>
				    			</div>


				    			<div class="form-cont mt-5">
				    				<label>First Name<!-- Proof of Business Registration --><span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-12">
					                    <div class="input-group mb-3">
					                      <input readonly class="form-control" type="text" name="user_name" id="user_name"  value="<?php echo $user_name; ?>"><!-- business_document -->
					                    </div>
					                </div>
				    			</div>

				    			

				    			<div class="form-cont mt-2" style="display: inline;">
				    				
				    				<label>Category<span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-12">
					                    <div class="input-group mb-3">
					                      <input class="form-control" type="text" name="category" id="category" value="<?php echo $category; ?>" readonly>
					                    </div>
					                </div>
				    			</div>


				    		<!-- 	<div class="form-cont mt-2" style="display: inline;">
				    				<label>Project Photo 2<span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-5">
					                    <div class="input-group mb-3">
					                      <input  type="file" name="photo2" id="business_document" class="form-control " placeholder="Add Photo of project" >
					                    </div>
					                </div>
				    			</div> -->

<hr>
				    			<div class="form-cont mt-2" style="display: inline;">
				    				<label style="background: #F4EFEE; padding: 2px;">Hello <b>'<?php echo $user_name; ?>'</b>; here you are to upload picture of Proof of Business Registration and 3 of your best project photos in (<span class="text-danger">jpeg, jpg, png</span>) format only.  </label> <br><br>
				    				<label>Proof of Business Document and Photos <span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-12">
					                    <div class="input-group mb-3">
					                      <input id="files" type="file" name="files" id="files[]" class="form-control " placeholder="Add Photo of project" multiple >
					                      <label><small><i>You can select multiple images at ago and click Submit Files</i></small></label>
					                    </div>
					                </div>
				    			</div>

			    				

				    			<hr>

				    			<button id="btnSubmit"  class="btn btn-primary mt-3 float-right">Submit Files</button>

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
        $("#uploadForm").submit(function(event) {
            event.preventDefault();
            const user_value = $("#user_value").val();
            const category = $("#category").val();
            const user_name = $("#user_name").val();
            
// upload_general.php?user_name=Emmanue$category=Best barber of ther year&user_value=ioje9rueuy7er65e44dfde3

            //restrict submitting if first_name is not provided
            if (user_name == "") {
                alert('Please enter firstname to continue.');
                return false;
            }
            


            const form_data = new FormData();
            form_data.append('category', document.getElementById('category').value);
        	form_data.append('user_name', document.getElementById('user_name').value);
        	form_data.append('user_value', document.getElementById('user_value').value);

            // load selected files...
            var totalfiles = document.getElementById('files').files.length;
            for(var index = 0; index < totalfiles; index++) 
            {
            	form_data.append('files[]', document.getElementById('files').files[index]);
            }

            $.ajax({
                url: "controllers/upload_photo_general.php",
                type: "POST",
		        contentType: false,
		        processData: false,
                data:form_data,
                dataType: 'json',
                beforeSend: function() {
                    // $("#uploadForm").trigger('reset');
                },
                success:function(response){
                	if (response.success == true) {
                		alert(response.message);
                		$('#uploadForm').trigger('reset');
                		console.log(response.message);
                		window.location.href = '../register.html?user_value='+user_value+'&category='+category+'&user_name='+user_name;
                	}else{
                		console.log(response);
                		alert(response.message);
                	}
                },
                error:function(response){
                	console.log(response);
                	alert('Images upoaded successfully. Thank you..');
                	$('#uploadForm').trigger('reset');
                	window.location.href = '../register.html?user_value='+user_value+'&category='+category+'&user_name='+user_name;
                }
            });
        });
    });
</script>




