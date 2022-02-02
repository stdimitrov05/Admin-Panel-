<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="./Admin/index.php">Admin</a>
<body>
    <form method="post" action="./Admin/sql/insert.php" >
        First name:<br>
        <input type="text" name="first_name">
        <br>
        Last name:<br>
        <input type="text" name="last_name">
        <br>
        City name:<br>
        <input type="text" name="city_name">
        <br>
        Email Id:<br>
        <input type="email" name="email">
        <br>
        Text:<br>
        <input type="text" name="text"><br>
        <input type="submit" name="save" value="submit">
       
    </form>
    </body>
    

</html>