<?php
include_once 'db_con.php';
// $result = mysqli_query($conn,"SELECT * FROM tidetails_db WHERE tirange='GANNORUWA'");

$tirange = $_GET["tirange"];
$query1 = "SELECT * FROM titarget_db WHERE tirange='$tirange' AND distric='Mathara'";
$query1_result = mysqli_query($conn,$query1);






$query = "SELECT * FROM titarget_db WHERE tirange='$tirange' AND distric='Mathara'";
$result = mysqli_query($conn, $query) ;
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
	$chart_data .= "{ month:'".$row["month"]."', titarget:".$row["titarget"].", achivetarget:".$row["achivetarget"].", starrtarget:".$row["starrtarget"].", starrachivetarget:".$row["starrachivetarget"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>

<?php
include_once 'db_con.php';
$tirange = $_GET["tirange"];
$query = "SELECT * FROM titarget_db WHERE tirange='$tirange' AND distric='Mathara'";
$result = mysqli_query($conn, $query) ;
$chart_dataa = '';
while($row = mysqli_fetch_array($result))
{
	$chart_dataa .= "{ month:'".$row["month"]."', titarget:".$row["titarget"].", achivetarget:".$row["achivetarget"]."}, ";
}
$chart_dataa = substr($chart_dataa, 0, -2);
?>

<?php
include_once 'db_con.php';
$tirange = $_GET["tirange"];
$query = "SELECT * FROM titarget_db WHERE tirange='$tirange' AND distric='Mathara'";
$result = mysqli_query($conn, $query) ;
$chart_dataaa = '';
while($row = mysqli_fetch_array($result))
{
	$chart_dataaa .= "{ month:'".$row["month"]."', starrtarget:".$row["starrtarget"].", starrachivetarget:".$row["starrachivetarget"]."}, ";
}
$chart_dataaa = substr($chart_dataaa, 0, -2);
?>







<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

	<title>Mathara</title>

	<link href="../css/app.css" rel="stylesheet">

<!-- bar Chart -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>




</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="Mathara.php">
          <span class="align-middle">Mathara</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="Mathara.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>





					<li class="sidebar-header">
						Tools & Components
					</li>
					<li class="sidebar-item">
						<a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">View</span>
						</a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="progress.php">Progress</a></li>
						</ul>
					</li>


					<li class="sidebar-item active">
						<a data-target="#forms" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
            </a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tidetails.php">TI Details</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="titarget.php"> Add Monthly Target</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul>

		
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				<!-- <form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<but
						ton class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
					</div>
				</form> -->

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
								
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								
								
								
							
							</div>
						</li>
					
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="../img/avatars/starr.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">STaRR</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
							
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Form Layouts</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Information</h3>
								
								</div>
								<div class="card-body">
                                    <!-- <table>
                                        <?php
											
                                            $query = "SELECT * FROM tidetails_db WHERE tirange='$tirange' AND distric='Mathara'";
                                            $result = mysqli_query($conn,$query);
											while($row = mysqli_fetch_array($result))
											{  
												echo '  
													 <tr>  
														  <td>  
															   <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
														  </td>  
													 </tr>  
												'; 
												
										   } 

							
                                        ?> 
									
									

									



										
                                    </table> -->

									<table>
										<!-- <tr>
										   <th style="width:50%;"></th>
										   <th></th>
										</tr>    -->
										   <?php
										   $select =mysqli_query($conn,"SELECT * FROM tidetails_db WHERE tirange='$tirange' AND distric='Mathara'");
										   while($row = mysqli_fetch_array($select)){

										   ?>
										<tr>
											<td><?php echo $row['tiname']?></td>
											<td><img src="image/<?php echo $row['image']; ?> style="width:250px;height:240px"></img></td>
										</tr>
										<?php } ?>
									</table>



								</div>
							</div>
						</div>
						<div class=row>				   	
							<div class="col-12 col-xl-6" style="flex: 1 0 auto">
								<div class="card">
									<?php
										
										if (mysqli_num_rows($query1_result) > 0) {
									?>
									<table>
										<tr>
											<td style="width:10%; font-weight: bold; text-align: center;">Month</td>
											<td style="width:10%; font-weight: bold; text-align: center;">TSHD Target</td>
											<td style="width:10%; font-weight: bold; text-align: center;">TSHD Achive Target</td>
											<td style="width:10%; font-weight: bold; text-align: center;">STaRR Target</td>
											<td style="width:10%; font-weight: bold; text-align: center;">STaRR Achive Target</td>
											<br>
										</tr>
									<?php
									$i=0;
									while($row = mysqli_fetch_array($query1_result)) {
										?>
										<tr>
											<td><?php echo $row["month"]; ?></td>
											<td><?php echo $row["titarget"]; ?></td>
											<td><?php echo $row["achivetarget"]; ?></td>
											<td><?php echo $row["starrtarget"]; ?></td>
											<td><?php echo $row["starrachivetarget"]; ?></td>
										</tr>
									<?php
										$i++;
									}
									?>
									</table>
									<form method="post" action="export.php">
										<input type="submit" name="export" class="btn btn-success" value="Export" />
									</form>
									<?php
									}
									else{
										echo "No result found";
									}
									?>

								
									
								
								
									
								</div>
							</div>
						</div>		
						
						<div class="col-md-12">
							<div class="card">
							<div class="container" style="width:900px;">
							<br>
							<br>
							<br>	
								<h2 align="center">Individual Data Process</h2>
								<h3 align="center">All data</h3>   
								<br /><br />
								<div id="chart"></div>
							</div>
																
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								<div class="container" style="width:900px;">
								<br>
								<br>
								<br>	
									<h2 align="center">TSHDA Target Process</h2>
									<h3 align="center">Mathara</h3>   
									<br /><br />
									<div id="chartt"></div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="container" style="width:900px;">
								<br>
								<br>
								<br>	
									<h2 align="center">STaRR Target Process</h2>
									<h3 align="center">Mathara</h3>   
									<br /><br />
									<div id="charttt"></div>
								</div>
							</div>
						</div>

						<!-- <div class="col-md-12">
							<div class="card">
							
								
							</div>
						</div> -->
					</div>

				</div>
			</main>

		
		</div>
	</div>

	<script src="../js/app.js"></script>

</body>

</html>

<script>
Morris.Bar({
	element : 'chart',
	data:[<?php echo $chart_data; ?>],
	xkey:'month',
	ykeys:['titarget', 'achivetarget' , 'starrtarget','starrachivetarget'],
	labels:['titarget', 'achivetarget', 'starrtarget','starrachivetarget'],
	hideHover:'auto',

});

</script>
<script>
Morris.Area({
	element : 'chartt',
	data:[<?php echo $chart_dataa; ?>],
	xkey:'month',
	ykeys:['titarget', 'achivetarget' ],
	labels:['titarget', 'achivetarget'],
	hideHover:'auto',

});

</script>

<script>
Morris.Line({
	element : 'charttt',
	data:[<?php echo $chart_dataaa; ?>],
	xkey:'month',
	ykeys:['starrtarget', 'starrachivetarget' ],
	labels:['starrtarget', 'starrachivetarget'],
	hideHover:'auto',

});

</script>