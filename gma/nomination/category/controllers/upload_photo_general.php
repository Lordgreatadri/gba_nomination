<?php 
	require_once 'dbconfig.php';
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
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

		
        //count total files...
        $countfiles = $countfiles = count($_FILES['files']['name']);
        // upload location
        $upload_location = "uploads/general/";
        // to store uploaded file path to display to user
        $files_arr = array();
        // loop all files
        for ($index = 0; $index < $countfiles; $index++) { 
        	// lfiles names
        	$filename    = $_FILES['files']['name'][$index];

        	$newName = $user_vallue.'-'.$user_name.'-'.$filename;
        	// get extension
        	$ext = pathinfo($filename,PATHINFO_EXTENSION);
        	// file type allowed
        	$allowed     = array('jpeg','jpg','png');
        	if(in_array(strtolower($ext), $allowed )) {
        		// file path 
        		$path = $upload_location.$newName;


        		$filedirectory = "http://mysmsinbox.com/gma/nomination/category/controllers/".$path;
        		//saving to the db............
	            $insertImageDetailsQuery = "INSERT INTO  upload_photo(user_name, user_value, category, business_photo_url) VALUES('$user_name', '$user_vallue', '$category', '$filedirectory')";


        		if(move_uploaded_file($_FILES['files']['tmp_name'][$index], $path)){
        			mysqli_query($conn, $insertImageDetailsQuery);
        			// move_uploaded_file($_FILES['files']['tmp_name'][$index], $path);

        			$files_arr[] = $path;
        			$response['success'] = true;
		        	$response["message"] = 'images uploaded successfully';
		        	$response['data'] = $files_arr;

		        	mysqli_close($conn);

			        header('Content-Type: application/json');
				    echo json_encode($response);
        		} else {
        			$response['success'] = true;
		        	$response["message"] = "Could not upload file";

		        	// mysqli_close($conn);

			        header('Content-Type: application/json');
				    echo json_encode($response);
        		}
        		
        	} else {
        		$response['success'] = true;
	        	$response["message"] = "upload only images";

	        	mysqli_close($conn);

		        header('Content-Type: application/json');
			    echo json_encode($response);
        	}
        	
        	

        }



        // //apend member name to rename 
        // $fileNameNew = $user_name."_".$user_vallue.'-'.$fileActualExt;
        // $filelocation = "../uploads/general/".$fileNameNew;

        // //countfiles......
        // $countfiles = count($_FILES['files']['name']);
        // //upload directory and link.
        // $filelocat = "../uploads/".$fileNameNew;
        // $filedirectory = "http://mysmsinbox.com/gma/nomination/category/".$filelocat;

        

        

    }


?>