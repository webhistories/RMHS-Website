<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add News</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnewNews.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Title 1:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control"  title="title1" name="title1" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Title 2:</label>
						</div>
						<div class="col-lg-10">
						<input type="text" class="form-control" name="title2"  title="title2" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="date_published" title="date_published" required>
						</div>
					</div>

						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Text:</label>
						</div>
						<div class="col-lg-10">
						<textarea rows="4" cols="50" class="form-control" name="text"  title="text" required> </textarea>
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
