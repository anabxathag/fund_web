<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member longtabern</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: antiquewhite;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $c_nam = "black";
    $c_tiu = "black";
    $c_age = "black";
    $c_spe = "black";
    $name = '';
    $tiu = '';
    $age = '';
    $spec = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if (strlen($_POST['name']) < 5) {
            $c_nam = "red";  
        }
        $name = $_POST['name'];

        if (strlen($_POST['tiu']) < 5) {
            $c_tiu = "red";
        }
        $tiu = $_POST['tiu'];

        if (strlen($_POST['age']) < 5) {
            $c_age = "red";
        }
        $age = $_POST['age'];

        if (strlen($_POST['spec']) < 5) {
            $c_spe = "red";
        }
        $spec = $_POST['spec'];
    }   
    ?>
    
    <br><br>
    <div class="container">
        <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <h1 class="form-label">Member Registration</h1>

            <div class="w-75">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control" id="name" 
                name="name" placeholder="Nattawat" value="<?php echo $name;?>"
                style="color:<?php echo $c_nam;?>" required>
            </div>

            <br>
            <div class="w-50">
                <label for="tiu" class="col-form-label">Address: </label>
                <textarea type="text" class="form-control" id="tiu" name="tiu" 
                style="color:<?php echo $c_tiu;?>" required><?php echo $tiu;?></textarea>
            </div>

            <br>
            <div class="w-25">
                <label for="age" class="col-form-label">Age: </label>
                <input type="text" class="form-control" id="age" 
                name="age"  value="<?php echo $age;?>" 
                style="color:<?php echo $c_age;?>" required>
            </div>
            
            <br>
            <div class="w-75">
                <label for="spec" class="col-form-label">Profession: </label>
                <input type="text" class="form-control" id="spec" 
                name="spec" placeholder="Data Analyst" value="<?php echo $spec;?>"
                style="color:<?php echo $c_spe;?>" required>
            </div>

            <br>
            <div>
                <label for="resid" class="col-form-label">
                    Residential status:</label><br>
                <div class="form-check">
                    <input type="radio" name="resid" id="resid" checked>
                    <label class="col-form-label">Resident</label>

                    <input type="radio" name="resid" id="resid">
                    <label class="col-form-label">Non-resident</label>
                </div>
            </div>

            <br>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div><br>

</body>
</html>