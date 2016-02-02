<html>
<head>
<title>Buckwheat Flats Natural Foods: Whole, Local, Organic &amp; World Foods in Carleton County, New Brunswick</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<style type="text/css">
<!--
body {
	background-color: #EEF7BE;
	margin-top: 0px;
}
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #898989;
}
a:link {
	color: #DD391E;
}
.h1 {
	color: #FF0000;
	font-size: xx-large;
}
-->
</style></head>
<body leftmargin="0" marginwidth="0">
<!-- ImageReady Slices (New Buckwheat index.psd) -->
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
	  <td height="117" colspan="8">
			<img src="images/New-Buckwheat_02.png" width="800" height="117" alt=""></td>
	</tr>
	<tr bgcolor="#FFFFFF">
		<td height="67" colspan="2">
			<a href="index.html"><img src="images/nav_04.png" alt="" width="275" height="67" border="0"></a></td>
		<td height="67" colspan="3">
			<a href="get-food.html"><img src="images/New-Buckwheat_05.png" alt="" width="257" height="67" border="0"></a></td>
<td height="67" colspan="3">
			<a href="location.html"><img src="images/New-Buckwheat_06.png" alt="" width="268" height="67" border="0"></a></td>
  </tr>
	<tr bgcolor="#FFFFFF">
		<td height="237" colspan="8">
			<?php


// Who should this message be sent to?
$to = "redcypress@yahoo.com";
// EXAMPLES
// $to = "a.n.example@shef.ac.uk"; // one recipient
// $to = "a.n.example@shef.ac.uk, person.two@shef.ac.uk"; // two recipients

// Subject of the e-mail
$subject = "Buckwheat Flats Order";
// Message to show on screen when the form is submitted
$successMessage = '<center><p class="h1">Thank you!</p><p>Your order was successfully sent.<br> We will be in touch soon.</br></p><img src="images/bananaphone.png"></center>';
$email = $_REQUEST['Email'] ;
// Array of required fields (optional)
$required = array("Name","Email","Phone","Address");
// EXAMPLES
// $required = array("email"); // email is required
// $required = array("firstname","surname"); // firstname and surname are required
// $required = array("postcode","housenumber","country"); // postcode, housenumber and country are required
// $required = false; // Nothing is required

/***************************
*   End of Configuration   *
***************************/

// Validation
// Check we have recieved post data - don't just send out an empty e-mail
if (count($_POST) == 0) {
	$error[] = "<center>You must complete the form correctly</center>";
}

// If we have any required fields
if (is_array($required)) {
	// Go through each required field
	foreach($required as $reqKey) {
		// Check to see if the required fields have all been passed through and are not empty
		if (!array_key_exists($reqKey,$_POST) || (array_key_exists($reqKey,$_POST) && $_POST[$reqKey] == "")) {
			// Throw an error for missing fields
			$error[] = ucfirst($reqKey)." is a required field";
		}
	}
}
// end required field validation

	// An error has occured. We will print this on screen.
	if (isset($error)) {
		print '<ul class="required">';
			foreach($error as $errorCode) {
				print '<li>'.$errorCode.'</li>';
			}
		
		print '</ul>';
		
		print '<p><center><b>Your order was NOT sent.</b></p>
		<p>Please use your browsers back button, fill in the missing information and resubmit your order.</center></p>';
	}
	// The form passed validation and the message will be sent.
	else {
			
		// Build up the message to be sent
		$message = "Users IP Address:	".$_SERVER["REMOTE_ADDR"]."\n"; // IP address
		$message .= "Submission Date:	".date("d-M-Y")."\n"; // Date of message sending
		$message .= "Form Location:		".$_SERVER["HTTP_REFERER"]."\n\n"; // Form the request came from
	
		// Iterate through the data we have recieved and build up the message
		while(list($name, $value) = each($_POST)) {
			// ensure multiple items from a select box are included correctly.
			if (is_array($value)) {
				foreach($value as $subvalue) { $newValue .= $subvalue."\n"; } $value = $newValue; 
			}
			
			// Create an array of strange looking code. If we spot any of these 
			// anywhere the sender may be up to no good!		
			$suspiciousCode = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i");
			// If we see and suspicious code, replace it with the words '***removed***'
			$value = preg_replace($suspiciousCode, "***removed***", $value); 
			
			// Append the text to the message
			// .but only if value is greater than 0.   -design@starfog.net
			
			$message .= ( false === is_numeric($value) || $value > 0 ) ? ucfirst($name).": \t".stripslashes(strip_tags(wordwrap($value,65)))."\n" : "";
		}
		
		// send the mail
		$mailstatus = mail($to,$subject,$message, "From: $email");
		
			// display the status
			if ($mailstatus == true) {
				print "<p>".$successMessage."</p>";	
			}
			else {
				print '<p style="color: red; font-weight: bold">A system error occured while trying to send your message. Please try again later.</p>';
			}

	}
?></td>
  </tr>
	<tr>
		<td height="47">		  <a href="index.html"><img src="images/sub-nav_08.png" alt="" width="171" height="47" border="0"></a></td>
<td height="47" colspan="2">
			<a href="producers.html"><img src="images/New-Buckwheat_09.png" alt="" width="142" height="47" border="0"></a></td>
<td height="47">
			<a href="products.html"><img src="images/New-Buckwheat_10.png" alt="" width="171" height="47" border="0"></a></td>
<td height="47" colspan="2">
			<a href="about.html"><img src="images/New-Buckwheat_11.png" alt="" width="121" height="47" border="0"></a></td>
<td height="47">
			<a href="recipes.html"><img src="images/New-Buckwheat_12.png" alt="" width="92" height="47" border="0"></a></td>
<td height="47">
			<img src="images/New-Buckwheat_13.png" width="103" height="47" alt=""></td>
	</tr>
	<tr>
	  <td colspan="8" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="71%">&nbsp;</td>
          <td width="29%">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><center>
            Buckwheat Flats Natural Foods - <a href="mailto:realfood@back2land.ca">realfood@back2land.ca</a>
          </center></td>
        </tr>
        </table></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="171" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="104" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="38" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="171" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="48" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="73" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="92" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="103" height="1" alt=""></td>
	</tr>
</table>

<!-- End ImageReady Slices -->
</body>
</html>