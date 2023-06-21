<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Member login form </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
 html{
  background: url("3.jpg");
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
 
 }

body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
  
 

  
}

.content{
  width: 330px;
 
  border-radius: 10px;
  padding: 40px 30px;
  margin-top: 50px;
  box-shadow: -3px -3px 9px #920000,
              3px 3px 7px #920000;
 
}


.content .text{
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #920000;
  
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: #e0d2d2;
  border: 1px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: #FF5D00;
 
}


.field input::placeholder{
  color: #920000;
}
.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #ffffff;
}



button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: #920000;
  font-size: 18px;
  font-weight: 600;
  border: 2px solid #920000);
  border-radius: 8px;
  background: #FF5D00;
 margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
 
}
 
.content .or{
  color: rgba(255, 255, 255, 0.733);
  margin-top: 9px;
}
 
.icon-button{
  margin-top: 15px;
}
.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
   color: #920000;
 border-radius: 5px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.164);
    backdrop-filter: blur(10px);
}
.icon-button span.facebook{
  margin-right: 17px;

}
button:hover,
.icon-button span:hover{
  background-color: #FFDF00;
}
 
    </style>
</head>
<body>
  <center><b><FONT FACE="" size="50">E-Library </font></b></center>

    <center><IMG SRC="4.png" HEIGHT="200" WIDTH="100"></IMG></center>
<div class="content">
 <div class="text">Member Login Form</div>
  <form action="lcon.php" method="post">
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" id="username" name="username" placeholder="Username" required>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" id="password" name="password" placeholder="Password">
      
    </div>
    
    <button>Log in</button>
     
        
     


    </div>
  </form>
</div>
</body>


      

    

</html>