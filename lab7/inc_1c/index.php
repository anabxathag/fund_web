<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
        $DayOfMonth = array( // Key => Value
            "Januaray" => 31,
            "February" => 28,
            "March" => 31,
            "April" => 30,
            "May" => 31,
            "June" => 30,
            "July" => 31,
            "August" => 31,
            "September" => 30,
            "October" => 31,
            "November" => 30,
            "December" => 31
        );
        // foreach loop
        foreach ($DayOfMonth as $MonthName => $Month_Days) {
            echo "Key=" . $MonthName . ", Value= " . $Month_Days . "<br>";
        }
    ?>
</body>
</html>

