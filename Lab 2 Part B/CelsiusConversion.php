<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Outputting Celsius to Fahrenheit Conversion in a Dynamically Generated Table</title>
    <link rel="stylesheet" href="table.css" type="text/css"/>


</head>
<body>
<p>
    <a href="FahrenheitConversion.php">Click here for Fahrenheit to Celsius Conversion</a> |
    <a href="CelsiusConversion.php">Click here for Celsius to Fahrenheit Conversion</a>
</p>

<!--celsius to Fahrenheit Conversion-->

<table>
    <thead>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for($celsius=0;$celsius<=100; $celsius+=1){
        echo  "<tr>";
        echo "<td>$celsius</td>";
        $fahrenheitMiddle = $celsius * (9/5);
        $fahrenheit = round($fahrenheitMiddle + 32);
        echo "<td>$fahrenheit</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>