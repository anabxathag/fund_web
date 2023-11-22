<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employ info. cookie</title>
</head>
<body>
    <?php
    $emp = "";
    $fna = "";
    $lna = "";
    $tiu = "";
    $mail = "";
    $tele = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST['butt'] == "save") {
            $c_id = $_POST['EmployID'];
            $c_fname = $_POST['FirstName'];
            $c_lname = $_POST['LastName'];
            $c_add = $_POST['Address'];
            $c_email = $_POST['Email'];
            $c_phone = $_POST['Phone'];
            
            // 86400 = 1 day
            setcookie('EmployID', $c_id, time() + (86400), "/"); 
            setcookie('FirstName', $c_fname, time() + (86400), "/"); 
            setcookie('LastName', $c_lname, time() + (86400), "/"); 
            setcookie('Address', $c_add, time() + (86400), "/");
            setcookie('Email', $c_email, time() + (86400), "/"); 
            setcookie('Phone', $c_phone, time() + (86400), "/");

            echo "Cookie variables are saved ";
        }

        if ($_POST['butt'] == "show") {
            $emp = $_COOKIE["EmployID"];
            $fna = $_COOKIE["FirstName"];
            $lna = $_COOKIE["LastName"];
            $tiu = $_COOKIE["Address"];
            $mail = $_COOKIE["Email"];
            $tele = $_COOKIE["Phone"];
        }

        if ($_POST['butt'] == "clear") {
            setcookie("EmployID", "", time() - 86400, "/");
            setcookie("FirstName", "", time() - 86400, "/");
            setcookie("LastName", "", time() - 86400, "/");
            setcookie("Address", "", time() - 86400, "/");
            setcookie("Email", "", time() - 86400, "/");
            setcookie("Phone", "", time() - 86400, "/");

            echo "<i>Cookies have been cleared.</i>";
        }
    }

    ?>
    <form method="post">
        <p><label for='EmployID'>Employee ID:</label>
            <input type="text" id="EmployID" name="EmployID" size="7"
            value="<?php echo $emp ?>"/>
        </p>
        <p><label for='FirstName'>FirstName:</label>
            <input type="text" id="FirstName" name="FirstName" size="25"
            value="<?php echo $fna; ?>"/>
        </p>
        <p><label for='LastName'>LastName:</label>
            <input type="text" id="LastName" name="LastName"
            value="<?php echo $lna; ?>"/>
        </p>
        <p><label for='Address'>Address:</label>
            <textarea id="Address" name="Address" 
            rows="4" cols="50"><?php echo $tiu; ?></textarea>
        </p>
        <p><label for='Email'>Email:</label>
            <input type="text" id="Email" name="Email"
            value="<?php echo $mail; ?>"/>
        </p>
        <p><label for='Phone'>Phone:</label>
            <input type="text" id="Phone" name="Phone"
            value="<?php echo $tele; ?>"/>
        </p>
        <button type="submit" id="butt" name="butt" value="save">Save Data</button>
        <button type="submit" id="butt" name="butt" value="show">Show Data</button>
        <button type="submit" id="butt" name="butt" value="clear">Clear Data</button>
    </form>
</body>
</html>