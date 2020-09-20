<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
 
if(empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields!";
}
else{
    mail("suprotivesarkar@gmail.com", "Portfolio Message", $message, "from: $name <$email>");
    echo "<script type='text/javascript'>alert('Your Messeage Sent Successfully');
    window.history.log(-1);
    </script>";
}
?>