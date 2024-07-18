<?php
include("connect.php");
if (isset($_POST['submit']))
{
    
    $zname=$_POST['fname'];
    $zroll=$_POST['froll'];
    $zyear=$_POST['year'];
    $zbranch=$_POST['Branch'];
    $zdob=$_POST['fdob'];
    $zreason=$_POST['freason'];
	$zdate=date("Y-m-d");

   
    $query=mysqli_query($conn, "INSERT into infotable values('$zname','$zroll','$zyear','$zbranch','$zdob','$zreason','$zdate')");

}
else{
    echo "not submitted properly";
}

?>


<!DOCTYPE html>
<html>

<head>


	<title>Upload Documents</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>


	<div class="upload">
		<h1><u>UPLOAD YOUR DOCUMENTS</u></h1>
	</div>
	<div class="main">
		<form action="dbdoc1.php" method="post" enctype="multipart/form-data">

			<br>
			<br>

			<div id="rollid">
				<h2 class="rollid">Roll no:</h2><br>
				<input type='text' name='roll1'><br><br>

				<div id="id">
					<h2 class="id">ID Card :</h2><br>
					<input type='file' name='idcard'><br><br>

					<div id="appform">
						<h2 class="appform">Transaction id:</h2><br>
						<input type='text' name='trid'><br><br>



						<center><button input type='submit' class="pop" name='submit'>SUBMIT</button></center>


					</div>
				</div>

			</div>


		</form>
</body>

</html>