<?php
// Display confirmation that web server is working
echo '<h1>It Works!</h1>';

// Display confirmation that database connection is working
$ip         = '192.168.0.1';
$dsn        = 'mysql:host=' . $ip . ';port=8890;dbname=app';
$username   = 'devs';
$password   = 'devs123!';

try
{
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<p>Connected to database successfully</p>';
}
catch(PDOException $e)
{
    echo '<p>Connection failed: ' . $e->getMessage() . '</p>';
}

$conn = null;

// Display PHP information
phpinfo();