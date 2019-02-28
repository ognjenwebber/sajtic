<?php

$EmailFrom = "ognjen_slijepcevic@hotmail.com";
$EmailTo = "ognjen_slijepcevic@hotmail.com";
$Subject = "Sale Auto Stakla - Kontakt sa sajta";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Ime i prezime: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Kontakt tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Poruka: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>