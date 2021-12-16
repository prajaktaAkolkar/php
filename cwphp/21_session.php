<?php
session_start();

$_SESSION['username'] = "harry";
$_SESSION['favcat'] = "Books";
echo "we have saved ur session data";


?>