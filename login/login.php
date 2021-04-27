<?php
 include "validate.php";
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
  



<body>
<!-- <div class="contain row">
    <div class="form">
    <center>
        <div class="mb-3">
            <div class="col-md-7 text-left new-session-forms-container">
                    <form action="" method="POST">
                        <div class="card" style="padding:1rem">
                            <div class="login-body">
                                <div class="form-group">
                                    <lable class="label-bold">User Name</lable>
                                    <input type="text" name="username" class="form-control" required/>
                                </div>
                                
                                <div class="form-group">
                                    <lable class="label-bold">Password</lable>
                                    <input type="password" name="password" class="form-control" required/>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
                                </div>
                            </div>    
                        </div>    
                    </form>
            </div>        
        </div>        
    </center>        
    </div>
</div> -->

<div class="box">

</br>
<div class="row">
<h4 style="color:#000; text-align:center; font-family: 'Roboto', sans-serif; font-size:18px;">Smallholder Tea and Rubber Revitalization Project</h4>

<h5 style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">(STaRR)</h5>
   <div>
   <p></p>
   <div class="row">
   <div>
   </br>
        <div class="row">
            <div class="column">
                <img src="../img/logo/sri.jpg" alt="Srilanka" style="width:80%">
            </div>
            <!-- <div class="column">
                <img src="../img/logo/ifad.png" alt="ifad" style="width:70%">
            </div> -->
            <div class="column">
                <img src="../img/logo/starr.jpg" alt="Starr" style="width:100%">
            </div>
            <div class="column">
                <img src="../img/logo/plant.jpg" alt="Plant" style="width:100%">
            </div>
        </div>
        </br>
        <div class="row">

        </br>
        <h4 style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">GPS Data Monitoring Dashboard</h4>
        <br>
        <hr>
        </div>
   </br>
   </br>
   </br>
   <form action="" method="POST">
     <div class="inputBox">
     <input type="text" name="username" class="form-control" onkeyup="this.setAttribute('value', this.value);" value="" required/>
       <label>Username</label>
     </div>
     <div class="inputBox">
     <input type="password" name="password" class="form-control" onkeyup="this.setAttribute('value', this.value);" value="" required/>
       <label>Password</label>
     </div>
     <input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
   </form>
 </div>

</body>
</html>