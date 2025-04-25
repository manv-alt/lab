<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dict</title>
</head>
<body>
    <h1>Dictionary</h1>
    <form method="POST">
        <label for="word">Enter a word:</label>
        <input type="text" id="word" name="word" required>
        <button>Search Me</button>
    </form>
    <?php
    $dict = array(
        "MAN" => "Metropolitan Area Network",
        "CSS" => "Cascading Style Sheet",
        "PHP" => "Personal Home Page",
        "DVD" => "Digital Video/Versatile Disk",
        "FDM" => "Frequency Division Multiplexing",
        "GUI" => "Graphical User Interface",
        "HTML" => "HyperText Markup Language",
        "JPEG" => "Joint Photographic Experts Group",
        "JRE" => "Java Runtime Engine"
    );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = strtoupper($_POST["word"]);
        if (array_key_exists($word, $dict)) {
            echo "<B>Meaning: </B>" . $dict[$word];
        } else {
            echo "the word is not in the dictionary.";
        }
    }
    ?>
</body>
</html>