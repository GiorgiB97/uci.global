<?php
/**
 * Created by PhpStorm.
 * User: george
 * Date: 11/27/17
 * Time: 12:42 PM
 */

$currentUrl = isset($post['url']) ? $post['url'] : 'https://uci.global';
$post = $_POST;

require "../plugins/recaptchalib.php";
// your secret key
$secret = "6Lc7kjoUAAAAACxkiz4gob5BVGyecFxP8MRdSjGT";
// empty response
$response = null;
// check our secret key
$reCaptcha = new ReCaptcha($secret);
// if submitted check response
if ($post["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $post["g-recaptcha-response"]
    );
}
if ($response != null && $response->success) {
    $name = $post['name'];
    $subject = $post['subject'];
    $message = $post['message'];
    $email = $post['email'];
    $from = 'From: ' .$name . ' <'. $email . ">\r\n";
    mail('admin@uci.global', $subject, $message, $from);
    header("Location: " . $currentUrl . "?success=true");
}else{
    header("Location: " . $currentUrl . "?success=false");
}
?>