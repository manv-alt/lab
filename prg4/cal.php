<?php
$result = $num1 = $num2 = $as = $ss = $ms = $ds=  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $result = "Please enter valid numbers.";
    } else {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                $as="selected";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $ss="selected";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $ms="selected";
                break;
            case 'divide':
                $ds="selected";
                if ($num2 == 0) {
                    $result = "Cannot divide by zero.";
                    break;
                } else {
                    $result = $num1 / $num2;
                
                break;
                }
            default:
                $result = " Invalid operation selected.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculator</title>
</head>

<body>
    <h2> Calculator</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Enter first number" required>
        
        <select name="operation">
            <option value ="add"<?=$as?>>+</option>
            <option value ="subtract"<?=$ss?>>-</option>
            <option value ="multiply"<?=$ms?>>*</option>
            <option value ="divide"<?=$ds?>>/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="btn" >Calculate</button>
    </form>
<?php
echo"$result";
?>
</body>

</html>