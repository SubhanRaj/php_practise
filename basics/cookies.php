<?php

echo "Welcome to the world of cookies!<br>";

// Sysntax to set cookie


// setcookie("category","Books", time() + 3600 , "/");
if (setcookie("category","Books", time() + 3600 , "/")) {
    echo "Cookie is set";
} else {
    echo "Cookie is not set";
}

?>
