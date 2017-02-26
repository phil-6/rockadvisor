<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 26/02/2017
 * Time: 21:11
 */

$sendto   = "rockadvisorcontributorrequest@elasticparsley.uk";
$usermail = $_POST['email'];
$content  = nl2br($_POST['msg']);
$name     = $_POST['name'];

$subject  = "New Contributor Request";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New Contributor Request</h2>\r\n";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Name:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$content."</p>\r\n";
$msg .= "</body></html>";


if(@mail($sendto, $subject, $msg, $headers)) {
    echo "true";
} else {
    echo "false";
}

?>