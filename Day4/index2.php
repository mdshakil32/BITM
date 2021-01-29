<?php
include 'calculator2.php';

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$num3=$_POST["num3"];
$num4=$_POST["num4"];
$operator=$_POST["operator"];

$CalculatorObject=new Calculator;
$result=$CalculatorObject->calculate($num1,$num2,$num3,$num4,$operator);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Calculator</title>
  </head>
  <body>

    <div class="row">
    <div class="offset-4 col-lg-4 border border-primary mt-5 px-0">
        <h1 class="text-center bg-info">Calculator</h1>

            <form action="" method="POST">

                <h1 class="alert-success">Result: <?= $result ?> </h1>
                    

                <div class="form-group mb-3">
                    <label>Number 1</label>
                    <input type="number" value="<?= $num1?>"  name="num1">
                </div>

                <div class="form-group mb-3">
                    <label >Number 2</label>
                    <input type="number"  value="<?= $num2?>" name="num2">
                </div>
                <div class="form-group mb-3">
                    <label>Number 3</label>
                    <input type="number" value="<?= $num3?>"  name="num3">
                </div>

                <div class="form-group mb-3">
                    <label >Number 4</label>
                    <input type="number"  value="<?= $num4?>" name="num4">
                </div>


                <div class="form-group mb-3">
                <label>Operator</label>
                    <select name="operator" class="w-25">

                        <option value="+" <?= $operator=='+'?'selected':'' ?>>+</option>
                        <option value="-" <?= $operator=='-'?'selected':'' ?>>-</option>
                        <option value="*" <?= $operator=='*'?'selected':'' ?>>*</option>
                        <option value="/" <?= $operator=='/'?'selected':'' ?>>/</option>

                    </select>
                </div>
                <div>
                    <button class="btn btn-primary" name="submit">Calculate result</button>
                </div>


            </form>
        </div>


    </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
