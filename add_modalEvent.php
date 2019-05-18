<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Event</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewEvent.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Event Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control"  title="title" name="title" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Start Date:</label>
						</div>
						<div class="col-lg-10">
						<input type="date" class="form-control" name="start_date"  title="start_date" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">End Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="end_date" title="end_date" required>
						</div>
					</div>


						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Status:</label>
						</div>
						<div class="col-lg-10">
							<select class="form-control" name="status"  title="status" required>
									<option value = ""> Select </option>
									<option value = "1"> Active </option>
									<option value = "0"> Inactive </option>

							</select>
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
