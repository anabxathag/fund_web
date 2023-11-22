<?php
   // 1. Connect to Database 
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('lab10_4.db');
      }
   }

   // 2. Open Database 
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }

   $c_id = $_GET['CourseID'];
   $c_title = $_GET['CourseTitle'];
   $c_dept = $_GET['DeptName'];
   $c_credits = $_GET['Credits'];
   echo "$c_id / $c_title / $c_dept / $c_credits " ;
   
   // SQL statement
   $sql = "INSERT INTO course(course_id, title, dept_name, credits)
            VALUES ('$c_id', '$c_title', '$c_dept', '$c_credits')";

   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record saved successfully<br>";
   }

   $db->close();
?>