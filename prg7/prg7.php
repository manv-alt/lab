<html>
<head>
    <title>String Manipulation</title>
</head>
<body>
    <h2>String Manipulation Tool</h2>
    <form method="POST">
        <label>Enter a String:</label><br>
        <input type="text" name="str" required><br><br>
        <button type="submit" name="length">GetLength</button>
        <button type="submit" name="reverse">Reverse</button>
        <button type="submit" name="uppercase">Uppercase</button>
        <button type="submit" name="lower">lowerCase</button>
        <button type="submit" name="replace">Replace</button>
        <button type="submit" name="palindrome">Check Palindrome</button>
        <button type="submit" name="shuffle">Shuffle</button>
        <button type="submit" name="wcount">WordCount</button>
    </form>
    <h3>Result:</h3>
    <?php
    $result = "";
    if(isset($_POST["str"])){
        $str = $_POST["str"];
    }
        if(isset($_POST['length'])){
            $result = "Length of the string is: ".strlen($str);
        }
        if(isset($_POST['reverse'])){
            $result = "Reverse of the string is: ".strrev($str);
        }
        if(isset($_POST['uppercase'])){
           $result = "Upper cas of  string is: ".strtoupper($str);
        }
        if(isset($_POST['lower'])){
            $result = "Lower case of   string is: ".strtolower($str); 
        }
        if(isset($_POST['replace'])){
           $result = "Length of the string is: ".str_replace("a","x",$str); 
        }
        if(isset($_POST['palindrome'])){
            $result = ($str == strrev($str)) ? "  string is a palindrome" : "It is not a palindrome";
        }
        if(isset($_POST['shuffle'])){
            $result = "Suffle of string: ".str_shuffle($str); 
        }
        if(isset($_POST['wcount'])){
            $result = " Word count  of   string is: ".str_word_count($str); 
        }
    
    echo "<p>$result</p>";
        ?>
</body>
</html>

