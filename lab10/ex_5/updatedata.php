<?php
   // 1. Connect to Database 
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('lab10_5.db');
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
   $sql = "UPDATE course ".
   "SET title='$c_title', dept_name='$c_dept', credits='$c_credits' " .
   "WHERE course_id='$c_id' ;";

   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record updated successfully<br>";
   }

   $db->close();
?>