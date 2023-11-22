<?php
   // 1. Connect to Database 
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('lab10_3.db');
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
   echo "$c_id";
   
   // SQL statement
   $sql = "DELETE FROM course WHERE course_id = '$c_id'";

   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record deleted successfully<br>";
   }

   $db->close();
?>