<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADIVARO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/Home.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ADIVARO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="headli"><a href="Home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothes <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="T-shirts.php">T-shirts &nbsp &nbsp &nbsp &nbsp &nbsp<img style="height:100px" src="photos/t-shirt.jpg"></a></li>
          <li><a href="Sweetshirts.php">Sweetshirt &nbsp &nbsp<img style="height:100px" src="photos/sweetshirt.jpg"></a></li>
          <li><a href="#">V-neck shirt &nbsp  <img style="height:100px" src="photos/V-neck.jpg"></a></li>
          <li><a href="tank.php"> Slouchy Top <img style="height:100px" src="photos/tank.jpg"></a></li>

         
        </ul></ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="signli" id="signup"><a ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

        <div id="signuppageB"style="background:black;width:2000px;height:1000px;right:0px;opacity:0.75;position:fixed;z-index:100"></div>
        <div id="signuppage" class="signuppage" style="background:rgb(27, 27, 83);box-shadow: 0px 15px 10px;position:fixed;border-radius:2%;z-index:101;bottom:40px;right:80px;width:1340px;height:660px;">
        <h1 style="color:rgb(255, 208, 0);margin-top:40px;margin-left:50px;text-shadow: 2px 2px black;position:absolute">ADIVARO </h1>

        <img src="photos/signup.jpg" class="signupphoto">
         <h1 style="color:#e45940;margin-top:100px;margin-left:100px;text-shadow: 2px 2px black">Sign UP</h1>

         <img src="photos/close.png" id="close" style="top:15px;right:15px;z-index:102;position:absolute;height:20px;width:20px">
        <form method="post" action="" > 

           <div class="input-group" style="box-shadow: 0px 5px 3px;position:absolute;top:150px;left:100px;width:350px" >
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Username..">
           </div>

           <div class="input-group" style="box-shadow: 0px 5px 3px;position:absolute;top:200px;left:100px;width:350px" >
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password..">
           </div>

           <div class="input-group" style="box-shadow: 0px 5px 3px;position:absolute;top:250px;left:100px;width:350px" >
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password..">
           </div>

           <div class="input-group" style="box-shadow: 0px 5px 3px;position:absolute;top:300px;left:100px;width:350px" >
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="email" class="form-control" name="email" placeholder="someone@example.com">
           </div>

           <div class="form-group" style="width:100px;position:absolute;top:350px;left:100px">
             <label style="color:white">Gender:</label>
             <select class="form-control" name="gender">
             <option> </option>
             <option>Female</option>
             <option>Male</option>
             <option>Other</option>
             </select>

             <h4><input type="submit" name="signupB" value="Sign Up" class="submitsignup"></h4>
           </div>

           <?php
         include 'Classes\signup&signin.php';

         if(isset($_POST['signupB']))
         {
          $username=$_POST['username'];
          $email =$_POST['email'];
          $password =$_POST['password'];
          $gender=$_POST['gender'];
           $user= new User;
           $error=$user->set_signup($username ,$email ,$password ,$gender);
           if(!empty($error))
           {
             echo $error;
           }
         }
         ?>

         </form>

         
      </div>
        <li class="loginli"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </ul>
  </div>
</nav>
<div class="chatbox" id="chatbox" style="background:white;box-shadow: 0px 7px 5px;position:fixed;border-radius:2%;z-index:99;bottom:120px;right:40px;width:320px;height:450px;">
<img src="photos/colorc.jpg" style="width:320px;height:200px;border-radius:2%"> 
<h1 style="color:White;position:absolute;top:5px;left:10px"> Hi there! <h1>
  <h4 style="color:gray;position:absolute;top:65px;left:10px"> We're here to answer any questions you have about using Website <h4>
  <div class="chatbox" id="chatbox" style="box-shadow: 0px 7px 5px;border-radius:3%;z-index:100;position:absolute;right:40px;width:250px;height:150px;bottom:150px;background:white">
  <h3 style="color:black;position:absolute;left:10px;bottom:65px">Start a conversation<h3>  
  <button type=button style="border-radius:30%;position:absolute;bottom:-20px;left:30px" class="btn btn-info btn-lg" > <span class="glyphicon glyphicon-send"></span> &nbsp &nbsp Conversation </button>
