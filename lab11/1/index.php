<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employ info. session</title>
</head>
<body>
    <?php
    session_start();
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

            $_SESSION["EmployID"] = $c_id;
            $_SESSION["FirstName"] = $c_fname;
            $_SESSION["LastName"] = $c_lname;
            $_SESSION["Address"] = $c_add;
            $_SESSION["Email"] = $c_email;
            $_SESSION["Phone"] = $c_phone;

            echo "<i>Session variables are set to " . session_id() ."</i>";
        }

        if ($_POST['butt'] == "show") {
            $emp = $_SESSION["EmployID"];
            $fna = $_SESSION["FirstName"];
            $lna = $_SESSION["LastName"];
            $tiu = $_SESSION["Address"];
            $mail = $_SESSION["Email"];
            $tele = $_SESSION["Phone"];
        }

        if ($_POST['butt'] == "clear") {
            session_unset();
            echo "<i>Sessions have been cleared.</i>";
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
