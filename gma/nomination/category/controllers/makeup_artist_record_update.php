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

	$photo_link1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_link1"]))));
	$makeupart_description1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["makeupart_description1"]))));
	$photo_link2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_link2"]))));
	$makeupart_description2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["makeupart_description2"]))));
	$photo_editorial_link1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_editorial_link1"]))));
	$editorial_description1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["editorial_description1"]))));
	$photo_editorial_link2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_editorial_link2"]))));
	$editorial_description2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["editorial_description2"]))));
	$photo_bridal_link1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_bridal_link1"]))));
	$bridal_work_description1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["bridal_work_description1"]))));
	$photo_bridal_link2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["photo_bridal_link2"]))));
	$bridal_work_description2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["bridal_work_description2"]))));

	                
	// $duplicates = $data_Obj->duplicates_check("makeup_artist", $nominee_name, $email, $mobile_number, $category);

	// // var_dump($duplicates);
	// if (trim($duplicates) == 0) makeup_artist_record_update.php 
	// {
		$result = $data_Obj->update_makeup_artist($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $makeupart_description1, $photo_link2, $makeupart_description2, $photo_editorial_link1, $editorial_description1, $photo_editorial_link2, $editorial_description2, $photo_bridal_link1, $bridal_work_description1, $photo_bridal_link2, $bridal_work_description2);
		
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
	