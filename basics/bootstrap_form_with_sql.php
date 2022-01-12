<!-- A Bootstrap form in which we submit entries to databse using MySQLi in PHP-->


<!-- We will use Bootstrap for basic HTML/CSS/JS -->

<!-- Bootstrap Starter Template -->

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./get_post.php">Contact Us</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/php_practise">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/phpmyadmin/">PHPMyAdmin</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- PHP Code -->
    <?PHP

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $concern = $_POST['concern'];
    }
    // Connecting to the Database

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";

    // Creating connection

    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection is not sucessfull
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo '<h5>Connection was sucessfull</h5>';
        // Submit entries to a SQL Database
        // Inserting Data in a SQL Table in PHP
        $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `date`) VALUES ('$name', '$email', '$concern',current_timestamp())";
        $result = mysqli_query($conn, $sql);

        // Check for the data insertion is success
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> your entry has been submitted sucessfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        } else {

            echo "The data was not inserted sucessfully because of this error ---> " . mysqli_error($conn);
        }
    }

    ?>
    <!-- heading -->
    <div class="container mt-2">
        <div class="d-flex-row justify-content-center align-items-center">
            <h1 class="text-center">Contact Us form using Get/Post & MySQLi</h1>
        </div>
    </div>
    <!-- Form -->
    <div class="container mt-3">
        <h2>Contact us for your concerns</h2>
        <form action="/php_practise/basics/bootstrap_form_with_sql.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Enter your name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="textarea" class="form-label">Discription </label>
                <textarea name="concern" class="form-control" id="concern" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>


</html>