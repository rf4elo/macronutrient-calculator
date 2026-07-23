<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macronutrient Calculator</title>
    <link rel="stylesheet" href="../styles/style.css" >
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    <h1>Macronutien<br/>Calculator</h1>

    <form method="post" action="/results" >

        <div class="input-field">
            <input type="number" name="weight" placeholder="Choose your weigth in kg" >
            <div class="dinamic-input-bg"></div>
        </div>
        <div class="input-field">
            <input type="number" name="height" placeholder="Choose your height in cm" >
            <div class="dinamic-input-bg"></div>
        </div>
        <div class="input-field">
            <input type="number" name="age" placeholder="Choose your age" >
            <div class="dinamic-input-bg"></div>
        </div>
        <select name="wer" >
            <option value="1.2">Sedentary (little or no exercise)</option>
            <option value="1.375">Lighly active (light exercise 1 to 3 days a week)</option>
            <option value="1.55">Moderately active (moderate exercise 3 to 5 days a week)</option>
            <option value="1.725">Very active (intense exercise 6 to 7 days a week)</option>
            <option value="1.9">Extremely active (heavy physical labor and daily training)</option>
        </select>

        <input type="submit" value="Calc" >

    </form>
    
</body>
</html>