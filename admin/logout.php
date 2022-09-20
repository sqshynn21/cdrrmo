<?php
session_start();
unset($_SESSION['AdminLogin']);

echo header("Location: index.php");