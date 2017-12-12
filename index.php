<?php include("header.php"); ?>
       
       <!--Jumbotron-->
       <div class="jumbotron" id="myContainer">
         <div class="container">
           <h1>Online Notes App</h1>
          <p>Your notes whenver you need them.</p>
          <p>Make your life easier, never forget what you need to know.</p>
          <button type="button" class="btn btn-lg button-green signup" data-target="#signupModal" data-toggle="modal">Sign up - it's free!</button>
         </div>
       </div>
       
       <!--Login form-->
       
       <form method="POST" id="loginform">       
            <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">
                        &times;
                      </button>
                      <h4 id="myModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                        <!--This div will be shown when someone logs in - comes from the php file-->
                        <div id="loginmessage">
                            
                        </div>
                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email</label>
                            <input type="email" name="loginemail" class="form-control" placeholder="Email Address" maxlength="50" id="loginemail"/>
                        </div>
                        <div class="form-group">
                            <label for="loginpassword" class="sr-only">Password</label>
                            <input type="password" name="loginpassword" class="form-control" placeholder="Enter your password" maxlength="30" id="loginpassword"/>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="rememberme" id="rememberme">
                                Remember me
                            </label>
                            <a class="pull-right" style="cursor: pointer;" id="forgotpassword" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">Forgot password?</a>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input class="btn button-green" name="login" type="submit" value="Login!">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancel
                        </button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                          Register
                        </button>
                    </div>
                  </div>
                </div>
            </div>
       </form>
       
       <!--Forgot password form-->
       
        <form method="POST" id="forgotpasswordform">       
            <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">
                        &times;
                      </button>
                      <h4 id="myModalLabel">Forgot password? Enter your email address</h4>
                    </div>
                    <div class="modal-body">
                        <!--This div will be shown when someone has forgotten their password - comes from the php file-->
                        <div id="forgotpasswordmessage">
                            
                        </div>
                        <div class="form-group">
                            <label for="forgotpasswordemail" class="sr-only">Email</label>
                            <input type="email" name="forgotpasswordemail" class="form-control" placeholder="Email Address" maxlength="50" id="forgotpasswordemail"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn button-green" name="forgotpassword" type="submit" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancel
                        </button>
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                          Register
                        </button>
                    </div>
                  </div>
                </div>
            </div>
       </form>
       
       
       
       <!--Signup form-->
        <form method="POST" id="signupform">       
            <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">
                        &times;
                      </button>
                      <h4 id="myModalLabel"> Sign up today and start using the Online Notes App!</h4>
                    </div>
                    <div class="modal-body">
                        <!--This div will be shown when someone signs up - comes from the php file-->
                        <div id="sigupmessage">
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" maxlength="30" id="username"/>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" maxlength="50" id="email"/>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Choose a password" maxlength="30" id="password"/>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword" class="sr-only">Confirm Password</label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" maxlength="30" id="confirmpassword"/>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input class="btn button-green" name="signup" type="submit" value="Sign up!">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancel
                        </button>
                    </div>
                  </div>
                </div>
            </div>
       </form>
       
<?php include("footer.php"); ?>