</div>
</div>

<button style="border-radius:50%;width:100px;position:fixed;bottom:20px;z-index:99;right:20px" class="btn btn-info btn-lg" id="chat"><img src="photos/chat.png "style="width:60px;"></button>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img style="height:600px" src="photo2.png " alt="Image">
        <div class="carousel-caption"style="color:black;bottom:5%;left:0%;">
          <h1>View our Awesome T-shirts <button type="button" class="btn btn-primary btn-lg">GET STARTED</button></h1>
          <h5>100% free•Easy setup•Fast payouts<h5>
        </div>      
      </div>

      <div class="item">
        <img style="height:600px" src="photos/wall2.jpg" alt="Image">
        <div class="carousel-caption" style="color:black;bottom:70%;left:0%">
          <h1>The easiest way to sell T-shirts online  <button type="button" class="btn btn-primary btn-lg">GET STARTED</button></h1>
          <h5>100% free•Easy setup•Fast payouts<h5>
        </div>    
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Enjoy buying our Shirts</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="photos/women.jpg" class="img-responsive" style="height:300px" alt="Image">
      <div class="carousel-caption">
      <a href=#>
        <div class="well well-sm">
          <h3 style="color:black">Women</h3>
</div>
</a>
        </div>    
    </div>
    
    <div class="col-sm-4" > 
      <img src="photos/Menen.jpg" class="img-responsive" style="height:300px" alt="Image">
      <div class="carousel-caption">
        <a href=#>
        <div class="well well-sm">
          <h3 style="color:black">Men</h3>    
    </div>
</a>
  </div>
</div>
<div class="col-sm-4" > 
      <img src="photos/kids.jpg" class="img-responsive" style="height:300px" alt="Image">
      <div class="carousel-caption">
        <a href=#>
        <div class="well well-sm">
          <h3 style="color:black">Kids</h3>    
    </div>
</a>
  </div>
</div>
<br>
</div>
<footer class="container-fluid ">
  <p>Contact With Us</p>
  <a href="https://www.facebook.com/"><img src="photos/facebook.png" class="social"></a>
<a href="https://www.twitter.com/"><img src="photos/twitter.png" class="social"></a>
<a href="https://mail.google.com/mail/"><img src="photos/gmail.png" class="social"></a>
<a href="https://www.instagram.com/?hl=en"><img src="photos/insagram.png" class="social"></a>
<a href="https://wordpress.com/create-blog/?utm_source=adwords&utm_medium=cpc&keyword=blog&creative=289908980634&campaignid=655562324&adgroupid=60055999404&matchtype=e&device=c&network=g&sgmt=gb&utm_source=adwords&utm_campaign=Google_WPcom_Search_Non_Desktop_RoW_en&utm_medium=cpc&keyword=blog&creative=289908980634&campaignid=655562324&adgroupid=60055999404&matchtype=e&device=c&network=g&targetid=aud-298466965340:kwd-21745101&locationid=21469&gclid=Cj0KCQiAurjgBRCqARIsAD09sg9nKCX6oCF7C8z4HoNnvZ5VcmFfTsLeO6l9D86J7VsLSBAiF3pEb4EaAgTsEALw_wcB"><img src="photos/blog.png" class="social"></a>
<a href="https://www.youtube.com/"><img src="photos/youtube.png" class="social"></a>
</footer>
<script>
$(document).ready(function () {
  $("#chatbox").hide();
       $("#chat").click(function () {
        if($("#chatbox").is(":hidden"))
         {
            $("#chatbox").show();
         }
        else
         {
            $("#chatbox").hide();
         }
       })
       $("#signuppage").hide();
       $("#signuppageB").hide();
       $("#signup").click(function () {
        $("#signuppage").show();
       $("#signuppageB").show();
       $("#close").click(function () {
        $("#signuppage").hide();
       $("#signuppageB").hide();
       })
       })


    });

</script>
</body>
</html>
