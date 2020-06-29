<?
$mysqli=new mysqli("localhost", "root", "", "mydb");
$mysqli->set_charset('cp1251');

$title=$_POST['title'];
$author=$_POST['author'];
$pages=$_POST['pages'];
$publisher=$_POST['publisher'];

if ($title==null or $author==null or $pages==null or $publisher==null) {
	echo ("Error");
  } else {
	echo ("The book is added");
	$s = "insert into `books` (`title`, `author`, `pages`, `publisher`)
	values('$title','$author','$pages','$publisher')";

$result = $mysqli->query($s);
}
?>