<?php
// LOGOUT PAGE
// DESTROYS THE SESSION
include 'session.php';

session_destroy();
echo "<script>alert('You have successfully logged out!'); location='index.php';</script>";

?>