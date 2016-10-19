<?php
require_once 'inc/MCAPI.class.php';
$api = new MCAPI('726f3e4a284d6304ad8ff6eee5d19a1e-us13');
$merge_vars = array('FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"]);
 
// Submit subscriber data to MailChimp
// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php

$retval = $api->listSubscribe( '0ff5842ebc', $_POST["email"], $merge_vars, 'html', false, true );

/*$retval = $api->listSubscribe( '0ff5842ebc', $_POST["email"], 'html', false, true ); */
if ($api->errorCode){
echo "<h4>Please try again.</h4>";
} else {
echo "<h4>Thank you, you have been added to our mailing list.</h4>";
}
?>