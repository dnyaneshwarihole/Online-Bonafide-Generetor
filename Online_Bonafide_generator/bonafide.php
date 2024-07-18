<?php //uncomment line 16 to delete record

 include("connect.php");

 if(isset($_POST['approve']))
 {
    $val1=$_POST['approve'];
	

    $q1=mysqli_query($conn,"SELECT * FROM infotable WHERE froll=$val1");
    $rows=mysqli_fetch_assoc($q1);
    $newval1=$rows['fname'];
    $newval2=$rows['froll'];
    $newval3=$rows['year'];
    $newval4=$rows['Branch'];
    $newval5=$rows['fdob'];
    $newval6=$rows['freason'];
    $newval7=$rows['cudate'];
    // $num1=mysqli_num_rows($q1);
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bonafide Certificate</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style1.css">
</head>
<body>
<form action="send.php" method="POST">
	<div class="main" id="element1">
		<img align="left" src="https://scontent.fstv8-1.fna.fbcdn.net/v/t1.18169-9/282868_186913438119263_1218000754_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=orwbcaXY98AAX-xK9pe&_nc_oc=AQnygHHP1ItCSCkQrSvsqMk1I8Cni5VbPVi8RMyqN5oFQwgWoVTBvTv9CFdNsV7Gx9Tnfgn8b2K37LahGAdwFmEI&_nc_ht=scontent.fstv8-1.fna&oh=00_AT8E0vjwzqwjZjC_8rCP2DwEQLbf6rJmpgCxt8XmaLayMg&oe=62944B92" width="150" height="150" >
	<h1><center><b>Government Polytechnic, Nashik</b></center></h1>
	<h3><center>
		An Autonomous Institute of Government of Maharashtra <br>
		Samangaon Road, Nashik Road, Nashik-422101 Ph.(0253)2461221 <br>
		Email: office.gpnashik@dtemaharashtra.gov.in Web: www.gpnashik.ac.in <br></center>
	</h3><hr><hr>

	
	<h2><u><center>BONAFIDE CERTIFICATE</center></u></h2>

	<div class="one">
	<p>ROLL NO.: <span id="x1"></span></p>
	</div>
		
	<span class="two">This is to certify that, Master/Miss <span id="x2"></span> is studying in our</span>
		
	<span class="three">institute in the academic year 2021-2022 <span id="x3"></span> YEAR Diploma in <span id="x4"></span> .<br></span>
		
		
		
	<span class="four">The student bears good character and behavior. His/Her Birth Date <span id="x5"></span> as per our</span>
		
	<span class="five">record. <br><br>This certificate is issued for the purpose of <span id="x6"></span> his/her request as per</span>
		
	application dated <span id="x7"></span>.

	<p align: left>issued by:</p>
		
	<p>Principal,</p>
	<p>Government Polytechnic, Nashik</p>

	<p><center><b>This certificate is officially approved and digitally issued.</b></center></p>

</div>
<div class="touser">
<button type="submit" name="send" id="touser1" value="<?php echo $newval2;?>">Send</button>

</div>
</form>

<input type="button" onclick="download1()" id="touser2" value="download">

 
</body>
</html>

<script type="text/javascript">

var bon1 = '<?php echo $newval1; ?>';
var bon2 = '<?php echo $newval2; ?>';
var bon3 = '<?php echo $newval3; ?>';
var bon4 = '<?php echo $newval4; ?>';
var bon5 = '<?php echo $newval5; ?>';
var bon6 = '<?php echo $newval6; ?>';
var bon7 = '<?php echo $newval7; ?>';

document.getElementById("x1").innerHTML = bon2;
document.getElementById("x2").innerHTML = bon1;
document.getElementById("x3").innerHTML = bon3;
document.getElementById("x4").innerHTML = bon4;
document.getElementById("x5").innerHTML = bon5;
document.getElementById("x6").innerHTML = bon6;
document.getElementById("x7").innerHTML = bon7;

// document.write(bon1);
// document.write(bon2);
// document.write(bon3);
// document.write(bon4);
// document.write(bon5);
// document.write(bon6);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script type="text/javascript">
    //document.getElementById("x1").innerHTML = localStorage.getItem("broll");
	function download1(){
        var element1 = document.getElementById("element1");
        var opt={
    filename:'oxy.pdf'
	// filename:j
		}
        html2pdf(element1,opt);
	}
</script>
<?php
 //include("connect.php");

   // mysqli_query($conn,"DELETE FROM doctable WHERE rollno=$newval2");

?>
