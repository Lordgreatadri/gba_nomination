<?php 

include_once 'includes/autoload.inc.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$data_Obj = new DataAuth();

	$user_value = trim($_POST["user_value"]);
	$nominee_name = ucwords(htmlspecialchars(htmlentities(trim(strip_tags($_POST["nominee_name"]))))) ;
	$email = trim(strtolower($_POST["email"]));
	$mobile_number = ucwords(htmlspecialchars(htmlentities(trim(strip_tags($_POST["mobile_number"])))));
	$nominee_bio = htmlspecialchars(htmlentities(trim(strip_tags($_POST["nominee_bio"]))));
	$instagram = htmlspecialchars(htmlentities(trim(strip_tags($_POST["instagram"]))));
	$facebook = htmlspecialchars(htmlentities(trim(strip_tags($_POST["facebook"]))));
	$other = htmlspecialchars(htmlentities(trim(strip_tags($_POST["other"]))));
	$company_details = htmlspecialchars(htmlentities(trim(strip_tags($_POST["company_details"]))));
	$comapny_bio = htmlspecialchars(htmlentities(trim(strip_tags($_POST["comapny_bio"]))));
	$company_instagram = htmlspecialchars(htmlentities(trim(strip_tags($_POST["company_instagram"]))));
	$company_facebook = htmlspecialchars(htmlentities(trim(strip_tags($_POST["company_facebook"]))));
	$company_other = htmlspecialchars(htmlentities(trim(strip_tags($_POST["company_other"]))));
	$company_name = htmlspecialchars(htmlentities(trim(strip_tags($_POST["company_name"]))));
	$phone_number = htmlspecialchars(htmlentities(trim(strip_tags($_POST["phone_number"]))));
	$company_email = trim(strip_tags(strtolower($_POST["company_email"])));

	$category = trim(strip_tags($_POST["category"]));

	$media_links = htmlspecialchars(htmlentities(trim(strip_tags($_POST["media_links"]))));
	$photo_link_sponsor = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_link_sponsor"]))));
	$photo_link_csr = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_link_csr"]))));
	$photo_link_events = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_link_events"]))));
	$total_brand_sponsored = htmlspecialchars(htmlentities(trim(strip_tags($_POST["total_brand_sponsored"]))));
	$top_brand_sponsorship_event1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_sponsorship_event1"]))));
	$top_brand_sponsorship_event2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_sponsorship_event2"]))));
	$top_brand_sponsorship_event3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_sponsorship_event3"]))));
	$total_brand_distribution_outlet = htmlspecialchars(htmlentities(trim(strip_tags($_POST["total_brand_distribution_outlet"]))));
	$total_brand_csr_events = htmlspecialchars(htmlentities(trim(strip_tags($_POST["total_brand_csr_events"]))));
	$top_brand_csr_events1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_csr_events1"]))));
	$top_brand_csr_events2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_csr_events2"]))));
	$top_brand_csr_events3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_csr_events3"]))));
	$total_brand_training_event = htmlspecialchars(htmlentities(trim(strip_tags($_POST["total_brand_training_event"]))));
	$top_brand_training_initiative1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_training_initiative1"]))));
	$top_brand_training_initiative2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_training_initiative2"]))));
	$top_brand_training_initiative3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["top_brand_training_initiative3"]))));


 

	                
	// $duplicates = $data_Obj->duplicates_check("makeup_artist", $nominee_name, $email, $mobile_number, $category);

	// // var_dump($duplicates);
	// if (trim($duplicates) == 0) 
	// {
		$result = $data_Obj->update_makeup_brand($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email,$total_brand_sponsored, $top_brand_sponsorship_event1, $top_brand_sponsorship_event2, $top_brand_sponsorship_event3, $total_brand_distribution_outlet, $total_brand_csr_events, $top_brand_csr_events1, $top_brand_csr_events2 ,$top_brand_csr_events3 ,$total_brand_training_event ,$top_brand_training_initiative1 ,$top_brand_training_initiative2, $top_brand_training_initiative3, $media_links, $photo_link_sponsor, $photo_link_csr, $photo_link_events);
		
		if (trim($result > 0)) {
			$response['success'] = true;
            $response["message"] = 'Record updated successfully. Thank you...!';

            header('Content-Type: application/json');
            echo json_encode($response);
		} else {
			$response['success'] = false;
            $response["message"] = 'Record submission failed, kindly check all your entries and try again.';

            header('Content-Type: application/json');
            echo json_encode($response);
		}
		
	// } else {
	// 	$response['success'] = false;
 //    	$response["message"] = 'There is an entry for this nominee already under the chosen category...!';

 //        header('Content-Type: application/json');
	//     echo json_encode($response);
	// }
	
}
	