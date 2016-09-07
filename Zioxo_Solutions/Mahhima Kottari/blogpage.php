<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Blogging</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
      <link rel="stylesheet" href="assets/stylesheets/form.css">
</head>
<body>

<h1 style="color:white; text-align: center;">Blogging</h1>
<div class="container-fluid">
    <div class="row">
    <?php
        $servername = "localhost";
         $username= "root";
         $dbname = "mahhima";
         $password = "";
                             // Create connection
         $conn = mysqli_connect($servername, $username);
         if (!$conn)
         {
           die("Connection failed: " . mysqli_connect_error());
         }
         else
         {
          mysqli_select_db($conn,"mahhima");
          $sql = "select * from blog ";
          $result=mysqli_query($conn, $sql);

          echo '<div class="container">'.
          '<div class="row">';

          $num = mysqli_num_rows($result);
          $i=1;
          $j=0;
          while($num>0)
          {
          echo '<div class="col s12 l12 m12">'.
           '<div class="card z-depth-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">'.
           '<div class="card-content">'.
           '<div class="container">'.
           '<div class="row">'.
           '<div class="col s12 l12 m12">';
           $sqli = "select * from blog limit $j,1";
            $resulti=mysqli_query($conn, $sqli);
            while ($row = mysqli_fetch_assoc($resulti))
             {
             echo $row['content'];
             }
           echo'</div>'.
           '</div>'.
           '</div>'.
           '</div>'.
           '</div>'.
           '</div>';
           $num--;
           $j++;
          }
          echo '</div>'.
          '</div>';




         }
?>

     </div>
 </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>