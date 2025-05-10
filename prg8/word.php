<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Word Frequency Analyzer</h2>

<form method="POST">
     Enter a string:<input type="text" name="str" placeholder="Enter a string"><br>
    <input type="submit" name="abtn" value="Analyze"> 
</form>
<?php 
if(isset($_POST["abtn"])){
    $word =trim($_POST["str"]);
    if(strlen($word>0)){
        $word = explode(" ", $word);
        $frequency = array();
        foreach($word as $words){
            $words =strtoupper($words);
            if(isset($frequency[$words])){
                $frequency[$words]+=1;
        }
        else{
            $frequency[$words] = 1;
        }
    }
    $kary=$frequency;
    $krary = $frequency;
    $sary =$frequency;
    $rary =$frequency;

    ksort($kary);
    krsort($krary);
    sort($sary);
    asort($rary);
    $_SESSION["asc"] = $kary;
    $_SESSION["dsc"] = $krary;
    $_SESSION["rary"] = $rary;
    $_SESSION["max"]=$sary[count($sary)-1];
    $_SESSION["min"]=$sary[0];
    DisplayResult($frequency);
}
}
function DisplayResult($arr){
    echo"<h3>Word frequency</h3>";
    foreach($arr as $key => $value){
        echo "$key : $value <br>";
    }
    $ary = $_SESSION["rary"];
    if(count($ary)>0){
       $max = $_SESSION["max"];
        $min = $_SESSION["min"];
         foreach($ary as $key => $value){
            if($ary[$key] == $max){
                echo "<h3>Most frequent word is" .$key. "(used".$max." times)</h3>";
            }
            if($ary[$key] == $min){
                echo "<h3> least frequent word is" .$key. "(used".$min." times)</h3>";
            }

    }
}
}
if(isset($_POST["asbtn"])){
     $ar=$_SESSION["asc"];
     DisplayResult($ar);
}
if(isset($_POST["dsbtn"])){
     $ar=$_SESSION["dsc"];
     DisplayResult($ar);
}
?>
<form method="POST">
    <input type="submit" name="asbtn" value="Sort Ascending">
    <input type="submit" name="dsbtn" value="Sort Descending">
    </form></body>
</html>
  