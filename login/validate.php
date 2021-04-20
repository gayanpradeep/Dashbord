<?php

require_once "dbcon.php";

$message = "";
$distric = "";


if(isset($_POST["btnLogin"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM  login_db WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($row["distric"] == "kandy")
            {
               $_SESSION['LoginUser'] = $row["username"]; 
               $_SESSION['role'] = $row["distric"];
               header('Location: ../kandy/kandy.php');
            }
            elseif($row["distric"] == "Matara")
            {
                $_SESSION['LoginUser'] = $row["username"];
                $_SESSION['role'] = $row["distric"];
                header('Location: ../Mathara/Mathara.php');

            }
            elseif($row["distric"] == "Rathnapura")
            {
                $_SESSION['LoginUser'] = $row["username"];
                $_SESSION['role'] = $row["distric"];
                header('Location: ../Rathnapura/Rathnapura.php');

            }
            // elseif($row["distric"] == "Monaragala")
            // {
            //     $_SESSION['LoginUser'] = $row["username"];
            //     $_SESSION['role'] = $row["distric"];
            //     header('Location: ../Monaragala/Monaragala.php');

            // }
            elseif($row["distric"] == "Nuwaraeliya")
            {
                $_SESSION['LoginUser'] = $row["username"];
                $_SESSION['role'] = $row["distric"];
                header('Location: ../Nuwaraeliya/Nuwaraeliya.php');

            }
            else
            {
                $message ="Invalid Login";
            }
        }
    }else{
        $message = "Invalid Username or Password";
        header('Location: login.php');
    }


}




?>