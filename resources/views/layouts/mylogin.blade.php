<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Halaman | {{ $title }}</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>	
		body {
		    font-family: Georgia, times new roman, Times, Merriweather, Cambria, Times, serif;
		    font-weight: 300;
		    font-size: 16px;
		    line-height: 2;
		    background: whitesmoke;
		    /* color: #777; */
		    color: #4d4b4b;
		}
		.centerDiv {
			height: 100vh;
			width: 100%;
		}
	</style>	
</head>
<body>
	<div class="container-fluid">	
    @yield('container')
	</div>	

	<!-- JavaScript Bundle with Popper -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>