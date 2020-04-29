<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body class="container bg-dark text-light">

    <div class="jumbotron mt-5">
        <h1 class="text-dark text-center">Kristine Practices PHP String functions</h1>
    </div>

    <?php //beginning of php

        // string variable
        $string = "This is a string.";
        echo "\$string: " . $string . "<br>";

        //number variable
        $number = 10;
        echo "\$number: " . $number . "<br>";

        function myFunction() {
            echo "myFunction called." . "<br>";
        }

        myFunction();

        //string variable 
        $fruit = "this is a string of fruit name apple, bananas, orange , <br>";
        echo "$fruit";

        $fruitAmounts = "this is a string of fruit amounts 2Xapple, 1Xbananas, 5Xoranges, <br>";
        echo "$fruitAmounts";

        //number variable
        $number = 25;
        echo "\$number:" . $number . "<br>";

        function addRecipe() {
            echo "addRecipe." . "<br>";
        }

        addRecipe();

        //string variable
        $bread = "I love to make Sour Dough" . "<br>";
        echo "$bread";

        //number variable
        $numberOfBreadLoafs = 4;
        echo "I buy " . $numberOfBreadLoafs . " loavs of bread so i decided to make my own bread" . "<br>";
        
        function letsBake() {
            echo "I'm excited " . "letsBake" . "<br>";
        }

        letsBake();
        
        

    ?> <!--end of php-->

  </body>
</html>
