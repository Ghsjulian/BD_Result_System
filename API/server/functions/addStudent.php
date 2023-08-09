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
  $student_name = $_POST['student_name'];
  $group = $_POST['group'];
  $roll = $_POST['roll_number'];
  $registration = $_POST['reg_number'];
  $password = $_POST['password'];
  /*
  *
  * MAKING SQL QUERY
  *
  */
  $select = "SELECT student_name,rool FROM students WHERE student_name='$student_name' AND rool='$roll'";
  if ($__DB__->__LOGIN__($select)) {
    echo json_encode(array(
      "status" => false,
      "message" => "This Student Already Exist !"
    ));
    exit();
  } else {
    $sql = "INSERT INTO `students`(`student_name`, `rool`, `registration`, `password`,`group`) VALUES ('$student_name','$roll','$registration','$password','$group')";
    $query = $__DB__->__INSERT__($sql);
    if ($query) {
      echo json_encode(array(
        "status" => true,
        "message" => "Student Added !"
      ));
    }
  }
}







/*
*
*
*
*

INSERT INTO `loan_history`(`id`, `user_id`, `user_avtar`, `amount`, `notification`, `time`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

*
*
*
*
*/








?>