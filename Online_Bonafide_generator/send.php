<!DOCTYPE html>
<html>
    <body>
        <div id="few">
            
</div>
</body>
</html>

<?php
 include("connect.php");



 if(isset($_POST['send']))
 {
    $getnum1=$_POST['send'];
    $q5=mysqli_query($conn,"SELECT email FROM account WHERE rollno=$getnum1");
    $rows=mysqli_fetch_assoc($q5);
    $newval5=$rows['email'];
//    $receiver="shradhayeole2002@gmail.com";
   $receiver=$newval5;
    $sub="sending mail"; 
    $msg="hey there";
    $sender="From:DIVS";

    $filename = 'oxy.pdf';
$path = 'C:\Users\hp\Downloads';
$file = $path . "/" . $filename;
$content = file_get_contents($file);
$content = chunk_split(base64_encode($content));

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (RFC)
$eol = "\r\n";

// main header (multipart mandatory)
$headers = "From: name <vedantyeole2003@gmail.com>" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
$headers .= "This is a MIME encoded message." . $eol;

$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment" . $eol;
$body .= $content . $eol;
$body .= "--" . $separator . "--";

    // $status=mail("vaishnaviyeole@gmail.com","first mail",$msg);
    $status=mail($receiver,$sub,$body,$headers);

    if($status)
    {
        $q4=mysqli_query($conn,"DELETE FROM doctable WHERE rollno=$getnum1");
        $q5=mysqli_query($conn,"DELETE FROM infotable WHERE froll=$getnum1");
        unlink('C:\Users\hp\Downloads\oxy.pdf');
        header('location:xit.php');
        exit;

    //   $query1=mysqli_query($conn, "delete from doctable");

    }
    else{
    echo "Check Internet Connection / something went wrong";}



    // $getnum1=$_POST['send'];

    // $q2=mysqli_query($conn,"SELECT email FROM account WHERE rollno=$getnum1");
    // $rows=mysqli_fetch_assoc($q2);
    // $find=$rows['email'];
   
    // $receiver="vaishinde95@gmail.com";
    //  $sub="sending mail";
    //  $msg="hey there";
    //  $sender="From:DIVS";
     
    //  $status=mail($find,$sub,$msg,$sender);
    //  if($status)
    //  {
    //      echo "yes";
         
    //     echo $find;
    //  }
    //  else{
    //      echo "no";
    //  }

 }
 else
 {
     echo "something went wrong ";
 }

    ?>
