<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <title>Chuck Norris</title>
  	</head>
	<body>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  		<a class="navbar-brand" href="#">Chuck Norris Jokes</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/index.php" ? "active" : "" ?>" href="/">Home</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/register.php" ? "active" : "" ?>" href="/register">Register</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/login.php" ? "active" : "" ?>" href="/login">Login</a>
                    ?>
	    		</div>
	  		</div>
		</nav>