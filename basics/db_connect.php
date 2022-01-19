<?PHP
// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "php_practise";

// create connection to the databse

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection fails
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}
