<?php
$result = $dob = "";

if (isset($_POST["btn"])) {
    $dob = $_POST["dob"];
    
    
        function calculateage($dob) {
            $birda = new DateTime($dob);
            $today = new DateTime('today');
            $agedif = $birda->diff($today);

            return [
                'years' => $agedif->y,
                'months' => $agedif->m,
                'days' => $agedif->d
            ];
        }

        $ageDe = calculateage($dob);
        $result = "Age: {$ageDe['years']} years, {$ageDe['months']} months, and {$ageDe['days']} days.";
        echo $result;
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <form method="POST">
        Enter Your Birth Date:
        <input type="date" name="dob" >
        <input type="submit" name="btn" value="Calculate">
    </form>

  
</body>
</html>
