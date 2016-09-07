<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$servername = "localhost";
  $username= "root";
 // Create connection
 $conn = mysqli_connect($servername, $username);
 if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
   mysqli_select_db($conn,"mahhima");
$content = mysqli_real_escape_string($conn, $_POST['content']);

 $sql = "insert into blog values('$content');";
if(! mysqli_query($conn, $sql))
    {
    echo "no data added";
    }
    else
    {
    echo "content added successfully";
    }

?>
</body>
</html>