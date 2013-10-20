<?php
  define('ADMIN_USERNAME', 'admin');
  define('ADMIN_PASSWORD', '');

  // Define database connection constants
  define('DB_NAME', 'songDB');
  define('DB_USER', 'b07964b263fff6');
  define('DB_PASSWORD', '');
  define('DB_HOST', '');
  
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  mysqli_set_charset($conn,'utf8');
	session_start();
?>