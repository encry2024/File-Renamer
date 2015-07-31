<!DOCTYPE html>
<html>
<head>
	<title>Recording Renamer</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dropZoneJS/dist/dropzone.css">

	<nav class="navbar navbar-default navbar-default-2 point-border " style="background-color: #ffffff; border-radius: 0px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#dd4f14), to(#9b1f03)) no-repeat;border-width: 0px;">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand navbar-default-2" href="#">
				<span>
					<img alt="Brand" src="images/logo-nsi.png" style="margin: -1rem 0rem -1.5rem 7rem;">
				</span>
				<span>
					<label class="size-20" style="margin-top: -2rem; top: 3rem; color:white;">Inventory `5</label>
				</span>
			</a>
		</div>
	</div><!-- /.container-fluid -->
</nav>
</head>
<body>
	<div class="container">
		<div class="col-lg-3">
			<div class="btn-group-vertical col-lg-12" role="group">
				<a role="button" class="btn btn-default col-lg-12 text-left"><span class="glyphicon glyphicon-chevron-left"></span> Upload</a>
			</div>
		</div>

		<div class="col-lg-9 col-md-offset-center-2">
			<div class="panel panel-default col-lg-12" style="border-color: #ccc;">
				<br/>
					<div id="dropzone">
						<form action="file-upload.php" class="dropzone" id="dropZ">
						</form>
					</div>
				<br/>
			</div>
		</div>
	</div>
	<!--  -->
	<!-- JAVASCRIPT -->
	<script src="dropZoneJS/dist/dropzone.js"></script>
	
</body>
</html>