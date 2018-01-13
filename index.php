<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesión</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">
		html {
		    position: relative;
		    min-height: 100%;
		}
		body {
		    margin: 0 0 50px; /* bottom = footer height */
		}
		footer {
		    position: absolute;
		    left: 0;
		    bottom: 0;
		    height: 50px; /* bottom = footer height */
		    width: 100%;
		}

		@media only screen and (min-width: 300px) {
		    .form_login {
		        margin-top: 30%;
		    }
		}

		@media only screen and (min-width: 700px) {
		    .form_login {
		        margin-top: 15%;
		    }
		}

		@media only screen and (min-width: 1000px) {
		    .form_login {
		        margin-top: 10%;
		    }
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="jumbotron col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 form_login">
				<h3 class="text-center">INICIO DE SESIÓN</h3>
				<div class="form-group input-group">
					<!--<label for="txtUser">User</label>-->
					<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
					<input type="text" class="form-control" id="txtUser" placeholder="User">
				</div>
				<div class="form-group input-group">
					<!--<label for="txtPsw">Password</label>-->
					<div class="input-group-addon"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></div>
					<input type="text" class="form-control" id="txtPsw" placeholder="Password">	
				</div>
				<div class="form-group text-center">
					<button class="btn btn-success">Entrar</button>
				</div>
			</div>
		</div>

		<footer class="footer">
	        <div class="text-center">
	            <h6 class="text-muted">Sebastian Gonzalez © Copyright</h6>
	        </div>
	    </footer>
	</div>
</body>
</html>