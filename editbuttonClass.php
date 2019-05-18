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
					$edit=mysqli_query($conn,"select * from class where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
					$faculty= $erow['fac_username'];

				?>
				<div class="container-fluid">
				<form method="POST" action="editClass.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Subject: </label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="Subject" class="form-control" value="<?php echo $erow['subject']; ?>" disabled>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Time Start:</label>
						</div>
						<div class="col-lg-10">
							<input type="time" name="TimeStart" class="form-control" value="<?php echo $erow['timeStart']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Time End:</label>
						</div>
						<div class="col-lg-10">
							<input type="time" name="TimeEnd" class="form-control" value="<?php echo $erow['timeEnd']; ?>">
							
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Room:</label>
						</div>
						<div class="col-lg-10">
						
							<input type="text" name="Room" class="form-control" value="<?php echo $erow['room']; ?>">
						</div>
					</div>

						
	
					</div>

							<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Faculty:</label>
						</div>
						<div class="col-lg-10">
							<?php
 include('conn.php');
$fac=mysqli_query($conn,"select * from faculty");
//$rowFac=mysqli_fetch_array($fac);
echo "<select name='Faculty' class = 'form-control'>";
while($rowFac=mysqli_fetch_array($fac)){
    echo "<option value='" . $rowFac['idnumber'] . "'>" . $rowFac['fname'] . "</option>";
}

echo "</select>";
							?>
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