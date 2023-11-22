<?php
    $c_id = $_GET['CourseID'];
    echo "$c_id";
    // # SQL statement #
    $servername = "localhost";
    $username = "root"; //ตามที่กำหนดให้
    $password = ""; //ตามที่กำหนดให้
    $dbname = "s083zmbv";    //ตามที่กำหนดให้

    // # Create connection #
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "DELETE * FROM course WHERE course_id = $c_id;";
    $result = mysqli_query($conn, $sql);     // This is Run.
?>
