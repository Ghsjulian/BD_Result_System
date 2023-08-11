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
  $islam = $_POST['islam'];
  $christian = $_POST['christian'];
  $math = $_POST['math'];
  $ict = $_POST['ict'];
  $physics = $_POST['physics'];
  $chemistry = $_POST['chemistry'];
  $biology = $_POST['biology'];
  $agriculture = $_POST['agriculture'];
  $phisical = $_POST['phisical'];
  $carrier = $_POST['carrier'];
  $finnance = $_POST['finnance'];
  $science = $_POST['science'];
  $accounting = $_POST['accounting'];
  $business = $_POST['business'];
  /*   PREPARED FOR SENDING INTO THE SERVER*/
  if ($group == "Science") {
    $sql = "INSERT INTO `science`(`student_name`, `bangla`, `english`, `physics`, `chemistry`, `bd_history`, `ict`, `mathematics`, `higher_math`, `agreeculture`, `biology`,`islam_education`,`hindu_education`, `christian_education`, `physical_education`, `career_education`,`history`)VALUES('$name','$bangla','$english','$physics','$chemistry','$bangladesh_history','$ict','$math','','$agriculture','$biology','','$hindu','','','$phisical','$carrier','')";
    /*    ADDED THE STUDENTS INFO     */
    $info = "INSERT INTO `marksheet`(`student_name`, `roll`, `group`, `year`, `result`, `birth`, `gpa`, `exam_name`, `institute`, `father`, `mother`,`board`)VALUES('$name','$roll','$group','$year','$result','$dob','$gpa','$exam_name','$institute','$father','$mother')";
    echo $sql."\n\n".$info; exit();
    /* $query = $__DB__->__INSERT__($sql);
    if ($query) {
      echo "Inserted";
    }
    */
  } else if ($group == "Humanity") {
    /*
    *
    *  MAKING SQL QUERY
    *
    */
    $sql = "INSERT INTO `humanity`(`sub_id`, `student_name`, `sub_code`, `bangla`, `english`, `math`, `geography`, `civic_citizen`, `economics`, `general_science`, `ict`, `history`,
    `agriculture`, `hindu`, `christian`, `islam`) VALUES
    ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]')";
  } else if ($group == "Commerce") {
    $sql = "INSERT INTO `commerce`(`sub_id`, `student_name`, `sub_code`, `bangla`, `english`, `math`, `general_science`, `finnance`, `business_ent`, `ict`, `islam_edu`, `agriculture`,
    `hindu`, `christian`) VALUES
    ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')";
  }

  /*
  *
  * MAKING SQL QUERY
  *
  */


}
?>