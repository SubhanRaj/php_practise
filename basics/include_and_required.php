<?PHP

// Include & Require in PHP

// Using include for database connection

// include 'db_connect.php';

// Using require for database connection
require 'db_connect.php';

$sql = "SELECT * FROM `phpdata`";
$result = mysqli_query($conn, $sql);

// Find the number of recrods returned

$num = mysqli_num_rows($result);

// Print number of records

echo "<br>Number of records: $num";

// Using while loop to fetch data and print it

while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    echo $row ['sno'] . ".Hi, " . $row ['Name'] . "! You are " . $row ['Age'] . " years old.";

}


?>