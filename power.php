<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Math</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src=""></script>
</head>
<body>
<nav>
<a href="/" >Home</a>
</nav>
    <?php 
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        echo '$' . $number1 * $number2;

    ?>
</body>
</html>