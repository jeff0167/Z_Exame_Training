<?php require_once "../coolLib.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "root", "do_mysql_php");
// $mysqli = mysqli_connect("localhost", "root", "root", "do_mysql_php"); // not used like a class
// $result = mysqli_query("CREATE TABLE person(id INT");

// $mysqli->query("DROP TABLE IF EXISTS person");
// $mysqli->query("CREATE TABLE person(id INT");

// $mysqli->query("DROP TABLE IF EXISTS person");
// $mysqli->query("CREATE TABLE person(id INT, firstName TEXT)");
// $mysqli->query("INSERT INTO person(id, firstName) VALUES (1, 'obiwon'), (2, 'Luke'), (3, 'Eric')");
$stmt = $mysqli->prepare("INSERT INTO person(id, firstName) VALUES (?, ?)"); // reusable and protect against SQL injection

$id = 1;
$label = 'kevin';
$stmt->bind_param("is", $id, $label); // "is" means that $id is bound as an integer and $firstName as a string

$stmt->execute();

$result = $mysqli->query("SELECT * FROM person ORDER BY id ASC");
$row = mysqli_fetch_assoc($result);



var_dump($row);

foreach ($result as $row) {
    cw(" id = " . $row['id'] . ", firstName =" . $row['firstName']);
}

?>