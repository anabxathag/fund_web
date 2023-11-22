<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calender</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: antiquewhite;
        }
        table {
            background-color: #F0FFFF;
        }
        table, td, th {
            border: 2px solid black;
            margin: auto;
        }
        th, td {
            text-align: center;
            padding: 8px;
            width: 75px;
        }
    </style>
</head>
<body>
    <div class='container' align='center'>
    <h1>ปฏิทินประจำปี 2023</h1>
        <form method="post">
            <label for="month">เลือกเดือน: </label>
            <select name="month" id="month">
                <option value="-" selected>กรุณาเลือกเดือนจ้าาา</option>
                <option value="มกราคม">มกราคม</option>
                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                <option value="มีนาคม">มีนาคม</option>
                <option value="เมษายน">เมษายน</option>
                <option value="พฤษภาคม">พฤษภาคม</option>
                <option value="มิถุนายน">มิถุนายน</option>
                <option value="กรกฎาคม">กรกฎาคม</option>
                <option value="สิงหาคม">สิงหาคม</option>
                <option value="กันยายน">กันยายน</option>
                <option value="ตุลาคม">ตุลาคม</option>
                <option value="พฤศจิกายน">พฤศจิกายน</option>
                <option value="ธันวาคม">ธันวาคม</option>
            </select>
            <input type="submit" value="แสดงปฏิทิน">
            <br><br>
        </form>
    </div>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" 
        && $_POST["month"] != "-") {
        $selectedMonth = $_POST["month"];
       
        echo "<h2 align='center'>เดือน $selectedMonth</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>อาทิตย์</th>";
        echo "<th>จันทร์</th>";
        echo "<th>อังคาร</th>";
        echo "<th>พุธ</th>";
        echo "<th>พฤหัสบดี</th>";
        echo "<th>ศุกร์</th>";
        echo "<th>เสาร์</th>";
        echo "</tr>";
        echo "<tr>";

        $monto = array("มกราคม"=>range(1,31), "กุมภาพันธ์"=>range(-2, 28), 
            "มีนาคม"=>range(-2, 31), "เมษายน"=>range(-5, 30), 
            "พฤษภาคม"=>range(0, 31), "มิถุนายน"=>range(-3, 30), 
            "กรกฎาคม"=>range(-5, 31), "สิงหาคม"=>range(-1, 31), 
            "กันยายน"=>range(-4, 30), "ตุลาคม"=>range(1, 31), 
            "พฤศจิกายน"=>range(-2, 30), "ธันวาคม"=>range(-4, 31));
        
        $cols = 0;
        foreach ($monto[$selectedMonth] as $idm => $numm) {
            $cols ++;
            if ($cols % 7 == 1) {
                echo "<tr>";
            }

            if ($numm <= 0) {
                echo "<td></td>";
            } else {
                echo "<td>$numm</td>";
            }

            if ($cols % 7 == 0) {
                echo "</tr>";
                $cols = 0;
            }

            if ($numm == max($monto[$selectedMonth]) 
                && $cols % 7 != 0) {
                for ($scrap = 1; $scrap <= (7 - $cols); $scrap++) {
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        echo "</table>";
    }
    ?>
</body>
</html>
