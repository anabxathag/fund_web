<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show record</title>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $record = $_POST['record'] - 1;

    // --- SQL SELECT statement  
    $sql = "SELECT * FROM course LIMIT $record, 1;";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {
            echo "Course_ID: " . $row["course_id"] . "<br>Title: " . $row["title"] .
            "<br>Dept_Name: " . $row["dept_name"] . "<br>Credits: " . $row['credits']
            . "<br><br>";
        }
    } else {
        echo "0 results";
    }
}

// close connection
mysqli_close($conn);
?>

<form id="showrec" method="post">
    <label for="record"><b>Enter a record number: </b></label>
    <input type="number" id="record" name="record" min="1" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>
