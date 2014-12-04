<?php
/**
 * Contact form mail functions.
 *
 * @package Nollie
 * @author Muffin group
 * @link http://muffingroup.com
 */

$url = dirname( __FILE__ );
$strpos = strpos( $url, 'wp-content' );
$base = substr( $url, 0, $strpos );
require_once( $base .'wp-load.php' );


$to = htmlspecialchars( stripslashes( trim( $_POST['To'] ) ) );
$name = htmlspecialchars( stripslashes( trim( $_POST['Name'] ) ) );
$email = htmlspecialchars( stripslashes( trim( $_POST['Email'] ) ) );

$subject = htmlspecialchars( stripslashes( trim( $_POST['Subject'] ) ) );
$message = htmlspecialchars( stripslashes( trim( $_POST['Message'] ) ) );

$headers = 'From: '. $name .' <'. $email .'>';

if( wp_mail( $to, $subject, $message, $headers ) ){
	echo json_encode( array(
		'status' => 'ok'
	));	  
} else {
	echo json_encode( array(
		'status' => 'error'
	));	  
}

?>