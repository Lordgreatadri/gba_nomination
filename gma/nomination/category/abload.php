
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
	    		<!-- <input type="hidden" id="user_value" value="<?php echo $user_value ?>"> -->
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

		    				<form method='post'  enctype="multipart/form-data"><!-- action="controllers/upload_photo_general.php" -->
		    					<!-- <input type="hidden" name="user_name" id="user_name"  value="Lordgreat">
								<input type="hidden" name="user_value" id="user_value"  value="123456fyu634">
								<input type="hidden" name="category" id="category" value="Testing Cateogry List"> -->
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


				    			<!-- <div class="form-cont mt-5">
				    				<label>First Name<span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-12">
					                    <div class="input-group mb-3">
					                      <input readonly class="form-control" type="text" name="user_name" id="user_name"  value="<?php echo $user_name; ?>">
					                    </div>
					                </div>
				    			</div>
 -->
				    			

				    			<!-- <div class="form-cont mt-2" style="display: inline;">
				    				
				    				<label>Category<span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-12">
					                    <div class="input-group mb-3">
					                      <input class="form-control" type="text" name="category" id="category" value="<?php echo $category; ?>" readonly>
					                    </div>
					                </div>
				    			</div>
 -->

<!-- <hr> -->
				    			<div class="form-cont mt-2" style="display: inline;">
				    				<label style="background: #F4EFEE; padding: 2px;">Hello <b>'<?php echo $user_name; ?>'</b>; here you are to upload 3 pictures of your best projects/work/events in (<span class="text-danger">jpeg, jpg, png</span>) formats only </label> <br><br>
				    				<label>Choose Photos <span class="red">&#42;</span></label>
				    				<div style="background-color: transparent;" class="col-md-12">
					                    <div class="input-group mb-3">
					                      <input id="files" type="file" name="files" id="files[]" class="form-control " placeholder="Add Photo of project" multiple >
					                      <label><small><i>You can select multiple images at ago and click Submit Files</i></small></label>
					                    </div>
					                </div>
				    			</div>

			    				

				    			<hr>

				    			<button id="submit"  class="btn btn-primary mt-3 float-right">Submit Files</button>

				    			</form>
			    			</div>




			    		<!-- Preview -->
			    		<div class="col-md-10 justify-content-center m-2 ">
			    			<div style="clear: both;"></div>
			    			<label id="message" class="text-center text-success alert alert-success col-md-10 text-center" role="alert" style="display: none;">Your files uploaded successfully. Thank you</label>
			    			<div id='preview' class="col-md-12 justify-content-center m-2 form-card"></div>	
			    		</div>
						
		    		</div>
		    	</div>
	        </div>
	        <!--end of second section-->


	    </div>

	    <!--end of steps area-->






<?php include 'includes/footer.php'; ?>

<script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
#preview img{
   margin: 5px;
}
</style>
<form method='post' action='' enctype="multipart/form-data">

	<input type="hidden" name="user_name" id="user_name"  value="Lordgreat">
	<input type="hidden" name="user_value" id="user_value"  value="123456fyu634">
	<input type="hidden" name="category" id="category" value="Testing Cateogry List">


   <input type="file" id='files' name="files[]" multiple><br>
   
   <input type="button" id="submit" value='Upload'>
</form>


<div id='preview'></div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> -->

<script type="">
	//2. Script

// On upload button click create FormData() object and count total files are been selected.

// Loop on the selected files and append in form_data.

// Send AJAX POST request to ajaxfile.php. Pass form_data as data, set dataType: 'json', contentType: false, and processData: false.

// On AJAX successful callback loop on the response to get the file path.

// Append <img > element in <div id='preview' > where use src variable in img src attribute.



	$(document).ready(function(){
		

		$('#submit').click(function(e){
			e.preventDefault();

			const user_value = $("#user_value").val();
            const category = $("#category").val();
            const user_name = $("#user_name").val();

		   var form_data = new FormData();
		    form_data.append('category', document.getElementById('category').value);
        	form_data.append('user_name', document.getElementById('user_name').value);
        	form_data.append('user_value', document.getElementById('user_value').value);
		   // Read selected files
		   var totalfiles = document.getElementById('files').files.length;
		   for (var index = 0; index < totalfiles; index++) {
		      form_data.append("files[]", document.getElementById('files').files[index]);
		   }

		    if (document.getElementById('files').files.length == 0) {
		   	    alert("Please choose photos for upload");
		   	    return false;
		    }
		    // AJAX request
		    $.ajax({
		     	url: 'upload_general_loader.php', 
		     	type: 'post',
		     	data: form_data,
		     	dataType: 'json',
		     	contentType: false,
		     	processData: false,
		     	success: function (response) {

		        	for(var index = 0; index < response.length; index++) {
		         		var src = response[index];

		         		// alert users...
		         		$('#message').show();
		         		// Add img element in <div id='preview'>
		         		$('#preview').append('<img src="'+src+'" width="200px;" height="200px">');

		         		// alert("Your files uploaded successfully");

		         		setTimeout(() => {
                    		window.location.href = ''+user_value+'&category='+category+'&user_name='+user_name;
                		}, 10000);//../register.html?user_value=
		       		}

		     	}
		    });

		});

	});
</script>