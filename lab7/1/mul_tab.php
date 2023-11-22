<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formula multiple table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 22%;
        }
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        tr {
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .bottom-line {
            border-bottom: 2px solid black;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="container">
    <table>

    <thead>
        <tr>
        <th>
        <?php
            $number = $_POST['mae'];
            echo "ตารางสูตรคูณแม่ $number <br>";
        ?>
        </th>
    </thead>

    <tbody>
        <?php
            for ($i = 1; $i <= 12; $i++) {
                $multi = $i * $number;
                echo "<tr class='bottom-line'>";
                echo "<td>$i x $number = $multi</td>";
                echo "</tr>";
            }
        ?>
    </tbody>

    </table>
</div>
</body>
</html>
