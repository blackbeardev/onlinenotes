<?php include("mainheader.php"); ?>
       
      <!--Container-->
      
      <div class="container containerMain">
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
    
