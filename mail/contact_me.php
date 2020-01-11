<?php
  $to = 'contact@edcbvucoep.com' ;    
  $name=$_POST['name'];
  $phoneno=$_POST['phoneno'];
  $email= $_POST['email'];
  $txt = $_POST['message'] ;
  $message="You have received an e-mail from ".$name.".\n\nmessage - ".$txt."\n\nphone no - ".$phoneno;
  
//   $cc = $_POST['cc'];
  $headers =  "From: ".$_POST['email']."\r\n";
  mail( $to, "esummit19", $message, $headers);
//   header( "Location:https://www.edcbvucoep.com/esummit19/" );
?>
<script type="text/javascript">
// 	alert("mail send");
alert ("\nMAIL SEND.\nPlease click on OK to continue.");
// if (answer)
window.location="https://www.edcbvucoep.com/esummit19";

</script>
