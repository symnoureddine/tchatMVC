<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <center><h3>Inscription</h3></center>
  <?php
   if (isset($message) and $status==0) {
     ?> <font color="red"> <?php echo $message; ?> </font>
     <?php
      }
     ?>
   
  <div class="container-fluid">
  <div class="row">
  	<div class="col-md-offset-3 col-md-6">
 	<form class=""  action="/user/addUser" method="POST">
 		<div  class="form-group">
 		<input type="text" name="login" placeholder="Login" class="form-control" required="true">
 	    </div>
 	    <div  class="form-group">
 		<input type="password" name="pass" placeholder="Mot de passe" class="form-control" required="true">
 	    </div>
 		<button name="submit" type="submit" class="btn btn-primary pull-right">Enregistrer</button>
 	</form>
  </div>
 </div>
</div>
</div>
 </body>
</html>