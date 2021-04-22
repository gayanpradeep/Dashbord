<?php
include_once 'db_con.php';
if(isset($_POST['submit']))
{
	$distric = $_POST['distric'];
    $tirange = $_POST['tirange'];
    $tiname = $_POST['tiname'];
    $file = $_FILES['image']['name'];
     


        $sql = "INSERT INTO tidetails_db(distric,tirange,tiname,image) VALUES ('$distric','$tirange','$tiname','$file')";
        $query_run =mysqli_query($conn,$sql);

        // $mysqli->query("INSERT INTO action_plan (district, month, ac_num, ac_name, target, male, female, achive) VALUES('$district', '$month', '$ac_num', '$ac_name', '$target', '$male', '$female', '$achive')") or die($mysqli->error);

        if($query_run){

            move_uploaded_file($_FILES["image"]["tmp_name"], "$file");
            header('Location: tidetails.php');
        }

    }





?>