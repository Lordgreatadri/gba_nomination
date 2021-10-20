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

	foreach ($data_Obj->load_submitted_record("makeup_brand", $user_value, $category) as $value) {
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
		$photo_link_sponsor = $value['photo_link_sponsor'];
		$photo_link_csr = $value['photo_link_csr'];
		$photo_link_events = $value['photo_link_events'];
		$total_brand_sponsored = $value['total_brand_sponsored']; 
		$top_brand_sponsorship_event1 = $value['top_brand_sponsorship_event1']; 
		$top_brand_sponsorship_event2 = $value['top_brand_sponsorship_event2']; 
		$top_brand_sponsorship_event3 = $value['top_brand_sponsorship_event3'];
		$total_brand_distribution_outlet = $value['total_brand_distribution_outlet'];
		$total_brand_csr_events = $value['total_brand_csr_events'];
		$top_brand_csr_events1 = $value['top_brand_csr_events1']; 
		$top_brand_csr_events2 = $value['top_brand_csr_events2']; 
		$top_brand_csr_events3 = $value['top_brand_csr_events3']; 
		$total_brand_training_event = $value['total_brand_training_event'];
		$top_brand_training_initiative1 = $value['top_brand_training_initiative1'];
		$top_brand_training_initiative2 = $value['top_brand_training_initiative2'];
		$top_brand_training_initiative3 = $value['top_brand_training_initiative3'];
	}

 	
 // 	$valid_mobile = $data_Obj->confirm_mobile_number($mobile_number);
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
    $statsArray["photo_link_sponsor"] = $photo_link_sponsor;
    $statsArray["photo_link_csr"] = $photo_link_csr;
    $statsArray["photo_link_events"] = $photo_link_events;
    $statsArray["total_brand_sponsored"] = $total_brand_sponsored;
    $statsArray["top_brand_sponsorship_event1"] = $top_brand_sponsorship_event1;
    $statsArray["top_brand_sponsorship_event2"] = $top_brand_sponsorship_event2;
    $statsArray["top_brand_sponsorship_event3"] = $top_brand_sponsorship_event3;
    $statsArray["total_brand_distribution_outlet"] = $total_brand_distribution_outlet;
    $statsArray["total_brand_csr_events"] = $total_brand_csr_events;
    $statsArray["top_brand_csr_events1"] = $top_brand_csr_events1;
    $statsArray["top_brand_csr_events2"] = $top_brand_csr_events2;
    $statsArray["top_brand_csr_events3"] = $top_brand_csr_events3;
    $statsArray["total_brand_training_event"] = $total_brand_training_event;
    $statsArray["top_brand_training_initiative1"] = $top_brand_training_initiative1;
    $statsArray["top_brand_training_initiative2"] = $top_brand_training_initiative2;
    $statsArray["top_brand_training_initiative3"] = $top_brand_training_initiative3;


    $response['success'] = true;
    $response["message"] = 'results loaded';
    $response["data"] = $statsArray;


    header('Content-Type: application/json');
    echo json_encode($response);
}