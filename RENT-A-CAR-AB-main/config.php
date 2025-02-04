<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="final2";



try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($pdo) {
    echo "Connection successful!";
}

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>