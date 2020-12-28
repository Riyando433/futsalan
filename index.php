<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Futsalan online booking system new</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<?php
	include('backend/dbconfig/connect.php');
	
	$query_jenis = "SELECT * FROM jenis";
	$query_lapangan = "SELECT * FROM lapangan";
	$jenis = $db->query($query_jenis);
	$lapangan = $db->query($query_lapangan);

?>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Sewa lapangan</h1>
						</div>
						<form>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input name='Nama' class="form-control" type="text" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input name='Email' class="form-control" type="email" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input name="No_telp" class="form-control" type="tel" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Jenis</span>
								<select name ='jenis' class="form-control">
									<?php
									 while ($j=$jenis->fetch_assoc()){
										echo "<option value='".$j['id_jenis']."'>".$j['jenis']."</option>";
									 }
									?>	
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-group">
								<span class="form-label">Nama Lapangan</span>
								<select name='lapangan' class="form-control">
								<?php
									 while ($j=$lapangan->fetch_assoc()){
										echo "<option value='".$j['id_lapangan']."'>".$j['Nama']."</option>";
									 }
									?>	
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Tanggal main</span>
										<input name='Tgl_sewa' class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Jam</span>
												<select name='jam' class="form-control">
												<?php
													for ($i=1; $i<25; $i++){
														echo "<option value ='".$i."'>".$i."</option>";
													}
												?>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Durasi (jam)</span>
												<input name='durasi' class="form-control" type="text"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Booking</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>