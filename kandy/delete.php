<?php
include_once 'db_con.php';

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE from tidetails_db WHERE id=$id") or die($conn->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: progress.php");    
}
?>