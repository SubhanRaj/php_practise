<!-- Creating a MySQL database in PHP -->

<!-- First we connect to the database -->
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>MySQL in PHP</title>
</head>

<body>
    <?PHP

    // Connecting to the Database

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Creating connection

    $conn = mysqli_connect($servername, $username, $password);
    // Die if connection is not sucessfull
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Connection is Successful!</strong> You have sucessfully connected to the database "' . $servername . '" using username "' . $username . '" & password "' . $password . '"
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
    }
    // Creating a database
    // We will use SQL Query to create a database
    $sql = "CREATE Database php_practise";
    mysqli_query($conn, $sql);


    $result = mysqli_query($conn, $sql);


    // Check for the database creation success
    if ($result) {
        echo "The Database creation is sucessful";
    } else {

        echo "The Database was not created sucessfully because of this error ---> ".mysqli_error($conn);
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>