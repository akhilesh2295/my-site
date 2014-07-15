<?php
$cf_name = Trim(stripslashes($_POST['cf_name'])); 
$EmailFrom = $cf_name;
$EmailTo = "akhileshgandhi@che.iitb.ac.in";
$Subject = "My Homepage Visitor's Message!";
$cf_name = Trim(stripslashes($_POST['cf_name'])); 
$cf_email = Trim(stripslashes($_POST['cf_email'])); 
$cf_message = Trim(stripslashes($_POST['cf_message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
   ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to electiitb@gmail.com');
		window.location = 'http://home.iitb.ac.in/~akhileshgandhi';
	</script>
<?php
   exit;
}

if( (empty($cf_name)) || (empty($cf_email)) ) 
{
echo '<script>alert("The Name and Email fields are required. Try Again!");</script>';
echo '<script>history.back(1);</script>';
exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $cf_name;
$Body .= "\n";
$Body .= "e-Mail: ";
$Body .= $cf_email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $cf_message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will contact you shortly :) ');
		window.location = 'http://home.iitb.ac.in/~akhileshgandhi';
	</script>
<?php
}
else{
 ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to electiitb@gmail.com');
		window.location = '#';
	</script>
<?php
}
?>