<?php
// Start the session
session_start();
// display Session ID
echo "Session ID : "  . session_id();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["scolor"] = "red";
$_SESSION["sanimal"] = "Cat";
echo "Session variables are set. <br>";
// ถ้า run โค้ดบรรทัดที่ 13-15 แล้ว ครั้งต่อไป ต่อให้ลบโค้ดบรรทัดนี้ ค่าก็ยังเก็บไว้

echo "Data from session. <br>";
echo $_SESSION["scolor"]  . "<br>";
echo $_SESSION["sanimal"] . "<br>";

?>

</body>
</html>
