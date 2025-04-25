<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Word Frequency Analyzer</h3>
    <form   method="post">
         Enter a string: <input type="text" name="str" required>
            <input type="submit"  name="abtn" value="Analyze Button">
    </form>
    <?php
    if (isset($_POST['abtn'])) {
         $words=trim($_POST['str']);
         if(strlen($words)>0){
            $words=explode(" ",$words);
            $frequency=array();
            foreach($words as $word){
               $word=strtoupper(string: $word);
               if(isset($frequency[$word])){
                    $frequency[$word]+=1;
               }else{
                    $frequency[$word]=1;
                }
            }
            $kary=$frequency;
            $krary=$frequency;
            $sary=$frequency;
            $rary=$frequency;
ksort($kary);
ksort($krary);
sort($sary);
arsort($rary);
$_SESSION["asc"]=$kary;
$_SESSION["dsc"]=$krary;
$_SESSION["rary"]=$rary;
$_SESSION["max"]=$sary[count($sary)-1];
$_SESSION["min"]=$sary[0];
DisplayResult($frequency);
         }
        }
    function DisplayResult($arr){
        echo"<h3>Word frequency analyzer</h3>";
        foreach($arr as $key=>$value){  
            echo"$key: $value times<br>";
        }
        $ary=$_SESSION["rary"];
        if(count($ary)>0){
            $max=$_SESSION["max"];
            $min=$_SESSION["min"];
            foreach($ary as $key=>$value){
                if($ary[$key]==$max){
                    echo"<h3>The most used word is".$key."(used".$max."times)</h3>";
                }
                if($ary[$key]==$min){
                    echo"<h3>Least used word is".$key."(used".$min."times)</h3>";
                }
            }
            }
        }
        if(isset($_POST["asbtn"]))
        {
            $ary=$_SESSION["asc"];
            DisplayResult($arr);
        }
        if(isset($_POST["dsbtn"]))
        {
            $ary=$_SESSION["dsc"];
            DisplayResult($arr);
        }
    
    ?>
    <form method="post">
        <input type="submit" name="asbtn" value="Ascending Order">
        <input type="submit" name="dsbtn" value="Descending Order">
    </form>
</body>
</html>