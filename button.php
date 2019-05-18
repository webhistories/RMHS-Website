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
					<h5><center>Username: <strong><?php 
					echo $drow['username'];
					//echo $_SESSION['typeID']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleteUser.php?id=<?php echo $row['id']; ?>&typeID=<?php echo $_SESSION['typeID']; ?> " class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
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
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from users where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editUser.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Username:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Username" class="form-control" value="<?php echo $erow['username']; ?>">
							<input type="hidden" name="Id" class="form-control" value="<?php echo $erow['id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Password" class="form-control" value="<?php echo $erow['password']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">First Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Fname" class="form-control" value="<?php echo $erow['fname']; ?>">

							<input type="hidden" name = "typeID" value = "<?php echo $_SESSION['typeID']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Last Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Lname" class="form-control" value="<?php echo $erow['lname']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Type:</label>
						</div>
						<div class="col-lg-10">
						
							<select name="Type" class="form-control">
							<option value="<?php echo $erow['type'] ?>"><?php if($erow['type']==1) echo "Admin"; else if($erow['type']==2) echo "Faculty"; else if($erow['type']==3) echo "Student"; ?>

							</option>
							  <option value="1">Admin</option>
							  <option value="2">Faculty</option>
							  <option value="3">Student</option>
							
							</select>
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