<?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $wer = $_POST['wer'];

    if(empty($weight) || empty($height) || empty($age) || empty($wer)) {
        http_response_code(400);
        echo "<center style='margin-top: 40dvh;' ><h1>400 - Bad request</h1>";
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
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

    <h1>Results</h1>

    <div class="results">

        <p>Your daily caloric expenditure is equivalent to: <span class="values"><?php echo round($tdee, 2); ?>kcal</span></p>

        <p>To gain mass, you should consume: <span class="values"><?php echo round($tdee + 300, 2); ?>kcal</span></p>

        <p>These daily calories are distributed as follows:</p>
        <!-- <ul>
            <li>Proteins - <span class="values"><?php echo $proteins; ?>g</span> - <span class="values"><?php echo $proteins*4; ?>kcal</span></li>
            <li>Fats - <span class="values"><?php echo $fats; ?>g</span> - <span class="values"><?php echo $fats * 9; ?>kcal</span></li>
            <li>Carbohydrates - <span class="values"><?php echo round($carbohydrates+300, 2); ?>g</span> - <span class="values"><?php echo round(($carbohydrates * 4)+300, 2); ?>kcal</span></li>
        </ul> -->

        <table>
            <tr>
                <td class="title" >Measures</td>
                <td class="title" >Carbohydrates</td>
                <td class="title" >Proteins</td>
                <td class="title" >Fats</td>
            </tr>
            <tr>
                <td class="title" >g</td>
                <td><?php echo round($carbohydrates, 2); ?>g</td>
                <td><?php echo $proteins; ?>g</td>
                <td><?php echo $fats; ?>g</td>
            </tr>
            <tr>
                <td class="title" >kcal</td>
                <td><?php echo round(($carbohydrates * 4)+300, 2); ?>kcal</td>
                <td><?php echo ($proteins * 4); ?>kcal</td>
                <td><?php echo ($fats * 9); ?>kcal</td>
            </tr>
        </table>

        <a href="/" class="btn" >Return</a>

    </div>

</body>
</html>
