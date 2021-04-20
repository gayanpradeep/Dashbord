

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

	<title>Rathnapura</title>

	<link href="../css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="Rathnapura.php">
          <span class="align-middle">Rathnapura</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
					<a class="sidebar-link" href="Rathnapura.php">
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

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li> -->

					<li class="sidebar-item active">
						<a data-target="#forms" data-toggle="collapse" class="sidebar-link">
              <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
            </a>
						<ul id="forms" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="tidetails.php">TI Details</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="titarget.php"> Add Monthly Target</a></li>
						</ul>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="tables-bootstrap.html">
              <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
            </a>
           
					</li> -->

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

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<but
						ton class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
					</div>
				</form>

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
                <img src="img/avatars/starr.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
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

					<!-- <div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">TI Details Adding Form</h3>
								
								</div>
								<div class="card-body">
									<form method="POST" action="tidetails_process.php" enctype="multipart/form-data" >
										<div>
											<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Distric</label>
											<div class="col-sm-10">
												<select name="distric" id="distric" class="form-control" required/>
													<option >Kandy</option>
												</select>
											</div>		
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">Select TI-Range</label>
											<div class="col-sm-10">
												<select name="tirange" id="tirange" class="form-control" required/>
													<option >MANIKDIWELA</option>
													<option >WERALLAGAMA</option>
													<option >GALAGEDARA</option>
													<option >DANTHURE</option>
													<option >GANNORUWA</option>
													<option >WATTAPPOLA  (Relief)</option>
													<option >HANDESSA</option>
													<option >WATTEGAMA</option>
													<option >THELDENIYA</option>
													<option >ALAWATHUGODA</option>
													<option >HEWAHETA</option>
													<option >PUSSELLAWA</option>
													<option >GAMPOLA</option>
													<option >NAWALAPITIYA</option>
													<option >WELIGAMPOLA (Relief)</option>
													<option >PANVILATHANNA</option>
												</select>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-2 text-sm-right">TI Name</label>
											<div class="col-sm-10">
												<input type="tiname" id="tiname" name="tiname" class="form-control" placeholder="TI Name">
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label w-100">TI Image</label>
											<div class="col-sm-10">
												<input type="file" id="image" name="image">
											</div>
										</div>
										<div class="mb-3">
											
                                        </div>
										<button type="submit" name="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div> -->

                        <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Mothly Target</h5>
								</div>
								<div class="card-body">
									<form method="POST" action="titarget_process.php">
										<div class="mb-3 row">
											<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputEmail4">Distric</label>
												<div class="col-sm-10">
													<select name="distric" id="distric" class="form-control" required/>
														<option >Rathnapura</option>
													</select>
												</div>
											</div>
											<div class="mb-3 col-md-6">
												
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label" for="inputAddress">Select TI-Range</label>
											<div class="col-sm-10">
												<select name="tirange" id="tirange" class="form-control" required/>
													<option >Ayagama</option>
													<option >Balangoda</option>
													<option >Eheliyagoda</option>
													<option >Ellarawa</option>
													<option >Erathna</option>
													<option >Gallella </option>
													<option >Gileemale</option>
													<option >Imbulpe</option>
													<option >Kahawatta</option>
													<option >Kalawana</option>
													<option >Kiriella</option>
													<option >Kolonna</option>
													<option >Kukulegama</option>
													<option >Madampe</option>
													<option >Niwithigala</option>
													<option >Opanayaka</option>
													<option >Pelmadulla</option>
													<option >Pinnawala</option>
													<option >Pothupitiya</option>
													<option >Rakwana</option>
													<option >Rassagala</option>
													<option >Ratnapura</option>
													<option >Weddagala</option>
													<option >Weligepola</option>
													<option >Wewelwatta</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputAddress2">TI Name</label>
												<input type="tiname" id="tiname" name="tiname" class="form-control" id="inputAddress2" placeholder="TI Name" required/>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputAddress2">Select Month</label>
												<input type="month" id="month" name="month" class="form-control" id="inputAddress2" placeholder="Month/Year" required/>
											</div>
										</div>	
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputCity">TSHD TI Target</label>
												<input type="titarget" id="titarget" name="titarget" class="form-control" id="inputCity" placeholder="TSHDA Target" required/>
											</div>
											<div class="mb-3 col-md-4">
												<label class="form-label" for="inputCity">TSHD Achive Target</label>
												<input type="achivetarget" id="achivetarget" name="achivetarget" class="form-control" id="inputCity" placeholder=" TSHDA Achive Target" required/>
											</div>
											<div class="mb-3 col-md-2">
						
											</div>
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label" for="inputCity">STaRR Target</label>
												<input type="starrtarget" id="starrtarget" name="starrtarget" class="form-control" id="inputCity" placeholder="STaRR Target" required/>
											</div>
											<div class="mb-3 col-md-4">
												<label class="form-label" for="inputCity">STaRR Achive Target</label>
												<input type="starrachivetarget" id="starrachivetarget" name="starrachivetarget" class="form-control" id="inputCity" placeholder="STaRR Achive Target" required/>
											</div>
											<div class="mb-3 col-md-2">
						
											</div>
										</div>
							
										<button type="submit1" name="submit1" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-6">
							<div class="card">
								
								
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
								
								
							</div>
						</div>

						<div class="col-md-12">
							<div class="card">
							
								
							</div>
						</div>
					</div>

				</div>
			</main>

			<!-- <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer> -->
		</div>
	</div>

	<script src="../js/app.js"></script>

</body>

</html>