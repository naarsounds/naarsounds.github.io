<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


    /**
  *if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  *  include( $php_email_form );
  *} else {
  *  die( 'Unable to load the "PHP Email Form" Library!');
  *}
*/
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $email_from = $_POST['Naar Sounds'];
  $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message.\n";

  
  $to = "naarsounds@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";

  mail($to, $subject, $email_body, $headers) or die("Error!");
echo "Email sent!"

?>

