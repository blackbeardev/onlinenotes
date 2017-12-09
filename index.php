<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Notes</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
       <!--Nav Bar-->
       <nav role="navigation" class="navbar navbar-fixed-top navbar-custom">
           <div class="container-fluid">
               <div class="navbar-header">
                   <a href="" class="navbar-brand">Online Notes</a>
                   <button type="button" class="navbar-toggle" data-target="#navbar-collapse" data-toggle="collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
               </div>
               <div class="navbar-collapse collapse" id="navbar-collapse">
                   <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact</a></li>
                   </ul>
                   <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="#">Login</a></li>
                   </ul>
               </div>
           </div>
       </nav>
       
       <!--Jumbotron-->
       <div class="jumbotron" id="myContainer">
         <div class="container">
           <h1>Online Notes App</h1>
          <p>Your notes whenver you need them.</p>
          <p>Make your life easier, never forget what you need to know.</p>
          <button type="button" class="btn btn-lg button-green signup">Sign up - it's free!</button>
         </div>
          
       </div>
       
       <!--Footer-->
       <footer>
         <div class="container">
           <p>FlyingFoxWeb Copyright &copy; <?php echo date("Y"); ?></p>
         </div>
       </footer>
   
   
   
   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>