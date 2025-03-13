<?php
//get data from form  
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message= $_POST['message'];
$to = "aggarwalmohit011@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n Contact No. = " . $phone . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@digitalestate.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>