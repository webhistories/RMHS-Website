<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from users where Id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Username: <strong><?php echo $drow['username']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleteUser.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit </h4></center>
                </div>
                <div class="modal-body">
				<?php
				 include('conn.php');
					$edit=mysqli_query($conn,"select * from students_grades where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editGrade.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Name: </label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Name" class="form-control" value="<?php echo $erow['fname']; ?>" disabled>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID Number:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="IdNumber" class="form-control" value="<?php echo $erow['idnumber']; ?>" readonly="readonly">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Subject:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Subject" class="form-control" value="<?php echo $erow['subject']; ?>" readonly="readonly">
							<input type="hidden" name = "Username" value = "<?php echo  $_SESSION['username']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
						<b> Grades </b>
							<label style="position:relative; top:7px;">1st Quarter:</label>
						</div>
						<div class="col-lg-10">
						<br><br>
							<input type="number" step = ".01" name="Grade1" class="form-control" value="<?php echo $erow['grade1']; ?>">
						</div>
					</div>

						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">2nd Quarter:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" step = ".01" name="Grade2" class="form-control" value="<?php echo $erow['grade2']; ?>">
						</div>
					</div>

				<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">3rd Quarter:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" step = ".01" name="Grade3" class="form-control" value="<?php echo $erow['grade3']; ?>">
						</div>
					</div>

						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">4th Quarter:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" step = ".01" name="Grade4" class="form-control" value="<?php echo $erow['grade4']; ?>">
						</div>
					</div>

						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Remarks:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Subject" class="form-control" value="<?php echo $erow['remarks']; ?>" disabled>
						</div>
					</div>

						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Final Rating:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="FinalGrade" class="form-control" value="<?php echo $erow['finalgrade']; ?>" disabled>

							<input type="hidden" name="Level" class="form-control" value="<?php echo $erow['level']; ?>">
							
							<input type="hidden" name="Section" class="form-control" value="<?php echo $erow['section']; ?>">
						</div>
					</div>

			
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->