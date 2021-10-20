<?php 

include_once 'includes/autoload.inc.php';
if($_SERVER['REQUEST_METHOD'] == 'GET') 
{
	$data_Obj = new DataAuth();
	$response = array();
    $statsArray = array();
	$user_value = $_GET['user'];
	$category = $_GET['category'];


	$nominee_name = "";
	 $email = "";
	$mobile_number = ""; $nominee_bio = ""; $instagram = ""; $facebook = ""; $other = "";  $company_details = ""; $comapny_bio = ""; $company_instagram = ""; $company_facebook = ""; $company_other = ""; $company_name = ""; $phone_number = ""; $company_email = ""; $photo_description = ""; $special_effect_print = ""; $theatre_description = ""; 
	$social_media_description = "";

	foreach ($data_Obj->load_submitted_record("beauty_school", $user_value, $category) as $value) {
		$nominee_name = $value['nominee_name'];
		$email = $value['email'];
		$mobile_number = $value['mobile_number']; 
		$nominee_bio = $value['nominee_bio'];
		$instagram = $value['instagram'];
		$facebook = $value['facebook'];
		$other = $value['other'];  
		$company_details = $value['company_details']; 
		$comapny_bio = $value['comapny_bio']; 
		$company_instagram = $value['company_instagram']; 
		$company_facebook = $value['company_facebook']; 
		$company_other = $value['company_other']; 
		$company_name = $value['company_name']; 
		$phone_number = $value['phone_number']; 
		$company_email = $value['company_email']; 


		$total_graduants = $value['total_graduants']; 
		$graduant_2017_name1 = $value['graduant_2017_name1']; 
		$graduant_2017_email1 = $value['graduant_2017_email1']; 
		$graduant_2017_phone1 = $value['graduant_2017_phone1'];
		$accomplishment1_2017 = $value['accomplishment1_2017'];
		$graduant_2017_name2 = $value['graduant_2017_name2'];
		$graduant_2017_email2 = $value['graduant_2017_email2']; 
		$graduant_2017_phone2 = $value['graduant_2017_phone2']; 
		$accomplishment2_2017 = $value['accomplishment2_2017']; 
		$graduant_2017_name3 = $value['graduant_2017_name3'];
		$graduant_2017_email3 = $value['graduant_2017_email3'];
		$graduant_2017_phone3 = $value['graduant_2017_phone3'];
		$accomplishment3_2017 = $value['accomplishment3_2017'];
	}



	// SMS alert..........
	$valid_mobile = $data_Obj->confirm_mobile_number($mobile_number);
	$valid_mobile2 = $data_Obj->confirm_mobile_number($phone_number);

	if ($valid_mobile == "OK") {
		$data_Obj->user_sms_alert($mobile_number, $nominee_name, $category);
	} elseif($valid_mobile2 == "OK") {
		$data_Obj->user_sms_alert($phone_number, $nominee_name, $category);
	}else{
		// echo "invalid";
	}

	$statsArray["nominee_name"] = $nominee_name;
    $statsArray["email"] = $email;
    $statsArray["mobile_number"] = $mobile_number;
    $statsArray["nominee_bio"] = $nominee_bio;
    $statsArray['instagram'] = $instagram;
    $statsArray["facebook"] = $facebook;
    $statsArray["other"] = $other;
    $statsArray["company_details"] = $company_details;
    $statsArray["comapny_bio"] = $comapny_bio;
    $statsArray["company_instagram"] = $company_instagram;
    $statsArray["company_facebook"] = $company_facebook;
    $statsArray["company_other"] = $company_other;
    $statsArray["company_name"] = $company_name;
    $statsArray["phone_number"] = $phone_number;
    $statsArray["company_email"] = $company_email;

    $statsArray["total_graduants"] = $total_graduants;
    $statsArray["graduant_2017_name1"] = $graduant_2017_name1;
    $statsArray["graduant_2017_email1"] = $graduant_2017_email1;
    $statsArray["graduant_2017_phone1"] = $graduant_2017_phone1;
    $statsArray["accomplishment1_2017"] = $accomplishment1_2017;
    $statsArray["graduant_2017_name2"] = $graduant_2017_name2;
    $statsArray["graduant_2017_email2"] = $graduant_2017_email2;
    $statsArray["graduant_2017_phone2"] = $graduant_2017_phone2;
    $statsArray["accomplishment2_2017"] = $accomplishment2_2017;
    $statsArray["graduant_2017_name3"] = $graduant_2017_name3;
    $statsArray["graduant_2017_email3"] = $graduant_2017_email3;
    $statsArray["graduant_2017_phone3"] = $graduant_2017_phone3;
    $statsArray["accomplishment3_2017"] = $accomplishment3_2017;


    $response['success'] = true;
    $response["message"] = 'results loaded';
    $response["data"] = $statsArray;


    header('Content-Type: application/json');
    echo json_encode($response);
}