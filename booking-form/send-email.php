<?php

//----------------------Company Information---------------------

$comany_name = "Awesome Lanka Travels";
$website_name = "www.awesomelankatravels.com";
$comConNumber = "+ +94 71 565 5553 | +94 75 582 5734 ";
//$comEmail = "mganisansala@gmail.com";
$from = 'nilan@awesomelankatravels.com';
$replay = 'nilan@awesomelankatravels.com';

//----------------------CAPTCHACODE---------------------
session_start();


$response = array();
if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {
    $response['status'] = 'incorrect';
    $response['msg'] = 'Security Code is invalid';
    echo json_encode($response);
    exit();
}

//----------------------Visitor Information---------------------


$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_phone = $_POST['visitor_phone'];
$visitor_country = $_POST['visitor_country'];
$Arrival_date = $_POST['Arrival_date'];
$Departure_date = $_POST['Departure_date'];
$tourpackage = $_POST['tourpackage'];
$numbersadults = $_POST['numbersadults'];
$numberschildren = $_POST['numberschildren'];
$subject = 'New Booking- ' . $_POST['subject'];
$message = $_POST['message'];



date_default_timezone_set('Asia/Colombo');

$todayis = date("l, F j, Y, g:i a");

$site_link = "http://" . $_SERVER['HTTP_HOST'];

include("mail-template.php");

// mandatory headers for email message, change if you need something different in your setting.
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $replay . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Sending mail

if (mail($visitor_email, $subject, $visitor_message, $headers) && mail($replay, $subject, $company_message, $headers)) {
    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'correct';
    $response['msg'] = "Could nod be sent your message";
    echo json_encode($response);
    exit();
} 
