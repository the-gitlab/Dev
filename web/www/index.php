<?php

$database = $_ENV['MYSQL_DATABASE'];
$host = $_ENV['MYSQL_HOST'];
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];

$mongohost = $_ENV["MONGODB_HOST"];
$muser = $_ENV['MONGO_USERNAME'];
$mpassword = $_ENV['MONGO_PASSWORD'];
$mdatabase = $_ENV['MONGO_DATABASE'];
$source = $_ENV['MAUTH_DB'];

$pdo = new PDO("mysql:dbname=$database;host=$host", $user, $password);

// MySQL query
$sql = "SELECT * FROM products";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$mysqlProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

$options =  [
  'username' => "{$muser}",
  'password' => "{$mpassword}",
  'authSource' => "{$source}",
];
   // connect to mongodb
   $m = new MongoDB\Driver\Manager("mongodb://{$muser}:{$mpassword}@{$mongohost}:27017/{$mdatabase}", $options);
   $query = new MongoDB\Driver\Query([]);
   $cursor = $m->executeQuery('db2.notes', $query);

echo "<h1>MongoDB Data</h1>";
echo "<pre>";
print_r($cursor->toArray());
echo "</pre>";

echo "<h1>MySQL Data</h1>";
echo "<pre>";
print_r($mysqlProducts);
echo "</pre>";
?>