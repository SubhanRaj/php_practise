<?PHP

// Sessions in PHP
// Used to store information across multiple pages

// Session to verify user login ingo

session_start();

$_SESSION['username'] = "Subhan";
$_SESSION['password'] = "12345";
 echo "We have saved your username and password";


?>