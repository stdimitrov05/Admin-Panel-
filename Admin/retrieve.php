<?php
include_once './sql/select.php';
require './sql/config.php'
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
  
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <div class="float-right">
        <a href="./sql/export.php" class="btn btn-success"><i class="dwn"></i> Export</a>
    </div>
<table>
	  <tr>
	    <td>Sl No</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>City</td>
		<td>Email id</td>
		<td>Info</td>
		<td>Action</td>
		
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["userid"]; ?></td>
		<td><?php echo $row["first_name"]; ?></td>
		<td><?php echo $row["last_name"]; ?></td>
		<td><?php echo $row["city_name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["text"]; ?></td>
		<td><a href="./sql/update.php?id=<?php echo $row["userid"]; ?>">Update</a></td>
        <td><a href="./sql/delete.php?userid=<?php echo $row["userid"]; ?>">Delete</a></td>
       
      </tr>
			<?php
			$i++;
			}
			?>
		
</table>

 <?php
}
else
{
    $sql = "TRUNCATE Table employee ";
if (mysqli_query($con, $sql)) {
    
header('Location: ./home.php');echo '<script type="text/javascript">
console.log("Reset db successfully");
</script> ';
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
}
?>
 </body>
</html>