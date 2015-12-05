<?php
session_start();
include('conf/db_connect.php');
connect();
//$id = $_POST['id'];
$first_name = $_POST['fname'];
$surname = $_POST['sname'];
$middle_name = $_POST['mname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$sex =$_POST['sex'];
$marital = $_POST['marital'];
$office = $_POST['office'];
$phone = $_POST['fone'];
$email = $_POST['email'];
$state = $_POST['state'];
$village = $_POST['village'];
$lga = $_POST['lga'];
$nationality = $_POST['nation'];
$nok = $_POST['nok'];
$relationship = $_POST['relay'];
$contact = $_POST['contact'];
$occupation = $_POST['occupation'];
$religion = $_POST['religion'];
$num = "1";
$date = date("Y-m-d");
query("INSERT INTO owner(occupation, religion, first_name, surname, middle_name, dob, address, sex, marital, office, fone, email, state, village, lga, nation, nok, relay, contact, date, us) VALUES('$occupation', '$religion', '$first_name', '$surname', '$middle_name', '$dob', '$address', '$sex', '$marital', '$office', '$phone', '$email', '$state', '$village', '$lga', '$nationality', '$nok', '$relationship', '$date', '$num')");
redirect("index.php");
 ?>
