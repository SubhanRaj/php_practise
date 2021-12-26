<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Types in PHP</title>
</head>

<body>
    <div class="nav justify-content-center">

        <h1>PHP Data Types</h1>
    </div>
    <h2>
        PHP support the following data types:
    </h2>
    <ul>
        <li>
            <b>String</b>
        </li>
        <li>
            <b>Integer</b>
        </li>
        <li>
            <b>Float</b>
        </li>
        <li>
            <b>Boolean</b>
        </li>
        <li>
            <b>Array</b>
        </li>
        <li>
            <b>Object</b>
        </li>
        <li>
            <b>NULL</b>
        </li>
        <li>
            <b>Resource</b>
        </li>
    </ul>
    <?php
    // String

    $string = "This is a string";
    echo $string;
    echo "<br>";

    // Variable
    // In PHP, a variable is a container for a value, which can be changed at any time.
    // it can be a string, integer, float, boolean, array, object, NULL or resource.

    $name = "Subhan";
    $age = 20;
    $university = "Khwaja Moinuddin Chishti Language University";

    // Let's try to create a string that has above variables
    $info = "Hi, My name is $name, I'm $age years old and I study at $university";
    echo $info;

    // Integer
    // Integers are whole numbers, positive or negative.

    $salary = 100000;
    echo " <br> $name is $age years old and astonishingly he earns $salary";

    // Float
    // Float can store floating point numbers i.e. Decimal numbers.

    $height = 151.52;
    $weight = 54.5678;
    echo "<br> $name is $height cm tall and weighs $weight kg";

    // Boolean
    // Boolean is a data type that can only have two values: true or false.

    $true = true;
    $false = false;
    echo "<br> $name is $true and $name is $false";

    // Array
    // Arrays is a collection of similar data types which can store multiple valeus, they are accessed by using an index number.
    // In PHP arrays are denoted by square brackets [], and individual values within the array are separated by commas.

    $my_friends = array("Huzaifa, Jainendra, Pratyush");



    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>