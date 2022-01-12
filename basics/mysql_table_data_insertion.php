<!-- Inserting Data in a SQL Table in PHP -->

<!-- First we connect to the database -->
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MySQL data insertion in PHP</title>
</head>

<body>
    <?PHP

    // Connecting to the Database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "php_practise";

    // Creating connection

    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection is not sucessfull
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Connection is Successful!</strong> You have sucessfully connected to the database ' . $database . ' using the username ' . $username . ' , password ' . $password . '"" & you are connected to the  server ' . $servername . '"
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
    }
    // Using variable as data
    $name = "Huzaifa";
    $age = "19";
    $email = "huzaifa@kmclu.ac.in";
    $mobileno = 6395646005;
    // Inserting Data in a SQL Table in PHP
    $sql = "INSERT INTO `phpdata` (`sno`, `Name`, `Age`, `Email`, `mobileno`) VALUES (NULL, '$name', '$age', '$email', '$mobileno')";
    $result = mysqli_query($conn, $sql);

    // Check for the data insertion is success
    if ($result) {
        echo "The Data insertion is sucessful";
    } else {

        echo "The data was not inserted sucessfully because of this error ---> " . mysqli_error($conn);
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>