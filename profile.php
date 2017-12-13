<?php include("mainheader.php"); ?>

    <div class="container usertable">
          <div class="row">
              <div class="col-md-offset-3 col-md-6">
                <h2>General Account Settings</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr data-target="#updateusername" data-toggle="modal">
                            <td>Username</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updateemail" data-toggle="modal">
                            <td>Email</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updatepassword" data-toggle="modal">
                            <td>Password</td>
                            <td>hidden</td>
                        </tr>
                    </table>
                </div>
              </div>
          </div>
      </div>
      
      
      <!--Update Username Form-->
      
      <form method="POST" id="updateusernameform">       
            <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">
                        &times;
                      </button>
                      <h4 id="myModalLabel">Edit Username</h4>
                    </div>
                    <div class="modal-body">
                        <!--This div will be shown when someone logs in - comes from the php file-->
                        <div id="loginmessage">
                            
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Email</label>
                            <input type="text" name="username" class="form-control" maxlength="30" id="username" value="Username Value"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn button-green" name="updateusername" type="submit" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancel
                        </button>
                    </div>
                  </div>
                </div>
            </div>
       </form>
       
       <!--Update Email Form-->
       
       <form method="POST" id="updateemailform">       
            <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">
                        &times;
                      </button>
                      <h4 id="myModalLabel">Enter your new email address</h4>
                    </div>
                    <div class="modal-body">
                        <!--This div will be shown when someone signs up - comes from the php file-->
                        <div id="sigupmessage">
                            
                        </div>
                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" maxlength="50" id="email" value="Email Value"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn button-green" name="signup" type="submit" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancel
                        </button>
                    </div>
                  </div>
                </div>
            </div>
       </form>
       
       
       <!--Update Password Form-->
       
       <form method="POST" id="updatepasswordform">       
            <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">
                        &times;
                      </button>
                      <h4 id="myModalLabel">Update your password</h4>
                    </div>
                    <div class="modal-body">
                        <!--This div will be shown when someone signs up - comes from the php file-->
                        <div id="sigupmessage">
                            
                        </div>
                        <div class="form-group">
                            <label for="currentpassword" class="sr-only">Current Password</label>
                            <input type="password" name="currentpassword" class="form-control" maxlength="30" id="currentpassword" placeholder="Your current password"/>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Choose a new password" maxlength="50" id="password"/>
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm New Password</label>
                            <input type="password2" name="password2" class="form-control" placeholder="Confirm your new password" maxlength="30" id="password2"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn button-green" name="signup" type="submit" value="Submit">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                          Cancel
                        </button>
                    </div>
                  </div>
                </div>
            </div>
       </form>


<?php include("footer.php"); ?>