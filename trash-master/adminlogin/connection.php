<?php 
$db = new mysqli('localhost','root','','t2t');
if(!$db) {
    die('Please check Your database connection'.mysqli_error($db));
}
echo "hello";

?>