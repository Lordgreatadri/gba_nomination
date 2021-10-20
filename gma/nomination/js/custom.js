
const btnSubmit = document.getElementById('btnSubmit');

btnSubmit.addEventListener("click", function(){



	const inpFile = document.getElementById('inpFile');
	const inpFile2 = document.getElementById('inpFile2');
	


	//get input text input fields.
	const fullName = document.getElementById('nominee_name').value;
	const dob      = document.getElementById('dob').value;
	const nationality = document.getElementById('nationality').value;
	const mobile_number = document.getElementById('mobile_number').value;
	const address     = document.getElementById('address').value;
	const email      = document.getElementById('email').value;
	const organisation = document.getElementById('organisation').value;
	const profession  = document.getElementById('profession').value;
	const previous_work = document.getElementById('previous_work').value;
	const mobile_network = document.getElementById('mobile_network').value;
	const accepted_terms = document.getElementById("checkbox").checked === true ? 'yes' : 'no';





	//check that no field is empty.

    
	if(fullName === "" || dob === "" || nationality === "" || mobile_number === ""
		|| address === "" || email === "" || organisation === "" || profession === ""
		|| previous_work === "" || mobile_network === "" || accepted_terms === "" || 
		inpFile === null || inpFile2 === null){

		//alert(fullName);
	    //console.log(fullName);

	    swal("Oops!", "Please all required fields are to be field", "error");
	}else if(accepted_terms === 'no'){
        swal("Agree to payment terms!", 'Please agree to the payment terms by ticking or checking  "Yes" ', "error");
	}else{

		//show loader
		$('#loader').show();
		const xhr = new XMLHttpRequest();
	    const formData = new FormData();

	    formData.append("profileImg", inpFile.files[0]);
	    formData.append("full_name", fullName);
	    formData.append("dob", dob);
	    formData.append("nationality", nationality);
	    formData.append("mobile_number", mobile_number);
	    formData.append("address", address);
	    formData.append("email", email);
	    formData.append("organisation", organisation);
	    formData.append("profession", profession);
	    formData.append("previous_work", previous_work);
	    formData.append("mobile_network", mobile_network);
	    formData.append("accepted_terms", accepted_terms);

	    for(const file of inpFile2.files){

	      formData.append("multiFiles[]", file);
	    }


	    xhr.onreadystatechange = function() {
		    if (xhr.readyState === 4) {

		      var result = JSON.parse(xhr.response)
		      console.log(result);
		      if(result.status === "200"){
		      	invokeCheckStatus(result.last_id);
		      	//swal("Approve Payment!", "A mobile money approval prompt has been sent to the mobile money number you provided, please kindly approve payment of 10GHC, in order to complete the registration process ", "success");
		      	clearFields();
		      }else if(xhr.response === "209"){
		      	$('#loader').fadeOut("slow");
		      	swal("Registration failed!", "Accepted Image formats are .jpg, .jpeg and .png", "error");
		      }else if(xhr.response === "309"){
		      	$('#loader').fadeOut("slow");
		      	swal("Error!", "The image you tried to upload is larger than 2MB. Images uploaded shouldn't be more than 2MB", "error");
		      }
		      
		    }
		}

	    xhr.open("post", "../maskup/upload.php");
	    xhr.send(formData);
	}


	/*
    

    console.log(formData);
    */

   function clearFields(){

   	document.getElementById('nominee_name').value = "";
	document.getElementById('dob').value = "";
	document.getElementById('nationality').value = "";
	document.getElementById('mobile_number').value = "";
	document.getElementById('address').value = "";
	document.getElementById('email').value = "";
	document.getElementById('organisation').value = "";
	document.getElementById('profession').value = "";
	document.getElementById('previous_work').value = "";
	document.getElementById('mobile_network').value = "";
	document.getElementById("checkbox").checked = false;
	document.getElementById('inpFile').value = null;
	document.getElementById('inpFile2').value = null;

   }
});

var checker;
function invokeCheckStatus(id){
	checker = setInterval(function(){checkStatus(id)}, 10000);
}




function checkStatus(id){
	const xhr2 = new XMLHttpRequest();
	const formData2 = new FormData();
	formData2.append("last_id", id);

	xhr2.onreadystatechange = function() {

		if (xhr2.readyState === 4) {

			

			var result = JSON.parse(xhr2.response);
			console.log(result);

			if(result.status == 'paid'){
			  $('#loader').fadeOut("slow");
			  clearInterval(checker);
			  swal("Congrats! Your registeration is complete. Click ok to proceed to print your registration slip ")
			  .then((value) => {
				  //swal(`The returned value is: ${id}`);
				  window.open("profile.php?id="+id);
			  });
			}else if(result.status == 'nofund'){
              $('#loader').fadeOut("slow");
			  clearInterval(checker);
			  //window.open("profile.php?id="+id);
			  window.location.href = "profile.php?id="+id;
			  //swal("Insufficient Fund!", "Sorry! You dont have sufficient fund in your Momo wallet. Please try again", "error");
			}else{
				console.log("We will continue checking");
			}


		}

	}

	xhr2.open("post", "checkpay.php");
	xhr2.send(formData2);
}