<?php

include('functions.php');

// print_r($_POST);
//Array ( [schoolName] => lmao [schoolType] => pub [phone] => 74747474 ) 
$schoolName = $_POST['schoolName'];
$schoolType = $_POST['schoolType'];
$phone = $_POST['phone'];
$email = $_POST['email'];

//connection string
include '../resuable/conn.php';

$query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES ('$schoolName', '$schoolType', '$phone', '$email')";

$school = mysqli_query($connect, $query);

if ($school) {
    set_messages('School Added', 'success');
    header("Location: ../index.php");
} elseif (!$school) {
    set_messages('Error while adding school', 'error');
    echo "Error: " . "<br>" . mysqli_error($connect);
} else {
    echo "You should not be here!";
}
