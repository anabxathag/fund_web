<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web service</title>
</head>
<body>
    <form action="" method="POST">
        <label for="prodid">Name :</label>
        <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required />
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $prodid = $_POST['prodid'];        
        $url = "http://10.0.15.21/lab12/restapis/products.php?prodid=" . $prodid;
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);   
        $result = json_decode($response);
        // $result = [{"ProductID":"30","ProductCode":"CS-83","ProductName":"Potato Chips","Description":"Kettle-cooked crispy snackers","UnitPrice":1.8}]
        // $result[0] = {"ProductID":"30","ProductCode":"CS-83","ProductName":"Potato Chips","Description":"Kettle-cooked crispy snackers","UnitPrice":1.8}
        // $result[0]->ProductID = "30"

        echo "ID: " . $result[0]->ProductID . " <br>";
        echo "Code: " . $result[0]->ProductCode . " <br>";
        echo "Name: " . $result[0]->ProductName . " <br>";
        echo "Desciption: " . $result[0]->Description . " <br>";
        echo "Price: " . $result[0]->UnitPrice . " <br>";
    }
    ?>
</body>
</html>