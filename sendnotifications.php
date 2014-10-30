<span><!--?php <br ?--> /* Send an SMS using Twilio. You can run this file 3 different ways:
 *
 * - Save it as sendnotifications.php and at the command line, run
 * php sendnotifications.php
 *
 * - Upload it to a web host and load <a class="linkclass" href="http://mywebhost.com/sendnotifications.php">mywebhost.com/sendnotifications.php</a>
 * in a web browser.
 * - Download a local server like WAMP, MAMP or XAMPP. Point the web root
 * directory to the folder containing this file, and load
 * localhost:8888/sendnotifications.php in a web browser.
 */
 
// Step 1: Download the Twilio-PHP library from <a class="linkclass" href="http://twilio.com/docs/libraries">twilio.com/docs/libraries</a>,
 // and move it into the folder containing this file.
 require "twilio-php/Services/Twilio.php";
 
// Step 2: set our AccountSid and AuthToken from <a class="linkclass" href="http://www.twilio.com/user/account">www.twilio.com/user/account</a>
 $AccountSid = "ACcc67ea79b960b24c0e9497766bc94e68";
 $AuthToken = "98ea06dd544a1361584ca498944e1253";
 
// Step 3: instantiate a new Twilio Rest Client
 $client = new Services_Twilio($AccountSid, $AuthToken);
 
// Step 4: Get phone number from the test-sms form
 $phone=$_POST["phone"];
 
// Step 5: Create SMS
 $sms = $client->account->sms_messages->create(
 
// Change the 'From' number below to be a valid Twilio number
 // that you've purchased, or the (deprecated) Sandbox number
 "925-326-6539",
 
// the number we are sending to - Any phone number
 $phone,
 
// the sms body
 "Download Conkey to share contacts directly from your keyboard: <a class="linkclass" href="http://bit.ly/ourapp">http://bit.ly/ourapp</a>"
 );
 
// Display a confirmation message on the screen
 $sms_check='OK'; //Use Twilio's callback here
 $return_json = '{"sms_sent":"' . $email_check . '"}';
 
echo $return_json;
?>
</span>