<?php 
// Include the database configuration file  
require_once 'connect.php'; 
ini_set('mysql.connect_timeout',300);
ini_set('default_socket_timeout',300);
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    $urollno=$_POST['roll1'];
    $utrid=$_POST['trid'];
    if(!empty($_FILES["idcard"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["idcard"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $idcard = $_FILES['idcard']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($idcard)); 
         
            // Insert idcard content into database 
            $insert = $conn->query("INSERT into doctable (idcard,rollno,sbi) VALUES ('$imgContent','$urollno','$utrid')"); 
             
            if($insert){ 
                header('location:message.html');
    exit;
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
echo $statusMsg; 

} 

?>