<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Section</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewSection.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Section:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="Section" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Level:</label>
						</div>
						<div class="col-lg-10">
							 <select name="Level"  class = "form-control" required>
                  <option  selected="true" disabled>Choose grade/level</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                         <option value="10">10</option>
                </select> 
						</div>
					</div>

						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">School Year:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="Syear" required>
						</div>
					</div>
		
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
