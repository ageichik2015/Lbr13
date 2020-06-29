<?
$mysqli = new mysqli("localhost", "root", "", "mydb");
$mysqli->set_charset('cp1251');

$author=$_POST['author'];

if ($author==Null){
	$s = "SELECT * FROM `books`";
	$result = $mysqli->query($s);

	while ($row = $result->fetch_assoc()) {
		echo $row["title"].' - '. $row["author"].'. '. $row["pages"]. '. '. $row["publisher"].'.';
		echo "<br>";
	}
}
else{
	$s = "SELECT * FROM `books` where `author`='$author'";
	$result = $mysqli->query($s);

	while ($row = $result->fetch_assoc()) {
		echo $row["title"].' - '. $row["author"].'. '. $row["pages"].'. '. $row["publisher"].'.';
		echo "<br>";
	}
}
?>