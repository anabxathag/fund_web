<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del last row</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>
<body>
    <div class="p-3">
        <table class="table table-bordered border-primary">
            <thead class="bg-light">
                <tr>
                    <th>CustomerId</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
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

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // SQL Statements
                        $sql_2 = "DELETE FROM customers WHERE CustomerId = (select max(CustomerId) from customers);";
                        $ret = $db->exec($sql_2);
                        if(!$ret){
                            echo $db->lastErrorMsg();
                        } else {
                            echo $db->changes(), " Record deleted successfully<br>";
                        }
                    }

                    // SQL Statements
                    $sql ="SELECT CustomerId, FirstName, LastName, Address, Phone, Email from customers";

                    $ret = $db->query($sql);
                    while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        echo "<tr><td>" . $row["CustomerId"] . "</td><td>" 
                        . $row["FirstName"] ."</td><td>" 
                        . $row["LastName"] . "</td><td>" 
                        . $row['Address'] . "</td><td>" 
                        . $row['Phone'] . "</td><td>" . 
                        $row['Email'] . "</td></tr>";
                    }
                
                    // 4. Close database
                    $db->close();
                ?>
            </tbody>
        </table>
    </div>

    <div class="p-1 text-center">
        <form enctype="multipart/form-data" action="" method="post">
            <input type="submit" id="delo" value='Delete Last Row' class="btn btn-danger">
        </form>
    </div>
</body>
</html>
