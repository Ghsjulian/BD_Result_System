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
  $type = $_POST['type'];
  $gpa = $_POST['gpa'];
  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $dob = $_POST['birth'];
  $exam_name = $_POST['exam_name'];
  $year = $_POST['year'];
  $institute = $_POST['institute'];
  $result = $_POST['result'];
  /*    SHEET VALUES   */
  $bangla = $_POST['bangla'];
  $english = $_POST['english'];
  $bangladesh_history = $_POST['bangladesh_history'];
  $hindu = $_POST['hindu'];
  $physics = $_POST['physics'];
  $chemistry = $_POST['chemistry'];
  $biology = $_POST['biology'];
  $agriculture = $_POST['agriculture'];
  $phisical = $_POST['phisical'];
  $carrier = $_POST['carrier'];
  /*   PREPARED FOR SENDING INTO THE SERVER*/
  if ($group == "Science") {
    $sql = "INSERT INTO `science`(`student_id`, `bangla`, `english`, `physics`, `chemistry`, `bd_history`, `ict`, `mathematics`, `higher_math`, `agreeculture`, `biology`,`islam_education`, `hindu_education`, `christian_education`, `physical_education`, `career_education`, `history`)VALUES('$bangla','$english','$physics','$chemistry','$bangladesh_history','$ict','$math','$hirmath','$agriculture','$biology','','$hindu','','','$phisical','$carrier','')";
    echo $sql;
  } else if ($group == "Humanity") {
    echo "Humanity";
  } else if ($group == "Commerce") {
    echo "Commerce ";
  }

  /*
  *
  * MAKING SQL QUERY
  *
  */


}
?>