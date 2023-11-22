<?php
    session_start();
    $url = "http://10.0.15.21/lab12/restapis/products.php";
    $fry = file_get_contents($url);   
    $produco = json_decode($fry);

    if (isset($_POST['pvs'])) {
		$_SESSION['tumneng'] -= 1;
        if($_SESSION['tumneng'] < 0) {
            $_SESSION['tumneng'] = 0;
        }
    }
    else if (isset($_POST['nxt'])) {
        $_SESSION['tumneng'] += 1;
        if($_SESSION['tumneng'] > count($produco) - 1) {
            $_SESSION['tumneng'] = count($produco) - 1;
        }
    }
    else {
		$_SESSION['tumneng'] = 0;
	}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produco</title>
</head>
<body>
    <form method="post">
        <p>ID: <?php echo $produco[$_SESSION['tumneng']]->ProductID ?></p>
		<p>Code: <?php echo $produco[$_SESSION['tumneng']]->ProductCode ?></p>
		<p>Name: <?php echo $produco[$_SESSION['tumneng']]->ProductName ?></p>
		<p>Description: <?php echo $produco[$_SESSION['tumneng']]->Description ?></p>
		<p>Price: <?php echo $produco[$_SESSION['tumneng']]->UnitPrice ?></p>
        <button type="submit" name="pvs">Previous</button>
        <button type="submit" name="nxt">Next</button>
    </form>
</body>
</html>
