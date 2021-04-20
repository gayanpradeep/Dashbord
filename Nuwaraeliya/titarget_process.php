<?php
    include_once 'db_con.php';
$id=0;
if(isset($_POST['submit1']))
{
    $distric =$_POST['distric'];
    $tirange =$_POST['tirange'];
    $tiname =$_POST['tiname'];
    $month=$_POST['month'];
    $titarget=$_POST['titarget'];
    $achivetarget=$_POST['achivetarget'];
    $starrtarget=$_POST['starrtarget'];
    $starrachivetarget=$_POST['starrachivetarget'];

    $sql = "INSERT INTO titarget_db (distric,tirange,tiname,month,titarget,achivetarget,starrtarget,starrachivetarget) VALUE('$distric', '$tirange','$tiname','$month','$titarget','$achivetarget','$starrtarget','$starrachivetarget')";

    if (mysqli_query($conn, $sql)) {
        //    echo "<script> alert('Data Add Successfuly!');windows.location='addTIrange.php'</script>";
           header('Location: titarget.php');
        } else {
           echo "Error: " . $sql . "
    " . mysqli_error($conn);
        }
        mysqli_close($conn);

    $res = mysqli_query($conn,$sql);

  

}
?>