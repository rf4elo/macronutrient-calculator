<?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $wer = $_POST['wer'];

    if(empty($weight) || empty($height) || empty($age) || empty($wer)) {
        http_response_code(400);
        echo "<center><h1>400 - Bad request</h1>";
        echo "<h2>All fields must be filled.</h2>";
        echo "<a href='/' >Return</a></center>";
        exit;
    }
    

    $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);

    // TOTAL DAILY ENERGY EXPENDURE
    $tdee = $bmr * (float)$wer;

    $proteins = $weight * 2;
    $fats = $weight * 1;
    $carbohydrates = ($tdee - ($proteins * 4) - ($fats * 9))/4;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="../styles/results.css">
</head>
<body>

    <h1>Results</h1>

    <div class="results">

        <p>Your daily caloric expenditure is equivalent to: <span class="values"><?php echo $tdee; ?>kcal</span></p>

        <p>To gain mass, you should consume: <span class="values"><?php echo $tdee + 300; ?>kcal</span></p>

        <p>These daily calories are distributed as follows:</p>
        <ul>
            <li>Proteins - <span class="values"><?php echo $proteins; ?>g</span> - <span class="values"><?php echo $proteins*4; ?>kcal</span></li>
            <li>Fats - <span class="values"><?php echo $fats; ?>g</span> - <span class="values"><?php echo $fats * 9; ?>kcal</span></li>
            <li>Carbohydrates - <span class="values"><?php echo round($carbohydrates+300, 2); ?>g</span> - <span class="values"><?php echo round(($carbohydrates + 300) * 4, 2); ?>kcal</span></li>
        </ul>

        <a href="/" class="btn" >Return</a>

    </div>

</body>
</html>
