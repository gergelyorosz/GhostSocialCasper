<?php
// TODO: remove after development
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

/*
=== Usage ====
Invoke via GET or POST, passing the senderName, senderEmail and message parameters, and optionally the siteName parameter

=== Setup ===
Set the $to variable to the email address for the contact form to mail to
*/
$to      = "yourEmail@example.com";

header("Access-Control-Allow-Origin: *");
if(empty($_REQUEST["senderName"]) || empty($_REQUEST["senderEmail"]) || empty($_REQUEST["message"])) {
  header("HTTP/1.0 422 Unprocessable Entity");
  echo "Missing parameters";
  exit;
}

$senderName = $_REQUEST["senderName"];
$senderEmail = $_REQUEST["senderEmail"];
$message = $_REQUEST["message"];
$sitename = empty($_REQUEST["siteName"]) ? "Ghost" : $_REQUEST["siteName"];
$subject = $sitename. " Contact Form Message";

$headers = "From: ".$senderName." <".$senderEmail.">\r\n" .
    "Reply-To: ".$senderName.".<".$senderEmail.">\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);
?>
