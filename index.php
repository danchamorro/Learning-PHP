<?php

$name = "Dan";
$age = 30;
define("NAME", "Joe");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My first PHP File</title>
</head>

<body>
    <h1> User Profile Page</h1>
    <div><?php echo $name; ?></div>
    <div><?php echo NAME; ?></div>

</body>

</html>