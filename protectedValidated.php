<?php
 
    session_start();
	ob_start();
    // Call this function so your page
    // can access session variables
 
    if ($_SESSION['loggedin'] != 1 || $_SESSION['validated'] == 0) {
        // If the 'loggedin' session variable
        // is not equal to 1, then you must
        // not let the user see the page.
        // So, we'll redirect them to the
        // login page (login.php).
 
        header("Location: login.php");
        exit;
    }
	ob_end_clean();
 
?>