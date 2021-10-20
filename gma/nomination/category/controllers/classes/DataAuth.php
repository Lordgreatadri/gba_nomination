<?php 

	include_once 'includes/autoload.inc.php';

	/**
	 * 
	 */
	class DataAuth extends DbCon
	{
		
		// public function __construct()
		// {
			
		// }



		// MAIL ALERT TO USER>>>>>>>>>>>>>>>>>>>>>>>
		public function send_user_email_alert($nominee_name, $nominee_email, $category)
		{
			try 
			{
				if (trim($nominee_email !="")) 
				{
					$ch =  curl_init('http://52.214.1.251/client/mail/mailer.php');  
			            curl_setopt( $ch, CURLOPT_POST, true );  
			            curl_setopt( $ch, CURLOPT_POSTFIELDS, array('nominee_name' => $nominee_name,'nominee_email' => $nominee_email,'category' => $category, 'user_value' => 'MccCustomScrollbar','host_link' => 'ussd'));  
			            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

			        $result = curl_exec($ch); 
			        $err = curl_error($ch);
			        curl_close($ch);
				} else {
					# code...
				}
				
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		// function for the sms prompt..........
		public function user_sms_alert($user_number, $nominee_name, $category)
		{

			$message = "GHANA BEAUTY AWARDS\n\nHello ".$nominee_name.",\nYour nomination for '".$category."' category was received. Thank you & all the best!";

			try 
			{
				$myNew_value = null;
	            $raw_number  ='';
	            if(strlen($user_number) == 10)
	            {   //convert your string into array
	                $array_num = str_split($user_number);

	                for($i = 1; $i <count($array_num) ; $i++)
	                {        
	                    $myNew_value .= $array_num[$i];
	                }
	                 
	                $raw_number = '233'. $myNew_value;

	            }else
	            {
	                $raw_number = $user_number; 
	            }
	            
	            $msisdn = $raw_number;//var_dump($msisdn);
	            $message = urlencode($message);//200.2.168.175:2199 54.163.215.114
	            $url = "http://34.230.90.80:2788/Receiver?User=mycloudhttp&Pass=M1C2T3&From=1470&To=$msisdn&Text=$message";
	            $curl = curl_init();
	            curl_setopt_array($curl, array(
	                CURLOPT_RETURNTRANSFER => 1,
	                CURLOPT_URL => $url
	            ));
	           
	            $result = curl_exec($curl);
	            $error = curl_error($curl);

	            if ($error) {
	                echo "There was an: ". $error;
	            } else{
	                //var_dump($result);
	            }
	            // echo json_encode($result);
	            curl_close($curl);
	            return $result;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}


		public function confirm_mobile_number($user_number) 
		{
			try 
			{
				//first check if the number received in 233 format........
				$myNew_value=null;
				$valid_number ='';//count($striped_num)
				if(strlen($user_number) > 10)
				{	
					//convert your string into array
					$array_num = str_split($user_number);

					for($i = 3; $i < count($array_num) ; $i++)
					{	     
					    $myNew_value .= $array_num[$i];
					}
					 
					$valid_number = '0'. $myNew_value;
				}else
				{
					$valid_number = $user_number;	
				}

				//check for channell type.................................
				$result = mb_substr($valid_number, 0, 3);

				$network = '';
				if(trim($result)  == '054'  || trim($result) == '055' || trim($result) == '024' || trim($result) == '059')
				{
					$network = 'OK';
					
				}elseif($result == '027' || $result == '057' || $result == '026' || $result == '056') 
				{
					$network = 'OK';
				}elseif($result == '020' || $result == '050') 
				{
					$network = 'OK';
				}

				return $network;
				// var_dump($network);
			} catch (Exception $exc) 
			{
				echo __LINE__ . $exc->getMessage();
			}
		}




		// check duplicate entry............
		public function duplicates_check($data_table, $nominee_name, $nominee_email, $nominee_phone, $category)
		{
			try 
			{
				$sql = "SELECT * FROM `$data_table` WHERE nominee_name = '$nominee_name' AND category = '$category' AND mobile_number = '$nominee_phone' ";
				$query = $this->db_conn->query($sql);
				$query->execute();
				$query->setFetchMode(PDO::FETCH_ASSOC);
				// $result = $query->fetchAll();
				$result = $query->rowCount();
	        	return $result;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		// load data for update............
		public function load_submitted_record($data_table, $user_value, $category)
		{
			try 
			{
				$sql = "SELECT * FROM `$data_table` WHERE user_value = '$user_value' AND category = '$category' ";
				$query = $this->db_conn->query($sql);
				$query->execute();
				$query->setFetchMode(PDO::FETCH_ASSOC);
				$result = $query->fetchAll();
	        	return $result;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	









							#######################################################################
		// hair_brand
		public function save_hair_brand_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_hair_brand_sponsored, $top_sponsorship1, $top_sponsorship2, $top_sponsorship3, $total_brand_outlet, $total_csr_events, $top_csr_project1, $top_csr_project2 ,$top_csr_project3 ,$total_brand_training ,$top_training_project1 ,$top_training_project2, $top_training_project3, $media_links, $contact_lists, $photo_link_csr, $photo_training_link)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_hair_brand_sponsored, $top_sponsorship1, $top_sponsorship2, $top_sponsorship3, $total_brand_outlet, $total_csr_events, $top_csr_project1, $top_csr_project2 ,$top_csr_project3 ,$total_brand_training ,$top_training_project1 ,$top_training_project2, $top_training_project3, $media_links, $contact_lists, $photo_link_csr, $photo_training_link
		        );

		        $sql = "INSERT INTO hair_brand(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, total_hair_brand_sponsored, top_sponsorship1, top_sponsorship2, top_sponsorship3, total_brand_outlet, total_csr_events, top_csr_project1, top_csr_project2 ,top_csr_project3 ,total_brand_training ,top_training_project1 ,top_training_project2, top_training_project3, media_links, contact_lists, photo_link_csr, photo_training_link) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


        // hair_brand...................
		public function update_hair_brand($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_hair_brand_sponsored, $top_sponsorship1, $top_sponsorship2, $top_sponsorship3, $total_brand_outlet, $total_csr_events, $top_csr_project1, $top_csr_project2 ,$top_csr_project3 ,$total_brand_training ,$top_training_project1 ,$top_training_project2, $top_training_project3, $media_links, $contact_lists, $photo_link_csr, $photo_training_link)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "total_hair_brand_sponsored"=>$total_hair_brand_sponsored, "top_sponsorship1"=>$top_sponsorship1, "top_sponsorship2"=>$top_sponsorship2, "top_sponsorship3"=>$top_sponsorship3, "total_brand_outlet"=>$total_brand_outlet, "total_csr_events"=>$total_csr_events, "top_csr_project1"=>$top_csr_project1, "top_csr_project2"=>$top_csr_project2, "top_csr_project3"=>$top_csr_project3, "total_brand_training"=>$total_brand_training, "top_training_project1"=>$top_training_project1, "top_training_project2"=>$top_training_project2, "top_training_project3"=>$top_training_project3, "media_links"=>$media_links, "contact_lists"=>$contact_lists, "photo_link_csr"=>$photo_link_csr, "photo_training_link"=>$photo_training_link
		        );

		        $sql = "UPDATE hair_brand SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, total_hair_brand_sponsored=:total_hair_brand_sponsored, top_sponsorship1=:top_sponsorship1, top_sponsorship2=:top_sponsorship2, top_sponsorship3=:top_sponsorship3, total_brand_outlet=:total_brand_outlet, total_csr_events=:total_csr_events, top_csr_project1=:top_csr_project1, top_csr_project2=:top_csr_project2, top_csr_project3=:top_csr_project3, total_brand_training=:total_brand_training, top_training_project1=:top_training_project1, top_training_project2=:top_training_project2, top_training_project3=:top_training_project3, media_links=:media_links, contact_lists=:contact_lists, photo_link_csr=:photo_link_csr, photo_training_link=:photo_training_link  WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}





		
		// save makeup_artist today................
		public function save_makeup_artist_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $makeupart_description1, $photo_link2, $makeupart_description2, $photo_editorial_link1, $editorial_description1, $photo_editorial_link2, $editorial_description2, $photo_bridal_link1, $bridal_work_description1, $photo_bridal_link2, $bridal_work_description2)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $makeupart_description1, $photo_link2, $makeupart_description2, $photo_editorial_link1, $editorial_description1, $photo_editorial_link2, $editorial_description2, $photo_bridal_link1, $bridal_work_description1, $photo_bridal_link2, $bridal_work_description2
		        );

		        $sql = "INSERT INTO makeup_artist(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, photo_link1, makeupart_description1, photo_link2, makeupart_description2, photo_editorial_link1, editorial_description1, photo_editorial_link2, editorial_description2, photo_bridal_link1, bridal_work_description1, photo_bridal_link2, bridal_work_description2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}



		public function update_makeup_artist($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $makeupart_description1, $photo_link2, $makeupart_description2, $photo_editorial_link1, $editorial_description1, $photo_editorial_link2, $editorial_description2, $photo_bridal_link1, $bridal_work_description1, $photo_bridal_link2, $bridal_work_description2)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "photo_link1"=>$photo_link1, "makeupart_description1"=>$makeupart_description1, "photo_link2"=>$photo_link2, "makeupart_description2"=>$makeupart_description2, "photo_editorial_link1"=>$photo_editorial_link1, "editorial_description1"=>$editorial_description1, "photo_editorial_link2"=>$photo_editorial_link2, "editorial_description2"=>$editorial_description2, "photo_bridal_link1"=>$photo_bridal_link1, "bridal_work_description1"=>$bridal_work_description1, "photo_bridal_link2"=>$photo_bridal_link2, "bridal_work_description2"=>$bridal_work_description2 
		        );

		        $sql = "UPDATE makeup_artist SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, photo_link1=:photo_link1, makeupart_description1=:makeupart_description1, photo_link2=:photo_link2, makeupart_description2=:makeupart_description2, photo_editorial_link1=:photo_editorial_link1, editorial_description1=:editorial_description1, photo_editorial_link2=:photo_editorial_link2, editorial_description2=:editorial_description2, photo_bridal_link1=:photo_bridal_link1, bridal_work_description1=:bridal_work_description1, photo_bridal_link2=:photo_bridal_link2, bridal_work_description2=:bridal_work_description2 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}



##########################################################################################################

			// save special_effects today................
		public function save_special_effects_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link, $photo_description, $special_effect_link, $special_effect_print, $theatre_link, $theatre_description, $social_media_link, $social_media_description)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link, $photo_description, $special_effect_link, $special_effect_print, $theatre_link, $theatre_description, $social_media_link, $social_media_description
		        );

		        $sql = "INSERT INTO special_effects(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, photo_link, photo_description, special_effect_link, special_effect_print, theatre_link, theatre_description, social_media_link, social_media_description) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}



		// update_special_effect...................
		public function update_special_effect($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link, $photo_description, $special_effect_link, $special_effect_print, $theatre_link, $theatre_description, $social_media_link, $social_media_description)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "photo_link"=>$photo_link, "photo_description"=>$photo_description, "special_effect_link"=>$special_effect_link, "special_effect_print"=>$special_effect_print, "theatre_link"=>$theatre_link, "theatre_description"=>$theatre_description, "social_media_link"=>$social_media_link, "social_media_description"=>$social_media_description
		        );

		        $sql = "UPDATE special_effects SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, photo_link=:photo_link, photo_description=:photo_description, special_effect_link=:special_effect_link, special_effect_print=:special_effect_print, theatre_link=:theatre_link, theatre_description=:theatre_description, social_media_link=:social_media_link, social_media_description=:social_media_description WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


		// public function update_editorial($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_project_name1, $editorial_project_description1, $editorial_project_name2, $editorial_project_description2, $editorial_project_name3, $editorial_project_description3)
		// {
		// 	try 
		// 	{
		// 		$params = array(
		// 			"user_value"=>$user_value,
		// 			"category"=>$category,
		// 	    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "editorial_project_name1"=>$editorial_project_name1, "editorial_project_description1"=>$editorial_project_description1, "editorial_project_name2"=>$editorial_project_name2, "editorial_project_description2"=>$editorial_project_description2, "editorial_project_name3"=>$editorial_project_name3, "editorial_project_description3"=>$editorial_project_description3 
		//         );

		//         $sql = "UPDATE editorial SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, editorial_project_name1=:editorial_project_name1, editorial_project_description1=:editorial_project_description1, editorial_project_name2=:editorial_project_name2, editorial_project_description2=:editorial_project_description2, editorial_project_name3=:editorial_project_name3, editorial_project_description3=:editorial_project_description3 WHERE user_value=:user_value AND category=:category";
		//         $query = $this->db_conn->prepare($sql);
		// 		$query->execute($params);
		//         $result = $query->rowCount();
		// 		return $result;
		// 	} catch (Exception $exc) 
		// 	{
		// 		echo $exc->getMessage();
		// 	}
		// }




		##############################################################################################
		// save_editorial_nomination
		public function save_editorial_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_project_name1, $photo_link1, $editorial_project_description1, $editorial_project_name2, $photo_link2, $editorial_project_description2, $editorial_project_name3, $photo_link3, $editorial_project_description3)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_project_name1, $photo_link1, $editorial_project_description1, $editorial_project_name2, $photo_link2, $editorial_project_description2, $editorial_project_name3, $photo_link3, $editorial_project_description3
		        );

		        $sql = "INSERT INTO editorial(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, 

		        editorial_project_name1, photo_link1, editorial_project_description1, editorial_project_name2, photo_link2, editorial_project_description2, editorial_project_name3, photo_link3, editorial_project_description3) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}

				// editorial...................
		public function update_editorial($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_project_name1, $photo_link1, $editorial_project_description1, $editorial_project_name2, $photo_link2, $editorial_project_description2, $editorial_project_name3, $photo_link3, $editorial_project_description3)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "editorial_project_name1"=>$editorial_project_name1, "photo_link1"=>$photo_link1, "editorial_project_description1"=>$editorial_project_description1, "editorial_project_name2"=>$editorial_project_name2, "photo_link2"=>$photo_link2, "editorial_project_description2"=>$editorial_project_description2, "editorial_project_name3"=>$editorial_project_name3, "photo_link3"=> $photo_link3, "editorial_project_description3"=>$editorial_project_description3 
		        );

		        $sql = "UPDATE editorial SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, editorial_project_name1=:editorial_project_name1, photo_link1=:photo_link1, editorial_project_description1=:editorial_project_description1, editorial_project_name2=:editorial_project_name2, photo_link2=:photo_link2, editorial_project_description2=:editorial_project_description2, editorial_project_name3=:editorial_project_name3, photo_link3=:photo_link3, editorial_project_description3=:editorial_project_description3 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		// save_editorial_nomination
		public function save_bridal_makeup_artist_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $bridal_project_description1, $photo_link2, $bridal_project_description2, $photo_link3, $bridal_project_description3)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $bridal_project_description1, $photo_link2, $bridal_project_description2, $photo_link3, $bridal_project_description3
		        );

		        $sql = "INSERT INTO bridal_makeup_artist(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, photo_link1, bridal_project_description1, photo_link2, bridal_project_description2, photo_link3, bridal_project_description3) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}

				// editorial...................
		public function update_bridal_makeup_artist($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $photo_link1, $bridal_project_description1, $photo_link2, $bridal_project_description2, $photo_link3, $bridal_project_description3)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "photo_link1"=>$photo_link1, "bridal_project_description1"=>$bridal_project_description1, "photo_link2"=>$photo_link2, "bridal_project_description2"=>$bridal_project_description2, "photo_link3"=>$photo_link3, "bridal_project_description3"=>$bridal_project_description3 
		        );

		        $sql = "UPDATE bridal_makeup_artist SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, photo_link1=:photo_link1, bridal_project_description1=:bridal_project_description1, photo_link2=:photo_link2, bridal_project_description2=:bridal_project_description2, photo_link3=:photo_link3, bridal_project_description3=:bridal_project_description3 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		// hair_stylist
		public function save_hair_stylist_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $hairstylist_bridal_description1, $hairstylist_bridal_description2, $hairstylist_editorial_description1, $hairstylist_editorial_description2, $hairstylist_redcarpet_description1, $hairstylist_redcarpet_description2, $hairstylist_bridal_link1, $hairstylist_bridal_link2, $hairstylist_editorial_link1, $hairstylist_editorial_link2, $hairstylist_redcarpet_link1, $hairstylist_redcarpet_link2)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $hairstylist_bridal_description1, $hairstylist_bridal_description2, $hairstylist_editorial_description1, $hairstylist_editorial_description2, $hairstylist_redcarpet_description1, $hairstylist_redcarpet_description2, $hairstylist_bridal_link1, $hairstylist_bridal_link2, $hairstylist_editorial_link1, $hairstylist_editorial_link2, $hairstylist_redcarpet_link1, $hairstylist_redcarpet_link2
		        );

		        $sql = "INSERT INTO hair_stylist(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, hairstylist_bridal_description1, hairstylist_bridal_description2, hairstylist_editorial_description1, hairstylist_editorial_description2, hairstylist_redcarpet_description1, hairstylist_redcarpet_description2, hairstylist_bridal_link1, hairstylist_bridal_link2, hairstylist_editorial_link1, hairstylist_editorial_link2, hairstylist_redcarpet_link1, hairstylist_redcarpet_link2) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?,?,?,?,?,?,?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


				// hair_stylist...................
		public function update_hair_stylist($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $hairstylist_bridal_description1, $hairstylist_bridal_description2, $hairstylist_editorial_description1, $hairstylist_editorial_description2, $hairstylist_redcarpet_description1, $hairstylist_redcarpet_description2, $hairstylist_bridal_link1, $hairstylist_bridal_link2, $hairstylist_editorial_link1, $hairstylist_editorial_link2, $hairstylist_redcarpet_link1, $hairstylist_redcarpet_link2)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "hairstylist_bridal_description1"=>$hairstylist_bridal_description1, "hairstylist_bridal_description2"=>$hairstylist_bridal_description2, "hairstylist_editorial_description1"=>$hairstylist_editorial_description1, "hairstylist_editorial_description2"=>$hairstylist_editorial_description2, "hairstylist_redcarpet_description1"=>$hairstylist_redcarpet_description1, "hairstylist_redcarpet_description2"=>$hairstylist_redcarpet_description2, "hairstylist_bridal_link1"=>$hairstylist_bridal_link1, "hairstylist_bridal_link2"=>$hairstylist_bridal_link2, "hairstylist_editorial_link1"=>$hairstylist_editorial_link1, "hairstylist_editorial_link2"=>$hairstylist_editorial_link2, "hairstylist_redcarpet_link1"=>$hairstylist_redcarpet_link1, "hairstylist_redcarpet_link2"=>$hairstylist_redcarpet_link2
		        );

		        $sql = "UPDATE hair_stylist SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, hairstylist_bridal_description1=:hairstylist_bridal_description1, hairstylist_bridal_description2=:hairstylist_bridal_description2, hairstylist_editorial_description1=:hairstylist_editorial_description1, hairstylist_editorial_description2=:hairstylist_editorial_description2, hairstylist_redcarpet_description1=:hairstylist_redcarpet_description1, hairstylist_redcarpet_description2=:hairstylist_redcarpet_description2, hairstylist_bridal_link1=:hairstylist_bridal_link1, hairstylist_bridal_link2=:hairstylist_bridal_link2, hairstylist_editorial_link1=:hairstylist_editorial_link1, hairstylist_editorial_link2=:hairstylist_editorial_link2, hairstylist_redcarpet_link1=:hairstylist_redcarpet_link1, hairstylist_redcarpet_link2=:hairstylist_redcarpet_link2 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		#######################################################################
		// general_nomination
		public function save_general_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $contact1 = "", $contact2="", $contact3="", $contact4="", $contact5="")
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $contact1, $contact2, $contact3, $contact4, $contact5
		        );

		        $sql = "INSERT INTO general_nomination(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, contact1, contact2, contact3, contact4, contact5) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


				// general_nomination...................
		public function update_general_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email
		        );

		        $sql = "UPDATE general_nomination SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		// beauty_retail_business
		public function save_beauty_retail_business_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_retail_sponsored, $top_retail_sponsorship_event1, $top_retail_sponsorship_event2, $top_retail_sponsorship_event3, $customer_list, $contact_list)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_retail_sponsored, $top_retail_sponsorship_event1, $top_retail_sponsorship_event2, $top_retail_sponsorship_event3, $customer_list, $contact_list
		        );

		        $sql = "INSERT INTO beauty_retail_business(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, total_retail_sponsored, top_retail_sponsorship_event1, top_retail_sponsorship_event2, top_retail_sponsorship_event3, customer_list, contact_list) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}

				// beauty_retail_business...................
		public function update_beauty_retail_business($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_retail_sponsored, $top_retail_sponsorship_event1, $top_retail_sponsorship_event2, $top_retail_sponsorship_event3, $customer_list)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "total_retail_sponsored"=>$total_retail_sponsored, "top_retail_sponsorship_event1"=>$top_retail_sponsorship_event1, "top_retail_sponsorship_event2"=>$top_retail_sponsorship_event2, "top_retail_sponsorship_event3"=>$top_retail_sponsorship_event3, "customer_list"=>$customer_list
		        );

		        $sql = "UPDATE beauty_retail_business SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, total_retail_sponsored=:total_retail_sponsored, top_retail_sponsorship_event1=:top_retail_sponsorship_event1, top_retail_sponsorship_event2=:top_retail_sponsorship_event2, top_retail_sponsorship_event3=:top_retail_sponsorship_event3, customer_list=:customer_list WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
				#######################################################################
		// beauty_school
		public function save_beauty_school_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_graduants, $graduant_2017_name1, $graduant_2017_email1, $graduant_2017_phone1, $accomplishment1_2017, $graduant_2017_name2, $graduant_2017_email2, $graduant_2017_phone2 ,$accomplishment2_2017 ,$graduant_2017_name3 ,$graduant_2017_email3 ,$graduant_2017_phone3, $accomplishment3_2017)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_graduants, $graduant_2017_name1, $graduant_2017_email1, $graduant_2017_phone1, $accomplishment1_2017, $graduant_2017_name2, $graduant_2017_email2, $graduant_2017_phone2 ,$accomplishment2_2017 ,$graduant_2017_name3 ,$graduant_2017_email3 ,$graduant_2017_phone3, $accomplishment3_2017
		        );

		        $sql = "INSERT INTO beauty_school(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, total_graduants, graduant_2017_name1, graduant_2017_email1, graduant_2017_phone1, accomplishment1_2017, graduant_2017_name2, graduant_2017_email2, graduant_2017_phone2 ,accomplishment2_2017 ,graduant_2017_name3 ,graduant_2017_email3 ,graduant_2017_phone3, accomplishment3_2017) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


				// beauty_school...................
		public function update_beauty_school($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_graduants, $graduant_2017_name1, $graduant_2017_email1, $graduant_2017_phone1, $accomplishment1_2017, $graduant_2017_name2, $graduant_2017_email2, $graduant_2017_phone2 ,$accomplishment2_2017 ,$graduant_2017_name3 ,$graduant_2017_email3 ,$graduant_2017_phone3, $accomplishment3_2017)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "total_graduants"=>$total_graduants, "graduant_2017_name1"=>$graduant_2017_name1, "graduant_2017_email1"=>$graduant_2017_email1, "graduant_2017_phone1"=>$graduant_2017_phone1, "accomplishment1_2017"=>$accomplishment1_2017, "graduant_2017_name2"=>$graduant_2017_name2, "graduant_2017_email2"=>$graduant_2017_email2, "graduant_2017_phone2"=>$graduant_2017_phone2, "accomplishment2_2017"=>$accomplishment2_2017, "graduant_2017_name3"=>$graduant_2017_name3, "graduant_2017_email3"=>$graduant_2017_email3, "graduant_2017_phone3"=>$graduant_2017_phone3, "accomplishment3_2017"=>$accomplishment3_2017
		        );

		        $sql = "UPDATE beauty_school SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, total_graduants=:total_graduants, graduant_2017_name1=:graduant_2017_name1, graduant_2017_email1=:graduant_2017_email1, graduant_2017_phone1=:graduant_2017_phone1, accomplishment1_2017=:accomplishment1_2017, graduant_2017_name2=:graduant_2017_name2, graduant_2017_email2=:graduant_2017_email2, graduant_2017_phone2=:graduant_2017_phone2, accomplishment2_2017=:accomplishment2_2017, graduant_2017_name3=:graduant_2017_name3, graduant_2017_email3=:graduant_2017_email3, graduant_2017_phone3=:graduant_2017_phone3, accomplishment3_2017=:accomplishment3_2017 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
					#######################################################################
		// indiginous_brand
		public function save_indiginous_brand_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_indiginous_product_sponsored, $ghanaian_sponsorship1, $ghanaian_sponsorship2, $ghanaian_sponsorship3, $total_indiginous_outlet, $total_indiginous_csr_projects, $ghanaian_top_csr_project1, $ghanaian_top_csr_project2 ,$ghanaian_top_csr_project3 ,$total_indiginous_training ,$ghanaian_top_training_project1 ,$ghanaian_top_training_project2, $ghanaian_top_training_project3, $media_links, $photo_link_csr, $photo_link_events)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_indiginous_product_sponsored, $ghanaian_sponsorship1, $ghanaian_sponsorship2, $ghanaian_sponsorship3, $total_indiginous_outlet, $total_indiginous_csr_projects, $ghanaian_top_csr_project1, $ghanaian_top_csr_project2 ,$ghanaian_top_csr_project3 ,$total_indiginous_training ,$ghanaian_top_training_project1 ,$ghanaian_top_training_project2, $ghanaian_top_training_project3, $media_links, $photo_link_csr, $photo_link_events
		        );

		        $sql = "INSERT INTO indiginous_brand(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, total_indiginous_product_sponsored, ghanaian_sponsorship1, ghanaian_sponsorship2, ghanaian_sponsorship3, total_indiginous_outlet, total_indiginous_csr_projects, ghanaian_top_csr_project1, ghanaian_top_csr_project2 , ghanaian_top_csr_project3 ,total_indiginous_training ,ghanaian_top_training_project1 ,ghanaian_top_training_project2, ghanaian_top_training_project3, media_links, photo_link_csr, photo_link_events) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


        // indiginous_brand...................
		public function update_indiginous_brand($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_indiginous_product_sponsored, $ghanaian_sponsorship1, $ghanaian_sponsorship2, $ghanaian_sponsorship3, $total_indiginous_outlet, $total_indiginous_csr_projects, $ghanaian_top_csr_project1, $ghanaian_top_csr_project2 ,$ghanaian_top_csr_project3 ,$total_indiginous_training ,$ghanaian_top_training_project1 ,$ghanaian_top_training_project2, $ghanaian_top_training_project3, $media_links, $photo_link_csr, $photo_link_events)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "total_indiginous_product_sponsored"=>$total_indiginous_product_sponsored, "ghanaian_sponsorship1"=>$ghanaian_sponsorship1, "ghanaian_sponsorship2"=>$ghanaian_sponsorship2, "ghanaian_sponsorship3"=>$ghanaian_sponsorship3, "total_indiginous_outlet"=>$total_indiginous_outlet, "total_indiginous_csr_projects"=>$total_indiginous_csr_projects, "ghanaian_top_csr_project1"=>$ghanaian_top_csr_project1, "ghanaian_top_csr_project2"=>$ghanaian_top_csr_project2, "ghanaian_top_csr_project3"=>$ghanaian_top_csr_project3, "total_indiginous_training"=>$total_indiginous_training, "ghanaian_top_training_project1"=>$ghanaian_top_training_project1, "ghanaian_top_training_project2"=>$ghanaian_top_training_project2, "ghanaian_top_training_project3"=>$ghanaian_top_training_project3, "media_links"=>$media_links, "photo_link_csr"=>$photo_link_csr, "photo_link_events"=>$photo_link_events
		        );

		        $sql = "UPDATE indiginous_brand SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, total_indiginous_product_sponsored=:total_indiginous_product_sponsored, ghanaian_sponsorship1=:ghanaian_sponsorship1, ghanaian_sponsorship2=:ghanaian_sponsorship2, ghanaian_sponsorship3=:ghanaian_sponsorship3, total_indiginous_outlet=:total_indiginous_outlet, total_indiginous_csr_projects=:total_indiginous_csr_projects, ghanaian_top_csr_project1=:ghanaian_top_csr_project1, ghanaian_top_csr_project2=:ghanaian_top_csr_project2, ghanaian_top_csr_project3=:ghanaian_top_csr_project3, total_indiginous_training=:total_indiginous_training, ghanaian_top_training_project1=:ghanaian_top_training_project1, ghanaian_top_training_project2=:ghanaian_top_training_project2, ghanaian_top_training_project3=:ghanaian_top_training_project3, media_links=:media_links, photo_link_csr=:photo_link_csr, photo_link_events=:photo_link_events WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		// photographer
		public function save_photographer_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_photo_description1, $editorial_photo_description2, $bridal_photo_description1, $bridal_photo_description2, $photo_link_editorial, $photo_link_bridal)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_photo_description1, $editorial_photo_description2, $bridal_photo_description1, $bridal_photo_description2 , $photo_link_editorial, $photo_link_bridal
		        );

		        $sql = "INSERT INTO photographer(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, editorial_photo_description1, editorial_photo_description2, bridal_photo_description1, bridal_photo_description2 , photo_link_editorial, photo_link_bridal) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}

	             	 
		// photographer...................
		public function update_photographer($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $editorial_photo_description1, $editorial_photo_description2, $bridal_photo_description1, $bridal_photo_description2, $photo_link_editorial, $photo_link_bridal)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "editorial_photo_description1"=>$editorial_photo_description1, "editorial_photo_description2"=>$editorial_photo_description2, "bridal_photo_description1"=>$bridal_photo_description1, "bridal_photo_description2"=> $bridal_photo_description2, "photo_link_editorial"=>$photo_link_editorial, "photo_link_bridal"=>$photo_link_bridal 
		        );

		        $sql = "UPDATE photographer SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, editorial_photo_description1=:editorial_photo_description1, editorial_photo_description2=:editorial_photo_description2, bridal_photo_description1=:bridal_photo_description1, bridal_photo_description2=:bridal_photo_description2, photo_link_editorial=:photo_link_editorial, photo_link_bridal=:photo_link_bridal WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		##################################################################
		// makeup_brand
		public function save_makeup_brand_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_brand_sponsored, $top_brand_sponsorship_event1, $top_brand_sponsorship_event2, $top_brand_sponsorship_event3, $total_brand_distribution_outlet, $total_brand_csr_events, $top_brand_csr_events1, $top_brand_csr_events2 ,$top_brand_csr_events3 ,$total_brand_training_event ,$top_brand_training_initiative1 ,$top_brand_training_initiative2, $top_brand_training_initiative3, $media_links, $photo_link_sponsor, $photo_link_csr, $photo_link_events)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_brand_sponsored, $top_brand_sponsorship_event1, $top_brand_sponsorship_event2, $top_brand_sponsorship_event3, $total_brand_distribution_outlet, $total_brand_csr_events, $top_brand_csr_events1, $top_brand_csr_events2 ,$top_brand_csr_events3 ,$total_brand_training_event ,$top_brand_training_initiative1 ,$top_brand_training_initiative2, $top_brand_training_initiative3, $media_links, $photo_link_sponsor, $photo_link_csr, $photo_link_events
		        );

		        $sql = "INSERT INTO makeup_brand(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, total_brand_sponsored, top_brand_sponsorship_event1, top_brand_sponsorship_event2, top_brand_sponsorship_event3, total_brand_distribution_outlet, total_brand_csr_events, top_brand_csr_events1, top_brand_csr_events2 , top_brand_csr_events3 ,total_brand_training_event ,top_brand_training_initiative1 ,top_brand_training_initiative2, top_brand_training_initiative3, media_links, photo_link_sponsor, photo_link_csr, photo_link_events) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}



        // makeup_brand...................
		public function update_makeup_brand($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $total_brand_sponsored, $top_brand_sponsorship_event1, $top_brand_sponsorship_event2, $top_brand_sponsorship_event3, $total_brand_distribution_outlet, $total_brand_csr_events, $top_brand_csr_events1, $top_brand_csr_events2 ,$top_brand_csr_events3 ,$total_brand_training_event ,$top_brand_training_initiative1 ,$top_brand_training_initiative2, $top_brand_training_initiative3, $media_links, $photo_link_sponsor, $photo_link_csr, $photo_link_events)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, 

			    	"total_brand_sponsored"=>$total_brand_sponsored, "top_brand_sponsorship_event1"=>$top_brand_sponsorship_event1, "top_brand_sponsorship_event2"=>$top_brand_sponsorship_event2, "top_brand_sponsorship_event3"=>$top_brand_sponsorship_event3, "total_brand_distribution_outlet"=>$total_brand_distribution_outlet, "total_brand_csr_events"=>$total_brand_csr_events, "top_brand_csr_events1"=>$top_brand_csr_events1, "top_brand_csr_events2"=>$top_brand_csr_events2, "top_brand_csr_events3"=>$top_brand_csr_events3, "total_brand_training_event"=>$total_brand_training_event, "top_brand_training_initiative1"=>$top_brand_training_initiative1, "top_brand_training_initiative2"=>$top_brand_training_initiative2, "top_brand_training_initiative3"=>$top_brand_training_initiative3, "media_links"=>$media_links, "photo_link_sponsor"=>$photo_link_sponsor, "photo_link_csr"=>$photo_link_csr, "photo_link_events"=>$photo_link_events
		        );

		        $sql = "UPDATE makeup_brand SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, total_brand_sponsored=:total_brand_sponsored, top_brand_sponsorship_event2=:top_brand_sponsorship_event2, top_brand_sponsorship_event1=:top_brand_sponsorship_event1, top_brand_sponsorship_event3=:top_brand_sponsorship_event3, total_brand_distribution_outlet=:total_brand_distribution_outlet, total_brand_csr_events=:total_brand_csr_events, top_brand_csr_events1=:top_brand_csr_events1, top_brand_csr_events2=:top_brand_csr_events2, top_brand_csr_events3=:top_brand_csr_events3, total_brand_training_event=:total_brand_training_event, top_brand_training_initiative1=:top_brand_training_initiative1, top_brand_training_initiative2=:top_brand_training_initiative2, top_brand_training_initiative3=:top_brand_training_initiative3, media_links=:media_links, photo_link_sponsor=:photo_link_sponsor, photo_link_csr=:photo_link_csr, photo_link_events=:photo_link_events WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		#######################################################################
		// skincare_brand
		public function save_skincare_brand_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $skincare_product_comment, $skincare_total_outlets, $media_links)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $skincare_product_comment, $skincare_total_outlets, $media_links
		        );

		        $sql = "INSERT INTO skincare_brand(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, skincare_product_comment, skincare_total_outlets, media_links) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?,?,?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}

				// skincare_brand...................
		public function update_skincare_brand($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $skincare_product_comment, $skincare_total_outlets, $media_links)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "skincare_product_comment"=>$skincare_product_comment, "skincare_total_outlets"=>$skincare_total_outlets, "media_links"=>$media_links
		        );

		        $sql = "UPDATE skincare_brand SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, skincare_product_comment=:skincare_product_comment, skincare_total_outlets=:skincare_total_outlets, media_links=:media_links WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}




		#######################################################################
		// digital_marketing
		public function save_digital_marketing_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $midea_category_list, $digital_campaign_summmary, $digital_insight, $digital_big_idea, $digital_execution, $digital_results)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $midea_category_list, $digital_campaign_summmary, $digital_insight, $digital_big_idea, $digital_execution, $digital_results
		        );

		        $sql = "INSERT INTO digital_marketing(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, midea_category_list, digital_campaign_summmary, digital_insight, digital_big_idea, digital_execution, digital_results) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}

	             	 
		// digital_marketing...................
		public function update_digital_marketing($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $midea_category_list, $digital_campaign_summmary, $digital_insight, $digital_big_idea, $digital_execution, $digital_results)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "midea_category_list"=>$midea_category_list, "digital_campaign_summmary"=>$digital_campaign_summmary, "digital_insight"=>$digital_insight, "digital_big_idea"=> $digital_big_idea, "digital_execution"=> $digital_execution, "digital_results"=>$digital_results 
		        );

		        $sql = "UPDATE digital_marketing SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, midea_category_list=:midea_category_list, digital_campaign_summmary=:digital_campaign_summmary, digital_insight=:digital_insight, digital_big_idea=:digital_big_idea, digital_execution=:digital_execution, digital_results=:digital_results WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}








					#######################################################################
		// beauty_vlog
		public function save_beauty_vlog_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $vlog_name, $vlog_url, $vlog_cat1_post1, $vlog_cat1_post2, $vlog_cat2_post1, $vlog_cat2_post2, $vlog_cat3_post1, $vlog_cat3_post2 ,$vlog_cat4_post1 ,$vlog_cat4_post2 ,$vlog_engagement_post1 ,$vlog_engagement_post2, $vlog_engagement_post3)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $vlog_name, $vlog_url, $vlog_cat1_post1, $vlog_cat1_post2, $vlog_cat2_post1, $vlog_cat2_post2, $vlog_cat3_post1, $vlog_cat3_post2 ,$vlog_cat4_post1 ,$vlog_cat4_post2 ,$vlog_engagement_post1 ,$vlog_engagement_post2, $vlog_engagement_post3
		        );

		        $sql = "INSERT INTO beauty_vlog(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, vlog_name, vlog_url, vlog_cat1_post1, vlog_cat1_post2, vlog_cat2_post1, vlog_cat2_post2, vlog_cat3_post1, vlog_cat3_post2 , vlog_cat4_post1 ,vlog_cat4_post2 ,vlog_engagement_post1 ,vlog_engagement_post2, vlog_engagement_post3) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


        // beauty_vlog...................
		public function update_beauty_vlog($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $vlog_name, $vlog_url, $vlog_cat1_post1, $vlog_cat1_post2, $vlog_cat2_post1, $vlog_cat2_post2, $vlog_cat3_post1, $vlog_cat3_post2 ,$vlog_cat4_post1 ,$vlog_cat4_post2 ,$vlog_engagement_post1 ,$vlog_engagement_post2, $vlog_engagement_post3)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "vlog_name"=>$vlog_name, "vlog_url"=>$vlog_url, "vlog_cat1_post1"=>$vlog_cat1_post1, "vlog_cat1_post2"=>$vlog_cat1_post2, "vlog_cat2_post1"=>$vlog_cat2_post1, "vlog_cat2_post2"=>$vlog_cat2_post2, "vlog_cat3_post1"=>$vlog_cat3_post1, "vlog_cat3_post2"=>$vlog_cat3_post2, "vlog_cat4_post1"=>$vlog_cat4_post1, "vlog_cat4_post2"=>$vlog_cat4_post2, "vlog_engagement_post1"=>$vlog_engagement_post1, "vlog_engagement_post2"=>$vlog_engagement_post2, "vlog_engagement_post3"=>$vlog_engagement_post3
		        );

		        $sql = "UPDATE beauty_vlog SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, vlog_name=:vlog_name, vlog_url=:vlog_url, vlog_cat1_post1=:vlog_cat1_post1, vlog_cat1_post2=:vlog_cat1_post2, vlog_cat2_post1=:vlog_cat2_post1, vlog_cat2_post2=:vlog_cat2_post2, vlog_cat3_post1=:vlog_cat3_post1, vlog_cat3_post2=:vlog_cat3_post2, vlog_cat4_post1=:vlog_cat4_post1, vlog_cat4_post2=:vlog_cat4_post2, vlog_engagement_post1=:vlog_engagement_post1, vlog_engagement_post2=:vlog_engagement_post2, vlog_engagement_post3=:vlog_engagement_post3 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}







					#######################################################################
		// makeup_television
		public function save_television_nomination($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $tvstation_name, $website_url, $tvstation_video, $tvstation_video_description, $tvstation_video2, $tvstation_video_description2, $tvstation_video3, $tvstation_video_description3 ,$tvstation_video4 ,$tvstation_video_description4 ,$tvstation_video5 ,$tvstation_video_description5)
		{
			try 
			{
				$params = array(
			    	$user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $tvstation_name, $website_url, $tvstation_video, $tvstation_video_description, $tvstation_video2, $tvstation_video_description2, $tvstation_video3, $tvstation_video_description3 ,$tvstation_video4 ,$tvstation_video_description4 ,$tvstation_video5 ,$tvstation_video_description5
		        );

		        $sql = "INSERT INTO makeup_television(user_value, category, nominee_name, email, mobile_number, nominee_bio, instagram, facebook, other, company_details, comapny_bio, company_instagram, company_facebook, company_other, company_name, phone_number, company_email, tvstation_name, website_url, tvstation_video, tvstation_video_description, tvstation_video2, tvstation_video_description2, tvstation_video3, tvstation_video_description3 , tvstation_video4 ,tvstation_video_description4 ,tvstation_video5 ,tvstation_video_description5) VALUES(?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?)";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}


        // makeup_television...................
		public function update_television($user_value, $category, $nominee_name, $email, $mobile_number, $nominee_bio, $instagram, $facebook, $other, $company_details, $comapny_bio, $company_instagram, $company_facebook, $company_other, $company_name, $phone_number, $company_email, $tvstation_name, $website_url, $tvstation_video, $tvstation_video_description, $tvstation_video2, $tvstation_video_description2, $tvstation_video3, $tvstation_video_description3 ,$tvstation_video4 ,$tvstation_video_description4 ,$tvstation_video5 ,$tvstation_video_description5)
		{
			try 
			{
				$params = array(
					"user_value"=>$user_value,
					"category"=>$category,
			    	"nominee_name"=>$nominee_name, "email"=>$email, "mobile_number"=>$mobile_number, "nominee_bio"=>$nominee_bio, "instagram"=>$instagram, "facebook"=>$facebook, "other"=>$other, "company_details"=>$company_details, "comapny_bio"=>$comapny_bio, "company_instagram"=>$company_instagram, "company_facebook"=>$company_facebook, "company_other"=>$company_other, "company_name"=>$company_name, "phone_number"=>$phone_number, "company_email"=>$company_email, "tvstation_name"=>$tvstation_name, "website_url"=>$website_url, "tvstation_video"=>$tvstation_video, "tvstation_video_description"=>$tvstation_video_description, "tvstation_video2"=>$tvstation_video2, "tvstation_video_description2"=>$tvstation_video_description2, "tvstation_video3"=>$tvstation_video3, "tvstation_video_description3"=>$tvstation_video_description3, "tvstation_video4"=>$tvstation_video4, "tvstation_video_description4"=>$tvstation_video_description4, "tvstation_video5"=>$tvstation_video5, "tvstation_video_description5"=>$tvstation_video_description5
		        );

		        $sql = "UPDATE makeup_television SET nominee_name=:nominee_name, email=:email, mobile_number=:mobile_number, nominee_bio=:nominee_bio, instagram=:instagram, facebook=:facebook, other=:other, company_details=:company_details, comapny_bio=:comapny_bio, company_instagram=:company_instagram, company_facebook=:company_facebook, company_other=:company_other, company_name=:company_name, phone_number=:phone_number, company_email=:company_email, tvstation_name=:tvstation_name, website_url=:website_url, tvstation_video=:tvstation_video, tvstation_video_description=:tvstation_video_description, tvstation_video2=:tvstation_video2, tvstation_video_description2=:tvstation_video_description2, tvstation_video3=:tvstation_video3, tvstation_video_description3=:tvstation_video_description3, tvstation_video4=:tvstation_video4, tvstation_video_description4=:tvstation_video_description4, tvstation_video5=:tvstation_video5, tvstation_video_description5=:tvstation_video_description5 WHERE user_value=:user_value AND category=:category";
		        $query = $this->db_conn->prepare($sql);
				$query->execute($params);
		        $result = $query->rowCount();
				return $result;
			} catch (Exception $exc) 
			{
				echo $exc->getMessage();
			}
		}








	}