<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$servername = "localhost";
$username = "root"; //ตามที่กำหนดให้
$password = ""; //ตามที่กำหนดให้
$dbname = "s083zmbv";    //ตามที่กำหนดให้
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// --- SQL SELECT statement  
$sql = "SELECT * FROM course JOIN section using (course_id);";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table><tr><th>Course ID</th><th>Title</th><th>Dept_Name</th>" .
        "<th>Year</th><th>Semeter</th><th>Building</th>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["course_id"] . "</td><td>" . $row["title"] .
        "</td><td>" . $row["dept_name"] . "</td><td>" . $row['year'] . "</td><td>"
        . $row['semester'] . "</td><td>" . $row['building'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// close connection
mysqli_close($conn);
?>

</body>
</html>
