<?php
  $dsn = 'mysql:host=localhost;dbname=learn_mysql'; // Define the DSN for the PDO connection
  $user = 'root'; // Define the database username
  $pass = ''; // Define the database password

  // Set PDO options, specifically setting the character set to UTF-8
  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );

  // Attempt to connect to the database using PDO
  try {
    $conect = new PDO($dsn, $user, $pass, $options); // Create a new PDO instance
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception to handle errors
    $q = "INSERT INTO users (name) VALUES ('محمد')"; // SQL query to insert a new user
    $conect->exec($q); // Execute the SQL query
    echo 'Successfully connected';
  } catch (PDOException $e) {
    // Output error message if connection fails
    echo 'Error connecting: ' . $e->getMessage();
  }
