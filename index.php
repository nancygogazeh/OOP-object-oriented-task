<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
</head>
<body style="font-family: 'Sofia'; font-size: 20px;">
<!-- <div class="container"> -->
	<h1 class="page-header text-center">LOGIN PAGE</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		    <div class="login-panel panel panel-danger">
		        <div class="panel-heading">
		            <h3  style= "height:40px;" class="panel-title"><span class="glyphicon glyphicon-lock"></span> LOGIN
		            </h3>
		        </div>
		    	<div class="panel-body">
		        	<form style= "height:280px;" method="POST" action="login.php">
		            	<fieldset>
		                	<div class="form-group">
							<label for="name">User Name </label>
		                    	<input style= "height:50px;" class="form-control" placeholder="Type Username" type="text" name="username" autofocus required>
		                	</div>
		                	<div class="form-group">
							<label for="name">Password </label>
		                    	<input  style= "height:50px;" class="form-control" placeholder="Type Password" type="password" name="password" required>
		                	</div>
		                	<button style= "height:70px;" type="submit" name="login" class="btn btn-lg btn-danger btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
		            	</fieldset>
		        	</form>
		    	</div>
		    </div>
		    <?php
		    	if(isset($_SESSION['message'])){
		    		?>
		    			<div class="alert alert-info text-center">
					        <?php echo $_SESSION['message']; ?>
					    </div>
		    		<?php
 
		    		unset($_SESSION['message']);
		    	}
		    ?>
		</div>
	</div>
</div>
</body>
</html>