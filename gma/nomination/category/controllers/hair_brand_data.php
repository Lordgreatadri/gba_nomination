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

	foreach ($data_Obj->load_submitted_record("hair_brand", $user_value, $category) as $value) 
	{
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


		$total_hair_brand_sponsored = $value['total_hair_brand_sponsored']; 
		$top_sponsorship1 = $value['top_sponsorship1']; 
		$top_sponsorship2 = $value['top_sponsorship2']; 
		$top_sponsorship3 = $value['top_sponsorship3'];
		$total_brand_outlet = $value['total_brand_outlet'];
		$total_csr_events = $value['total_csr_events'];
		$top_csr_project1 = $value['top_csr_project1']; 
		$top_csr_project2 = $value['top_csr_project2']; 
		$top_csr_project3 = $value['top_csr_project3']; 
		$total_brand_training = $value['total_brand_training'];
		$top_training_project1 = $value['top_training_project1'];
		$top_training_project2 = $value['top_training_project2'];
		$top_training_project3 = $value['top_training_project3'];

		$media_links = $value['media_links']; 
		$contact_lists = $value['contact_lists']; 
		$photo_link_csr = $value['photo_link_csr']; 
		$photo_training_link = $value['photo_training_link']; 
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

    $statsArray["media_links"] = $media_links;
    $statsArray["contact_lists"] = $contact_lists;
    $statsArray["photo_link_csr"] = $photo_link_csr;
     $statsArray["photo_training_link"] = $photo_training_link;

    $statsArray["total_hair_brand_sponsored"] = $total_hair_brand_sponsored;
    $statsArray["top_sponsorship1"] = $top_sponsorship1;
    $statsArray["top_sponsorship2"] = $top_sponsorship2;
    $statsArray["top_sponsorship3"] = $top_sponsorship3;
    $statsArray["total_brand_outlet"] = $total_brand_outlet;
    $statsArray["total_csr_events"] = $total_csr_events;
    $statsArray["top_csr_project1"] = $top_csr_project1;
    $statsArray["top_csr_project2"] = $top_csr_project2;
    $statsArray["top_csr_project3"] = $top_csr_project3;
    $statsArray["total_brand_training"] = $total_brand_training;
    $statsArray["top_training_project1"] = $top_training_project1;
    $statsArray["top_training_project2"] = $top_training_project2;
    $statsArray["top_training_project3"] = $top_training_project3;


    $response['success'] = true;
    $response["message"] = 'results loaded';
    $response["data"] = $statsArray;


    header('Content-Type: application/json');
    echo json_encode($response);
}