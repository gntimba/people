<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Add People</title>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
	<script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.js"></script>
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>



<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white border-bottom shadow-sm">
			<a class="navbar-brand p-2 text-dark" href="#">PEOPLE</a>
			<button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link p-2 text-dark" href="#">Add People <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-2 text-dark" href="#">View People</a>
					</li>
				</ul>

			</div>
		</nav>
	</header>

	<div class="container">

		<h1 class="heading">Capture person Details</h1>
		<br>
		<br>
		<form id="form" method="post" action="API/add.php">

			<div class="form-group row">
				<label for="firstName" class="col-sm-2 col-form-label">First Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="firstName" placeholder="First Name">
				</div>
			</div>
			<div class="form-group row">
				<label for="LastName" class="col-sm-2 col-form-label">Last Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="LastName" placeholder="Last Name">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>
			<div class="form-group row">
				<label for="date" class="col-sm-2 col-form-label">Date Of Birth</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="date">
				</div>
			</div>
			<div class="form-group row">
				<label for="cellular" class="col-sm-2 col-form-label">Cell Phone</label>
				<div class="col-sm-10">
					<input type="tel" class="form-control" id="cellular" placeholder="Cell Phone Number">
				</div>
			</div>
			<center><input type="submit" id="submit" class="btn btn-dark" value="Add Person"/>
			</center>
	<div style="display: none" class="alert alert-success" id='message'></div>
	<div style="display: none" class="alert alert-danger" id='error'></div>
<div id="loading" style="display: none">
	<center><img src="img/Ripple-0.7s-200px.svg" alt=""/>
	</center>
</div>


		</form>
	</div>

	<script>
		$( document ).ready( function () {
			$( '#form' ).submit( function ( event ) {

				event.preventDefault();

				$( "#loading" ).show();
				//$( "#form" ).hide();

				$.ajax( {
					url: $( this ).attr( "action" ),
					type: $( this ).attr( "method" ),
					dataType: "json",
					data: new FormData( this ),
					processData: false,
					contentType: false,
					success: function ( data, status ) {
						console.log( data )
						$( "#loading" ).hide();
						//$( "#form" ).show();
						if ( data.feedback[ 1 ] == true ) {
							$( '#message' ).html( data.feedback[ 0 ] );
							$( '#message' ).show();
							$( '#message' ).fadeOut( 5000 );

						} else {
							$( '#error' ).html( data.feedback[ 0 ] );
							$( '#error' ).show();
							$( '#error' ).fadeOut( 5000 );

						}
						$( "#form" )[ 0 ].reset();
					},
					error: function ( xhr, desc, err ) {


					}
				} );
			} );
		} );
	</script>
</body>

</html>