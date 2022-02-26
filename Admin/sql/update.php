<?php

include_once 'config.php';
session_start();

$sql = "SELECT * FROM employee ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if (count($_POST) > 0) {
    $id = $_POST['userid'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $city = $_POST['city_name'];
    $adress = $_POST['email'];
    $text = $_POST['text'];
    $sql = "UPDATE employee set userid='$id', first_name='$firstName', last_name='$lastName',
     city_name='$city' ,email='$adress',text='$text' WHERE userid='$id'";
    mysqli_query($con, $sql);
    header('Location: ../retrieve.php');
}

?>
<html>

<head>
    <title>Update Employee Data</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div><?php echo '<script type="text/javascript">
    console.log("Update data successfully");
</script> ';
                ?>
        </div>
        <div style="padding-bottom:5px;">
            <a href="../retrieve.php">Employee List</a>
        </div>
        Client ID: <br>
        <input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
        <input type="text" name="userid" value="<?php echo $row["userid"]; ?>">
        <br>
        First Name: <br>
        <input type="text" name="first_name" class="txtField" value="<?php echo $row["first_name"]; ?>">
        <br>
        Last Name :<br>
        <input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
        <br>
        City:<br>
        <input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
        <br>
        Email:<br>
        <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
        <br>
        Info:<br>
        <input type="text" name="text" class="txtField" value="<?php echo $row['text']; ?>">
        <input type="submit" name="submit" value="Update">

    </form>
</body>

</html>