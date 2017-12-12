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
    
    <style>
        
        .container {
            margin-top: 120px;
        }
    
        #done,
        #allNotes,
        #notePad {
            display: none;
        }
        
        .buttons {
            margin-bottom: 20px;
        }
        
        textarea {
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5;
        }
        
    </style>
    

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
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="active"><a href="#">My Notes</a></li>
                   </ul>
                   <ul class="nav navbar-nav navbar-right">
                       <li class=""><a href="#">Logged in as <strong>username</strong></a></li>
                        <li class=""><a href="#">Log out</a></li>
                   </ul>
               </div>
           </div>
       </nav>
       
      <!--Container-->
      
      <div class="container">
          <div class="row">
              <div class="col-md-offset-3 col-md-6">
                  <div class="buttons">
                      <button type="button" id="addNote" class="btn btn-lg btn-info">Add Note</button>
                      <button type="button" id="editNote" class="btn btn-lg btn-info pull-right">Edit Note</button>
                      <button type="button" id="done" class="btn btn-lg button-green pull-right">Done</button>
                      <button type="button" id="allNotes" class="btn btn-lg btn-info">All Notes</button>
                  </div>
                  <div id="notePad">
                        <textarea rows="10"></textarea>
                  </div>
                  <div id="notes" class="notes">
                      <!-- Use Ajax code to retrieve notes from the db. -->
                  </div>
              </div>
          </div>
      </div>
       
<?php include("footer.php"); ?>
    
