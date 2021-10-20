<?php


// 3. PHP

// Create an ajaxfile.php file and a uploads directory to store files.

// Count total files, assign upload location to $upload_location, and create a $files_arr Array to store file path after file upload.

// Loop on the files.

// Initialize $valid_ext Array with valid image extensions.

// Check if the file extension exists in $valid_ext Array. If exists then upload the file and initialize $files_arr Array with $path.

// Return $files_arr in JSON format for image preview.

// Completed Code


   $serverName = "127.0.0.1";
   $databaseName = "makeup_awards"; 
   $databaseUser = "root";
   $databasePassword = "#4kLxMzGurQ7Z~";//#4kLxMzGurQ7Z" ;//'#4kLxMzGurQ7Z'; //Bim32!@b)o

   $conn = mysqli_connect($serverName, $databaseUser, $databasePassword, $databaseName);

   if (!$conn) 
   {
        die("unable to connect to database");
   }

   $user_vallue = $_POST['user_value'];
   $user_name   = $_POST['user_name'];
   $category    = $_POST['category'];


// Count total files
$countfiles = count($_FILES['files']['name']);

// Upload directory
$upload_location = "uploads/general/";

// To store uploaded files path
$files_arr = array();

// Loop all files
for($index = 0;$index < $countfiles;$index++){

   if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
      // File name
      $filename = $_FILES['files']['name'][$index];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      $newname = $user_name.'-'.$user_vallue.'-'.$filename;


      // Valid image extension
      $valid_ext = array("png","jpeg","jpg");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         // $path = $upload_location.$filename;
         $path = $upload_location.$newname;
         $filedirectory = "http://mysmsinbox.com/gma/nomination/category/".$path;

         // Upload file
         if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
            $files_arr[] = $path;
            $insertImageDetailsQuery = "INSERT INTO  upload_photo( user_name, user_value, category, business_photo_url) VALUES('$user_name', '$user_vallue', '$category', '$filedirectory')";
            mysqli_query($conn, $insertImageDetailsQuery);
         }
      }
   }
}

echo json_encode($files_arr);
die;