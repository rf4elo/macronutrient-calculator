<?php

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Not found</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100dvh;

            text-align: center;

            background-color: #00000a;
            color: #fff;

            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <div>
        <h1>404</h1>
        <h2>Page "<?php echo $uri; ?>" in method "<?php echo $method; ?>" not found.</h2>
    </div>
</body>
</html>