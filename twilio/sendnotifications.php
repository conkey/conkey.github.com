$sms = $client—>
 
account->sms_messages->create(
 
// Change the ‘From’ number below to be a valid Twilio number
// that you’ve purchased, or the (deprecated) Sandbox number
"714-243-8467",
 
// the number we are sending to – Any phone number
$phone,
 
// the sms body
"Get our app now: http://bit.ly/ourapp"
);
 
// Display a confirmation message on the screen
$sms_check=’OK’; //Use Twilio’s callback here
$return_json = ‘{"sms_sent":"’ . $email_check . ‘"}’;
 
echo $return_json;
?>
