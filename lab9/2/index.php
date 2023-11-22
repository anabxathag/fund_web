<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>up & del</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form id="CourseForm" method="post">
        <p><label for='CourseID'>Course ID:</label>
            <input type="text" id="CourseID" name="CourseID" size="7" />
        </p>
        <p><label for='CourseTitle'>Title:</label>
            <input type="text" id="CourseTitle" name="CourseTitle" size="25" />
        </p>
        <p><label for='DeptName'>Department Name:</label>
            <input type="text" id="DeptName" name="DeptName" />
        </p>
        <p><label for='Credits'>Credits:</label>
            <input type="text" id="Credits" name="Credits" value="0" size="3" />
        </p>
        <input type="submit" value="Submit">
    
    </form>

    <div id='present'>
    <?php
    $servername = "localhost";
    $username = "root"; //ตามที่กำหนดให้
    $password = ""; //ตามที่กำหนดให้
    $dbname = "s083zmbv";    //ตามที่กำหนดให้
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c_id = $_POST['CourseID'];
        $c_title = $_POST['CourseTitle'];
        $c_dept = $_POST['DeptName'];
        $c_credits = $_POST['Credits'];
        echo "$c_id / $c_title / $c_dept / $c_credits <br>" ;
        // SQL statement 
        // UPDATE table_name
        // SET column1=value, column2=value2,...
        // WHERE some_column=some_value 
        //
    }
    // --- SQL SELECT statement  
    $sql = "SELECT * FROM course;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        echo "<table><tr><th>Course ID</th><th>Title</th><th>Dept. Name</th>" .
        "<th>Credits</th>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["course_id"] . "</td><td>" . $row["title"] .
        "</td><td>" . $row["dept_name"] . "</td><td>" . $row['credits'] ."</td></tr>";
        }

        echo "</table>";

        } else {
        echo "0 results";
    }
    ?>
    </div>
    
</body>
</html>
