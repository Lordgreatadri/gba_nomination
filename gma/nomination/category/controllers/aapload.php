<?php 
	require_once 'dbconfig.php';
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{


// http://mysmsinbox.com/gma/nomination/category/upload_general.php?user_name=Emmanue&category=Best%20barber%20of%20ther%20year&user_value=ioje9rueuy7er65e44dfde3




		// var_dump($_REQUEST);
		// die();
		// $file        = $_FILES['business_document'];
		$user_vallue = $_POST['user_value'];
		$user_name   = $_POST['user_name'];
		$category    = $_POST['category'];


		$fileName    = $_FILES['files']['name'];
        $fileTmpName = $_FILES['files']['tmp_name'];
        $fileSize    = $_FILES['files']['size'];
        $fileError   = $_FILES['files']['error'];
        $fileType    = $_FILES['files']['type'];

        $fileExt     = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed     = array('jpeg','jpg','png');

        //apend member name to rename image............rand(1000000000,1000).time()."." . 
        $fileNameNew = $user_name."_".$user_vallue.'-'.$fileActualExt;
        $filelocation = "../uploads/general/".$fileNameNew;

        //countfiles......
        $countfiles = count($_FILES['files']['name']);
        //upload directory and link.
        $filelocat = "../uploads/".$fileNameNew;
        $filedirectory = "http://mysmsinbox.com/gma/nomination/category/".$filelocat;

        // to store uploaded file path
        $files_arr = array();

        // loop all files
        for ($index = 0; $index < $countfiles; $index++) { 
        	// lfiles names
        	$fileName    = $_FILES['files']['name'][$index];
        	// get extension
        	$ext = pathinfo($fileName,PATHINFO_EXTENSION);



        	if(in_array(strtolower($ext), $allowed)) 
	        {
	        	// if($fileError == 0) 
	         //    {
	         //    	if($fileSize < 1600000)
	         //        {               	
	                	// $fileNameNew = "2019-nominee_".rand(1000000000,1000).substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6).time()."." . $fileActualExt;

	                	

	                    //saving to the db............
	                    $insertImageDetailsQuery = "INSERT INTO  upload_photo(user_name, user_value, category, business_photo_url) VALUES('$user_name', '$user_vallue', '$category', '$filedirectory')";
						if (mysqli_query($conn, $insertImageDetailsQuery)) {
							// move_uploaded_file($fileTmpName, $filelocat);
							move_uploaded_file($_FILES['files']['tmp_name'][$index], $filelocation);



							
							// $_SESSION['uploaded'] = "<h6  class='text-center' style='color: green;'> Image uploaded successfully!</h6>";
	      //                           header("Location: ../upload_general.php?success=upload_succeeded");
							$response['success'] = true;
				        	$response["message"] = 'images uploaded successfully';

				        	mysqli_close($conn);

					        header('Content-Type: application/json');
						    echo json_encode($response);
						}

	       //          }else
	       //          {
	       //          	// $_SESSION['uploaded'] = "<h6 class='text-center' style='color: red;'> Image size too large!</h6>";
	       //              // header("Location: ../upload_general.php?failed=upload_file_big");
	       //              $response['success'] = true;
			     //    	$response["message"] = 'images file is too big';

			     //    	mysqli_close($conn);

				    //     header('Content-Type: application/json');
					   //  echo json_encode($response);
	       //          }

	       //      }else{
	       //      	// $_SESSION['uploaded'] = "<h6  class='text-center' style='color: warning;'> Error uploading your image!</h6>";
	       //       	//    header("Location: ../upload_general.php?error=upload_serror");
	       //      	$response['success'] = false;
		      //   	$response["message"] = 'images upload error';

		      //   	mysqli_close($conn);

			     //    header('Content-Type: application/json');
				    // echo json_encode($response);
	       //      }

	        }else{
	        	// $_SESSION['uploaded'] = "<h6  class='text-center' style='color: warning;'>Please upload images only!</h6>";
	            // header("Location: ../upload_general.php?error=upload_serror");
	            $response['success'] = false;
	        	$response["message"] = 'upload image files only';

	        	mysqli_close($conn);

		        header('Content-Type: application/json');
			    echo json_encode($response);
	        }

        }

    }


?>