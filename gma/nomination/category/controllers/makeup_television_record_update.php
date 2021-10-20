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

	$tvstation_name = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_name"]))));
	$website_url = htmlspecialchars(htmlentities(trim(strip_tags($_POST["website_url"]))));
	$tvstation_video = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video"]))));
	$tvstation_video_description = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video_description"]))));
	$tvstation_video2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video2"]))));
	$tvstation_video_description2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video_description2"]))));
	$tvstation_video3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video3"]))));
	$tvstation_video_description3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video_description3"]))));
	$tvstation_video4 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video4"]))));
	$tvstation_video_description4 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video_description4"]))));
	$tvstation_video5 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video5"]))));
	$tvstation_video_description5 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["tvstation_video_description5"]))));
	// $ghanaian_top_training_project3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["ghanaian_top_training_project3"]))));


 

            		
	                
	// $duplicates = $data_Obj->duplicates_check("makeup_artist", $nominee_name, $email, $mobile_number, $category);

	// // var_dump($duplicates);
	// if (trim($duplicates) == 0) 
	// {
		$result = $data_Obj->update_television($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $tvstation_name, $website_url, $tvstation_video, $tvstation_video_description, $tvstation_video2, $tvstation_video_description2, $tvstation_video3, $tvstation_video_description3 ,$tvstation_video4 ,$tvstation_video_description4 ,$tvstation_video5 ,$tvstation_video_description5);//, $ghanaian_top_training_project3
		
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
	