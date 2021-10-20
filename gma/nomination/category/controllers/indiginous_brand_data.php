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

	foreach ($data_Obj->load_submitted_record("indiginous_brand", $user_value, $category) as $value) {
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


		$media_links = $value['media_links']; 
		$photo_link_csr = $value['photo_link_csr']; 
		$photo_link_events = $value['photo_link_events']; 
		$total_indiginous_product_sponsored = $value['total_indiginous_product_sponsored']; 
		$ghanaian_sponsorship1 = $value['ghanaian_sponsorship1']; 
		$ghanaian_sponsorship2 = $value['ghanaian_sponsorship2']; 
		$ghanaian_sponsorship3 = $value['ghanaian_sponsorship3'];
		$total_indiginous_outlet = $value['total_indiginous_outlet'];
		$total_indiginous_csr_projects = $value['total_indiginous_csr_projects'];
		$ghanaian_top_csr_project1 = $value['ghanaian_top_csr_project1']; 
		$ghanaian_top_csr_project2 = $value['ghanaian_top_csr_project2']; 
		$ghanaian_top_csr_project3 = $value['ghanaian_top_csr_project3']; 
		$total_indiginous_training = $value['total_indiginous_training'];
		$ghanaian_top_training_project1 = $value['ghanaian_top_training_project1'];
		$ghanaian_top_training_project2 = $value['ghanaian_top_training_project2'];
		$ghanaian_top_training_project3 = $value['ghanaian_top_training_project3'];
	}


	// SMS>>>>>>>>>>>>>>>>>>>>
	// $valid_mobile = $data_Obj->confirm_mobile_number($mobile_number);
	// $valid_mobile2 = $data_Obj->confirm_mobile_number($phone_number);

	// if ($valid_mobile == "OK") {
	// 	$data_Obj->user_sms_alert($mobile_number, $nominee_name, $category);
	// } elseif($valid_mobile2 == "OK") {
	// 	$data_Obj->user_sms_alert($phone_number, $nominee_name, $category);
	// }else{
	// 	// echo "invalid";
	// }


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

    $statsArray["media_links"] = $media_links;
    $statsArray["photo_link_csr"] = $photo_link_csr;
    $statsArray["photo_link_events"] = $photo_link_events;
    $statsArray["total_indiginous_product_sponsored"] = $total_indiginous_product_sponsored;
    $statsArray["ghanaian_sponsorship1"] = $ghanaian_sponsorship1;
    $statsArray["ghanaian_sponsorship2"] = $ghanaian_sponsorship2;
    $statsArray["ghanaian_sponsorship3"] = $ghanaian_sponsorship3;
    $statsArray["total_indiginous_outlet"] = $total_indiginous_outlet;
    $statsArray["total_indiginous_csr_projects"] = $total_indiginous_csr_projects;
    $statsArray["ghanaian_top_csr_project1"] = $ghanaian_top_csr_project1;
    $statsArray["ghanaian_top_csr_project2"] = $ghanaian_top_csr_project2;
    $statsArray["ghanaian_top_csr_project3"] = $ghanaian_top_csr_project3;
    $statsArray["total_indiginous_training"] = $total_indiginous_training;
    $statsArray["ghanaian_top_training_project1"] = $ghanaian_top_training_project1;
    $statsArray["ghanaian_top_training_project2"] = $ghanaian_top_training_project2;
    $statsArray["ghanaian_top_training_project3"] = $ghanaian_top_training_project3;


    $response['success'] = true;
    $response["message"] = 'results loaded';
    $response["data"] = $statsArray;


    header('Content-Type: application/json');
    echo json_encode($response);
}