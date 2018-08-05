<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<nav>
<a href="/" >Home</a>
</nav>
    <?php 
        $fizzBuzzTotal = $_POST["fizzBuzzTotal"];
        for($i = 1; $i <= $fizzBuzzTotal ; $i++) {
            $isFizz = (0 === $i % 3);
            $isBuzz = (0 === $i % 5);

            if($isFizz) {
                echo "Fizz";
            }
            if($isBuzz) {
                echo "Buzz";
            }

            if(!$isFizz && !$isBuzz)
            {
                echo $i;
            }

        }
    ?>
</body>
</html>