<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="calculator.php" name="form" method="post">
        <input type="number" name="eerste"></input><br>
        <input type="number" name="tweede"></input><br>
        <input type="submit" name="operator" value="add"></input>
        <input type="submit" name="operator" value="subtract"></input>
        <input type="submit" name="operator" value="multiply"></input>
        <input type="submit" name="operator" value="divide"></input>
        <input type="submit" name="operator" value="modulo"></input>
    </form>


<?php

if(isset($_POST['operator'])){

    $operator = $_POST['operator'];
    $eerste = $_POST['eerste'];
    $tweede = $_POST['tweede'];
    
    switch ($operator) {
        case "add": 
            $total = $eerste + $tweede;
        break;
        
        case "subtract":
            $total = $eerste - $tweede;
        break;
        
        case "multiply":
            $total = $eerste * $tweede;
        break;
        
        case "divide":
            $total = $eerste / $tweede;
        break;
        
        case "modulo":
            $total = $eerste % $tweede;
        break;
    }
    if(isset($total)){
        echo $total;
    }
}

?>
</body>
</html>