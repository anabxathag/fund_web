<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update & Delete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
</head>
<body>
    <form class="p-3" action="" method="post">
        <p>
            <label for='CourseID'>Course ID:</label>
            <input type="text" id="CourseID" name="CourseID" size="7" />
        </p>
        <p>
            <label for='Title'>Title:</label>
            <input type="text" id="Title" name="Title" size="25" />
        </p>
        <p>
            <label for='DeptName'>Department Name:</label>
            <input type="text" id="DeptName" name="DeptName" />
        </p>
        <p>
            <label for='Credits'>Credits:</label>
            <input type="text" id="Credits" name="Credits" value="0" size="3"/>
        </p>
        <input type="submit" name="upd" value="Update" class="btn btn-success">
        <input type="submit" name="del" value="Delete" class="btn btn-danger"> 
    </form>

    <?php
    // 1. Connect to Database 
    class MyDB extends SQLite3 {
        function __construct() {
        $this->open('customers.db');
        }
    }

    // 2. Open Database 
    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $c_id = $_POST['CourseID'];
        $c_title = $_POST['Title'];
        $c_dept = $_POST['DeptName'];
        $c_credits = $_POST['Credits'];
        echo "$c_id / $c_title / $c_dept / $c_credits";

        if (isset($_POST['del'])) {
            // SQL Statements
            $sql_2 = "DELETE FROM course WHERE (course_id = '$c_id');";
            
            $ret = $db->exec($sql_2);
            if(!$ret){
                echo $db->lastErrorMsg();
            } else {
                echo $db->changes(), " Record deleted successfully<br>";
            }
            
        } else if (isset($_POST['upd'])) {
            // SQL Statements
            $sql_2 = "UPDATE course ".
            "SET title='$c_title', dept_name='$c_dept', credits='$c_credits' " .
            "WHERE course_id='$c_id' ;";
            
            $ret = $db->exec($sql_2);
            if(!$ret){
                echo $db->lastErrorMsg();
            } else {
                echo $db->changes(), " Record updated successfully<br>";
            }
        }
    }

    echo "<div class='p-3'><table class='table table-bordered border-primary'>" .
        "<thead class='bg-light'><tr><th>Course ID</th><th>Title</th>" . 
        "<th>Dept. Name</th><th>Credits</th></tr></thead><tbody>";
    // SQL Statements
    $sql ="SELECT * from course";

    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr><td>" . $row["course_id"] . "</td><td>" 
        . $row["title"] ."</td><td>" 
        . $row["dept_name"] . "</td><td>" 
        . $row['credits'] . "</td><tr>";
    }
    echo "</tbody></table></div>";
    // 4. Close database
    $db->close();
    ?>

</body>
</html>
