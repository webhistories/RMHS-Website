<?php if ($_POST) {
    $Grade = $_POST['Grade'];

    if ($Grade != '') {
      include('conn.php');
       $query1=mysqli_query($conn,"SELECT * FROM section WHERE level = $Grade");
       echo "<select name='Section'>";
       echo "<option value=''>Select</option>"; 
       while($row1=mysqli_fetch_array($query1)){
          echo "<option value='" . $row1['section'] . "'>" . $row1['section'] . "</option>";}
       echo "</select>";
     }
    else
    {
        echo  'ERROR';
    }
}
?>