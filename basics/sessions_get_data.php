<?PHP

// Start the session and get the data

session_start();

echo "Welcome ". $_SESSION['username'];
echo"<br> You password is : " . $_SESSION['password'];


?>