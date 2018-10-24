<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"  >
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
   <?php
   if (isset($message) and isset($status)) {
        if ($status==1) {
      ?> <font color="green"> <?php echo $message;?> </font>
    <?php
    }}
    ?>


<div>Bienvenu <font color="blue"> <?php echo $username; ?> </font>
  <a  style="float: right;" href="/user/logout">Déconnexion</a></div>
<body>
<div class="row">
<div class="col-sm-6">
     <div class="p-3 mb-2 bg-secondary text-white">
  <center><h3>Chat</h3></center>
  <table class="table">
    <thead class="black white-text">
  	
  		<tr>
  			<th scope="col" bgcolor="">Utilisateur</th>
  			<th scope="col" bgcolor="">Date d'envoi</th>
  			<th scope="col" bgcolor="">Message</th>
  		</tr>
      </thead>
  <tbody>
  <?php
     foreach ($messages as $key => $value) {?>

      <tr>
   		<th><?= $value["username"] ?></th>
   		<th><?= $value["createdAt"] ?></th>
   		<th><?= $value["message"] ?></th>
   		</tr>
 
    
   <?php	 
   }
   ?>
   </tbody>
 </table>
</div>


<div  style="margin-top:200px;" class="p-3 mb-2 bg-info text-white">
  <center><h3>Message</h3></center>
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
  <form class=""  action="/message/registerMessage" method="POST">
    <div  class="form-group">
    <input type="text" name="msg" style="height: 70px;" placeholder="Message" class="form-control" required="true">
      </div>
    <button name="submit" type="submit" class="btn btn-primary pull-right">Envoyer</button>
  </form>
  </div>
 </div>
</div>
</div>

<div class="col-sm-6">
     <div class="p-3 mb-2 bg-secondary text-white">
 <center><h3>Voici la liste des utilisateurs Connectés :</h3></center>
  <table class="table">
    <tbody>
      <tr>
        <th bgcolor="">username</th>
      </tr>
  
  <?php
     foreach ($connected as $key => $value) {?>
      <tr>
      <th><font color="green"><?= $value["username"] ?></font></th>
      </tr>
   <?php   
   }
   ?>
   </tbody>
 </table>
</div>
</div>
</div>
</div>
</body>
</html>
