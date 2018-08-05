<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Power</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <form action="math.php" method="post">

          <p>Number 1</p>
          <input name="number1" type="number" step="any"> 
          <p>Number 2</p>
          <input name="number2" type="number" step="any">
          <p>Select an operator</p>
          <select name="selectOperator">
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
          </select>
          <input type="submit">
        </form>
      </div>
      <div class="col-sm">
        <form action="fizzbuzz.php" method="post">
          fizzBuzzTotal
          <input name="fizzBuzzTotal" type="number">
          <input type="submit">
        </form>
      </div>
      <div class="col-sm">
        <form action="power.php" method="post">
        <p>Enter price per kWh</p>
        <input name="number1" type="number" placeholder="0.2217"  step="any" name="power">
        <p>Enter about of kWh</p>
        <input name="number2" type="number" placeholder="5"  step="any" name="power">
        <input type="submit">
        </form>
      </div>
    </div>
  </div>




  </main>
</body>

</html>