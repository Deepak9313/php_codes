<?php
/*
This is a very important part because this thing tranfers the data from one page to another like login credentials and timing
we have some functions in sessions are:
session_start() => to start a new session
session_unset() => to stop a session
session_destroy() => to destroy a session
session_id() => to get a unique id
$_SESSION["variable"] = "value" => to get the session variable value
*/
# how to set and manage session timeout
/*
1)  setting the seesion timeout
    Set session cookie lifetime to 30 minutes (1800 seconds)
    session_set_cookie_params(1800);
2)  configuring 'session.gc_maxlifetime'
    Set session timeout and gc_maxlifetime to 30 minutes (1800 seconds)
    ini_set('session.gc_maxlifetime', 1800);
3)  starting the session
    session_start();
4)  Checking session expiration
    // Check if the session has timed out (30 minutes)
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // Session has timed out
        session_unset();     // Unset all session variables
        session_destroy();   // Destroy the session data
    // Redirect or perform other actions as needed
    }

    // Update the last activity time
    $_SESSION['LAST_ACTIVITY'] = time();
*/
session_set_cookie_params(10); //10 seconds
ini_set('session.gc.maxlifetime',10);
session_start();
if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] >= 10)){
    session_unset();
    session_destroy();
    header('location:intro.php');
}
$_SESSION["LAST_ACTIVITY"] = time();
echo $_SESSION['LAST_ACTIVITY'];
?>