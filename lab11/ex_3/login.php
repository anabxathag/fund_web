<!DOCTYPE html>
<html>
<body>
 
<?php
// user : james
// password : bond
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
if($uid == 'james' and $pw == 'bond')
{    
    session_start();
    $_SESSION['sid']=session_id();
    
    echo "Logged in successfully";
    echo "<br> yayyyyyy!!!!!!";
}
?>
 
</body>
</html>
