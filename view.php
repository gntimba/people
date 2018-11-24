<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>View People</title>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
	<script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="JS/bootstrap.js"></script>
	<script type="text/javascript" src="DataTables/datatables.js"></script>
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
					<li class="nav-item ">
						<a class="nav-link p-2 text-dark" href="index.php">Add People <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link p-2 text-dark" href="#">View People</a>
					</li>
				</ul>

			</div>
		</nav>
	</header>

	<div class="container">

		<h1 class="heading">Show People details Details</h1>
		<br>
		<br>
		<div class="form-group row">
			<label for="sort" class="col-sm-2 col-form-label">Sort Results</label>
			<div class="col-sm-5">

				<select id="sort" name="lead_status" class="form-control">
					<option value="" disabled selected>Sort Results</option>
					<option value="First_Name">First Name</option>
					<option value="Last_Name">Last Name</option>
					<option value="Birth_date">Birth Date</option>
					<option value="cellphone">Cellphone</option>
					<option value="email">email</option>
				</select>
			</div>
		</div>
		<div id="people"></div>
		

	</div>
	<script>
		$( document ).ready( function () {
			request( '' );
			$( 'select' ).on( 'change', function () {
				request( this.value );
			} );



		} );

		function request( value ) {
			$.ajax( {
				url: 'api/get_person.php?sort=' + value,
				success: function ( data, status ) {
					console.log( data );
					createTableByForLoop( data );

				},
				async: true,
				dataType: 'json'
			} );
		}

		function createTableByForLoop( data ) {
			var eTable = "<table id='table' class='table' style='width:100%'><thead><tr><th>First name</th><th>Last name</th><th>DOB</th><th>cellphone</th><th>email</th></tr></thead>";
			for ( var i = 0; i < data.table.length; i++ ) {
				eTable += "<tr>";
				eTable += "<td>" + data.table[ i ][ 'First_Name' ] + "</td>";
				eTable += "<td>" + data.table[ i ][ 'Last_Name' ] + "</td>";
				eTable += "<td>" + data.table[ i ][ 'Birth_date' ] + "</td>";
				eTable += "<td>" + data.table[ i ][ 'cellphone' ] + "</td>";
				eTable += "<td>" + data.table[ i ][ 'email' ] + "</td>";
				eTable += "</tr>";
			}
			eTable += "</tbody></table>";
			eTable += "<div class='pagination-container'><nav><ul class='pagination'></ul></nav></div>";
			$( '#people' ).html( eTable );

			var table = '#table'
			        $('.pagination').html('')
        var trnum = 0
        var maxRows = parseInt(10)
        var totalRows = $(table+' tbody tr').length
        $(table+' tr:gt(0)').each(function(){
            trnum++
            if(trnum > maxRows){
                $(this).hide()
            }
            if(trnum <= maxRows){
                $(this).show()
            }
        })
        if(totalRows > maxRows){
            var pagenum = Math.ceil(totalRows/maxRows)
            for(var i=1;i<=pagenum;){
				
                $('.pagination').append('<li class="page-item" data-page="'+i+'"><a class="page-link" href="#">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</a></li>').show();
            }
        }
			$(".pagination li:first").addClass("active");
			  $('.pagination li').on('click',function(){
            var pageNum = $(this).attr('data-page')
            var trIndex = 0;
            $('.pagination li').removeClass('active')
            $(this).addClass('active')
            $(table+' tr:gt(0)').each(function(){
                trIndex++
                if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                    $(this).hide()
                } else{
                    $(this).show()
                }
            })
        })
			
		}
	</script>
</body>

</html>