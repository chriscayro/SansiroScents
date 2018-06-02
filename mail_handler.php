<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$region=$_POST['region'];
	$subject=$_POST['subject'];
	$msg=$_POST['message'];
	$to='fnaggayi@gmail.com';
	$subject='Form Submission';
	$message="Name: ".$name."\nPhone: ".$phone."\nRegion: ".$region."\n"."Wrote the following:\n\n".$msg;
	$headers="From: ".$email."\r\nReply-To: ".$email."\r\nReturn-Path: ".$email."\r\n";

	if(mail($to,$subject,$message,$headers)){
		echo "<h3> Sent sucessfully! Thank you ".$name.", We will contact you shortly!<h3>";
	}else{
		echo "Something went wrong!";
	}
}
?>