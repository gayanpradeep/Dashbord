<?php
include_once 'db_con.php';
$data =mysqli_query($conn,"SELECT * FROM tidetails_db WHERE distric='Mathara'");

$query ="SELECT SUM(titarget) As sum FROM titarget_db WHERE distric='Mathara'";
$query_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($query_result)){
	$output = " ".$row['sum'];
}

$query1 ="SELECT SUM(achivetarget) As sum1 FROM titarget_db";
$query1_result = mysqli_query($conn, $query1);

while($row = mysqli_fetch_assoc($query1_result)){
	$output1 = " ".$row['sum1'];
}

$query2 ="SELECT SUM(starrtarget) As sum2 FROM titarget_db WHERE distric='Mathara'";
$query2_result = mysqli_query($conn, $query2);

while($row = mysqli_fetch_assoc($query2_result)){
	$output2 = " ".$row['sum2'];
}

$query3 ="SELECT SUM(starrachivetarget) As sum3 FROM titarget_db WHERE distric='Mathara'";
$query3_result = mysqli_query($conn, $query3);

while($row = mysqli_fetch_assoc($query3_result)){
	$output3 = " ".$row['sum3'];
}

$que = "SELECT * FROM titarget_db WHERE distric='Mathara'";
$result = mysqli_query($conn, $que);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ month:'".$row["month"]."',titarget:".$row["titarget"].", achivetarget:".$row["achivetarget"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);

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

	<!-- chart -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

	<!-- table -->

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
	<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.0.1/js/dataTables.select.min.js"></script>



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
				
			
<!-- 
					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li> -->

					<li class="sidebar-item">
						<a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
            </a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tidetails.php">TI Details</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="titarget.php"> Add Monthly Target</a></li>
						</ul>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html">
              		<i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
            		</a>
					<ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="tidetails.php">TI Details</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="titarget.php"> Add Monthly Target</a></li>
						</ul>
					</li> -->

					<li class="sidebar-header">
						Plugins & Addons
					</li>

				

					<li class="sidebar-item">
						<a class="sidebar-link" href="https://starrgis.maps.arcgis.com/home/index.html">
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
						<button class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
					</div>
				</form> -->

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
	
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="../img/avatars/starr.jpg" class="avatar img-fluid rounded mr-1" alt="" /> <span class="text-dark">User</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="../login/login.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Analytics</strong> Dashboard</h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="Mathara.php">Mathara</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Analytics</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4" style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">TSHDA Totall Target</h5>
												<h1>
												<?php
												echo $output;
												?>
												</h1>
												
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4" style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">TSHDA Totall Achive Target</h5>
												<h1>
												<?php
												echo $output1;
												?>
												</h1>
												
											</div>
										</div>
									</div>
									<div class="col-sm-6">
											<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-4" style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">STaRR Totall Target</h5>
														<h1>
														<?php
														echo $output2;
														?>
														</h1>
														
													</div>
											</div>
											<div class="card">
													<div class="card-body">
														<h5 class="card-title mb-4" style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">STaRR Totall Target</h5>
														<h1>
														<?php
														echo $output3;
														?>
														</h1>
														
													</div>
											</div>
									</div>
								
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Recent Movement</h5>
								</div>

								<div id="chart"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100" style="flex: 1 0 auto">
								<div class="card-header">

									<h5 class="card-title mb-0"style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">TI Details</h5>
									<br>
									<div class="card">
										<?php
												if (mysqli_num_rows($data) > 0){
												?>	
												<table>
												<tr>
													<td style="width:10%; font-weight: bold; text-align: center;">TI Range</td>
													<td style="width:10%; font-weight: bold; text-align: center;">Name</td>
												</tr>
												<?php
												$i=0;
												while($row = mysqli_fetch_array($data)){
												?>
												<tr>
													<td style="width:10%; text-align: center;"><?php echo $row["tirange"]?></td>
													<td style="width:10%; text-align: center;"><?php echo $row["tiname"]?></td>
												</tr>
												<?php
												$i++;
												}
												?>
												</table>
												<?php
												}
												else{
													echo "No Result Found";
												}
												?>
									</div>			
										
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
									
									
											
							

										<!-- <table class="table mb-0">
											<tbody>
												<tr>
													<td>Chrome</td>
													<td class="text-right">4306</td>
												</tr>
												<tr>
													<td>Firefox</td>
													<td class="text-right">3801</td>
												</tr>
												<tr>
													<td>IE</td>
													<td class="text-right">1689</td>
												</tr>
											</tbody>
										</table> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0" style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">View Mathara</h5>
								</div>
								<!-- <div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div> -->
								<div id="map"></div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63492.955785247264!2d80.51572828041523!3d5.951991096217619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae138d151937cd9%3A0x1d711f45897009a3!2sMatara!5e0!3m2!1sen!2slk!4v1617783803665!5m2!1sen!2slk" width="577" height="499" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0" style="color:#000; text-align:center; font-family: 'Roboto', sans-serif;">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
					
								
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
							
							
							</div>
						</div>
					</div> -->
					<div class="col-md-12">
							<div class="card">
									<div class="card-header">
										<h5 class="card-title" style="color:#000; text-align:center;font-size:30px; font-family: 'Roboto', sans-serif;">Mathara Achivement</h5>
									</div>
									<?php
										$mysqli = new mysqli('localhost', 'root', '', 'newdash') or die (mysqli_error($mysqli));
										$result = $mysqli->query("SELECT * FROM titarget_db WHERE distric='Mathara' ORDER BY month") or die($mysqli->error);
										//pre_r($result);
									?> 
																
									<table id="example" class="display" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Month</th>
												<th>TI Ranges</th>
												<th>TI Name</th>
												<th>TSHDA Target</th>
												<th>TSHDA Achive Target</th>
												<th>STaRR Target</th>
												<th>STaRR Achive Target</th>
											</tr>
										</thead>

										<?php
										while ($row = $result->fetch_assoc()):?>
										
										<tr>
											<td><?php echo $row['month']; ?></td>
											<td><?php echo $row['tirange']; ?></td>
											<td><?php echo $row['tiname']; ?></td>
											<td><?php echo $row['titarget']; ?></td>
											<td><?php echo $row['achivetarget']; ?></td>
											<td><?php echo $row['starrtarget']; ?></td>
											<td><?php echo $row['starrachivetarget']; ?></td>

											</tr>
										<?php endwhile; ?>  

										<tfoot>
											<tr>
												<th>Month</th>
												<th>TI Ranges</th>
												<th>TI Name</th>
												<th>TSHDA Target</th>
												<th>TSHDA Achive Target</th>
												<th>STaRR Target</th>
												<th>STaRR Achive Target</th>
											</tr>
										</tfoot>

										<tbody>
														
										</tbody>
									</table>			
								</div>

						

							</div>

					</div>				

				</div>
			</main>

		</div>
	</div>

	<script src="../js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
				nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
			});
		});
	</script>

</body>

</html>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'month',
 ykeys:['tirange','titarget', 'achivetarget'],
 labels:['tirange','titarget', 'achivetarget'],
 hideHover:'auto',
 
});
</script>
<script>
function applyDataTable(){
  
  $('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			{
				extend: 'print',
				text: 'Print all'
			},
			{
				extend: 'print',
				text: 'Print current page',
				exportOptions: {
					modifier: {
						  page: 'current'
					}
				}
			}
		],
		select: true
	} );
  
  
}


$(document).ready(function() {
  $('#trigger-update').click(function(){
      $('#example').DataTable().destroy();
    
      setTimeout(function(){
        applyDataTable();
      },2000);
       
  });
  
  applyDataTable();
	
} );
</script>


