<?php
// web service URL 
$url = "http://10.0.15.21/lab12/restapis/products.php?list=10";   
$dataPoints = file_get_contents($url);
$result = json_decode($dataPoints, true); // Decode the JSON data

// Prepare data for chart
$chartData = array();
foreach ($result as $res) {
    $productCode = $res['ProductCode'];
    $unitPrice = $res['UnitPrice'];
    $chartData[] = array('label' => $productCode, 'y' => $unitPrice);
    // u can create other name than 'label', except name is 'x', it can not run.
}
$chartDataJSON = json_encode($chartData, JSON_NUMERIC_CHECK);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bar graph</title>

    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Price of Products"
                },
                axisX: {
                    title: "Product Code"
                },
                axisY: {
                    title: "UnitPrice (in THB)",
                    includeZero: true,
                    prefix: "",
                    suffix: "฿"
                },
                data: [{
                    type: "column",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo $chartDataJSON; ?>
                }]
            });
            chart.render();
        }
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 450px; width: 80%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
