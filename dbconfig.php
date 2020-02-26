<?php
$host='localhost';
$db = 'netland';
$username = 'root';
$password = '';

$dsn= "mysql:host=$host;dbname=$db";
try {
    // create a PDO connection with the configuration data
    $conn = new PDO($dsn, $username, $password);
    
    // display a message if connected to database successfully
    if ($conn) {
        echo "Connected to the <strong>$db</strong> database successfully!";
    }
} catch (PDOException $e) {
    // report error message
    echo $e->getMessage();
}
$seriesQuery = "select title, rating from series";
$result = mysql_query($seriesQuery, $conn);

$test = $conn->query('select rating from series') or die ("Error querying.");
foreach ($test as $row) {
    echo $row['rating'] . PHP_EOL;
}

?>