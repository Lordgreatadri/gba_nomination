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

	$total_graduants = htmlspecialchars(htmlentities(trim(strip_tags($_POST["total_graduants"]))));
	$graduant_2017_name1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_name1"]))));
	$graduant_2017_email1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_email1"]))));
	$graduant_2017_phone1 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_phone1"]))));
	$accomplishment1_2017 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["accomplishment1_2017"]))));
	$graduant_2017_name2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_name2"]))));
	$graduant_2017_email2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_email2"]))));
	$graduant_2017_phone2 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_phone2"]))));
	$accomplishment2_2017 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["accomplishment2_2017"]))));
	$graduant_2017_name3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_name3"]))));
	$graduant_2017_email3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_email3"]))));
	$graduant_2017_phone3 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["graduant_2017_phone3"]))));
	$accomplishment3_2017 = htmlspecialchars(htmlentities(trim(strip_tags($_POST["accomplishment3_2017"]))));
	
 

	                
	// $duplicates = $data_Obj->duplicates_check("makeup_artist", $nominee_name, $email, $mobile_number, $category);

	// // var_dump($duplicates);
	// if (trim($duplicates) == 0) 
	// {
		$result = $data_Obj->update_beauty_school($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_graduants, $graduant_2017_name1, $graduant_2017_email1, $graduant_2017_phone1, $accomplishment1_2017, $graduant_2017_name2, $graduant_2017_email2, $graduant_2017_phone2 ,$accomplishment2_2017 ,$graduant_2017_name3 ,$graduant_2017_email3 ,$graduant_2017_phone3, $accomplishment3_2017);
		
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
	