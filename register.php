
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
  body {
 background-image: linear-gradient( to right,white,#ECFF00);
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body >
    
  <div class="header">
  	<h2>E-Library Membership Registration</h2>
  </div>
	
  <form method="post" action="rcon.php">

    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="firstname" value="">
    </div>
    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="lastname" value="">
    </div>

    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" value="">
    </div>

    <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	
    <div class="input-group">
      <label>NIC No</label>
      <input type="text" name="nic" value="">
    </div>
   
    <div class="input-group">
      <label>Mobile No</label>
      <input type="text" name="mobile" value="">
    </div>
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="">
    </div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an Account <a href="login.php">Login in</a>
  	</p>
  </form>
</body>
</html>