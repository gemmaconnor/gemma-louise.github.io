Thank you for submitting your details. A member of our team will not get back to you because this is not a real site, but thanks for
giving us your personal email!

PS if you can see the code below it is because the local host server is not compatable with PHP code! I used XAMPP to support it.  


<?php
if (isset($_POST['submit']))
{
  $name =$_POST['name'];
  $mailFrom =$_POST['email'];
  $message =$_POST['message'];

  $mailTo = "gemmaconnor@talktalk.net"
  $headers = "From: ".  $mailFrom;
$txt = "you have received an email from ".$name.".\n\n".$message;
  mail($mailTo,$message,$headers );
  header("Location: index.php?mailsent")
}

?>