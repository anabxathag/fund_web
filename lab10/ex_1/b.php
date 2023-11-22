<?php
   // 1. Connect to Database 
   // 2. Open Database 

   // Create a Table using SQL 
   $sql =<<<EOF
    CREATE TABLE course (
    course_id varchar(7) PRIMARY KEY,
    title varchar(50) NOT NULL,
    dept_name varchar(20) NOT NULL,
    credits int(3) DEFAULT NULL
    );
    EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully<br>";
   }
   
   // 4. Close Database
   $db->close();
?>
<!-- สามารถสร้างตารางที่ไฟล์ fwb-db-file.db ทีีโค้ดนี้ได้
แต่เนื่องจากรันไฟล์ sql ใน DBbrowser ไปก่อนหน้านี้แล้ว 
ก็ดูไฟล์นี้ไปเฉยๆละกาน-->
