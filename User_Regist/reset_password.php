<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form class="form" action="reset_password.php" method="post">
    <h1>R E S E T &nbsp; Y O U R <br> P A S S W O R D</h1>

	   <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
		<?php endif; ?>
		<br>
        <br>
 	  <div class="form-field">
 	  	  <label>Password</label>
 	  	  <input type="password" name="password" class="input">
 	  	  <div class="border-line">
 	  	  </div>
 	  </div>
       <div class="form-field">
 	  	  <label>Password Confirm</label>
 	  	  <input type="password" name="passwordConf" class="input">
 	  	  <div class="border-line">
 	  	  </div>
 	  </div>
 	  <div class="form-field">
			 <button type="submit" class="button" style="font-family: 'Ubuntu', sans-serif; font-size: 15px;" name="reset-password-btn">
             R E S E T &nbsp; P A S S W O R D</button>
	   </div>
 </form>