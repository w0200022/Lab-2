<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Outputting Fahrenheit to celsius Conversion in a Dynamically Generated Table</title>
    <link rel="stylesheet" href="table.css" type="text/css"/>
</head>
<body>

<p>
    <a href="FahrenheitConversion.php">Click here for Fahrenheit to celsius Conversion</a> |
    <a href="CelsiusConversion.php">Click here for celsius to Fahrenheit Conversion</a>
</p>

<!--Step 1-->
<?php
/*for($fahrenheit=0;$fahrenheit<=100; $fahrenheit+=1){
    echo  "$fahrenheit degree(s) fahrenheit equals - ";
    $celsiusMiddle = 32 - $fahrenheit;
    $celsius = round($celsiusMiddle * (5/9));
    echo "$celsius" . " degree celsius.";
    echo "<br/>";
}*/
?>
<!--Fahrenheit to celsius Conversion-->
<?php
?>
<table>
    <thead>
    <tr>
        <th>Fahrenheit</th>
        <th>celsius</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for($fahrenheit=0;$fahrenheit<=100; $fahrenheit+=1){
        echo  "<tr>";
        echo "<td>$fahrenheit</td>";
        $celsiusMiddle = 32 - $fahrenheit;
        $celsius = round($celsiusMiddle * (5/9));
        echo "<td>$celsius</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>