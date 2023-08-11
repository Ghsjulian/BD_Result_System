<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
/*===================================*/
require_once '../database/__DB__.php';
$message = "";
$status = "";
$__DB__ = new __database__();
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "POST") {
  $group = $_POST['group'];
  $board = $_POST['board'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];

$sql = "SELECT student_name,rool FROM students WHERE student_name='$student_name' AND rool='$roll'";
echo $sql; 
  /*if ($__DB__->__LOGIN__($select)) {

}*/
}

?>