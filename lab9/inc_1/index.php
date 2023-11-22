<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database with php</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root"; // ใช้ตอนดูโค้ดตัวเอง
$password = "";
// $username = "S083ZMBV";  // ใช้ตอนส่งงาน
// $password = "5047OZB122"; 
$dbname = "s083zmbv";    //ตามที่กำหนดให้
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<br><br>
<?php
// --- SQL SELECT statement  
$sql = "SELECT * FROM course;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " " . $row["course_id"]. " " . $row["title"]. 
    " " . $row["dept_name"] . " " . $row["credits"] . "<br>";
  }
} else {
  echo "0 results";
}

// close connection
mysqli_close($conn);
?>

</body>
</html>
