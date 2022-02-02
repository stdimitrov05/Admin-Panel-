<?php
session_start();
require('config.php');
$sql = "DELETE FROM employee WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
    console.log("Record deleted successfully");
</script> ';
header('Location: ../retrieve.php');

} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>