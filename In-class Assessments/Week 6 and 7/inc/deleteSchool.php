<?php
include('../reusable/con.php');
include('functions.php');

if (isset($_GET['id'])) {
    print_r($_GET);
    $id = $_GET['id'];

    $id = intval($id); // convert string to int

    $query = "DELETE FROM schools WHERE id = '$id'";
    $school = mysqli_query($connect, $query);

    if ($school) {
        set_messages('School Deleted Successfully', 'success');
        header('Location: ../index.php');
    } elseif (!$school) {
        set_messages('School was deleted successfully!', 'danger');
        header('Location: ../index.php');
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "Not Authorized";
}
