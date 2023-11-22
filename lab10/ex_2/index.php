<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   // 1. Connect to Database 
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('fwp-db-file.db');
      }
   }

   // 2. Open Database 
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }

   // 3. Query Execution
   // SQL Statements
   $sql ="SELECT * from course";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo " ". $row['course_id'] . " ";
      echo " ". $row['title'] . " ";
      echo " ". $row['dept_name'] . " ";
      echo " ".$row['credits'] ."<br>";
   }
   echo "Operation done successfully<br>";

   // 4. Close database
   $db->close();
?>
</body>
</html>
