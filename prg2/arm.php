<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>

<body>
    <h2>Armstrong Number Checker</h1>
        <form action="" method="POST">
            <label for="number">Enter a number: </label>
            <input type="text"  name="number" value="<?php isset($_POST['number']) && htmlspecialchars($_POST['number']) ?>">
</br></br>
            <input type="submit" value="Check"  >
        </form>
        <?php
        function isArmsStrong($num)
        {
            $origanal_num = $num;
            $sum = 0;
            $n = strlen($num);

            while ($num > 0) {
                $digit = $num % 10;
                $sum = $sum + pow($digit, $n);
                $num = $num / 10;
            }
            return $origanal_num == $sum;
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $input_number = $_POST['number'];
            if (
                is_numeric($input_number) && $input_number > 0 &&
                $input_number == (int)$input_number
            ) {
                echo "<h3>Result</h3>";
                if (isArmsStrong($input_number)) {
                    echo  "<p>The given number $input_number is an Armstrong number.</p>";
                    echo "<p>Armstrong numbers from 1 to $input_number are :";
                    for ($i = 1; $i <= $input_number; $i++) {
                        if (isArmsStrong($i)) {
                            echo "$i "."&nbsp";
                        }
                    }
                    
                    
                } else {
                    echo "The given number $input_number is not an Armstrong number.";
                }
            } else {
                echo " Please enter a positive integer.";
            }
        }
        ?>
</body>

</html>