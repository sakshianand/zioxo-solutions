<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
     <link rel="stylesheet" href="assets/stylesheets/form.css">
</head>
<body>
<?php
if($_POST['username']=='mahimma'&& $_POST['password']=='mahimmakotarry')
{
echo '<h1 style="color:white; text-align: center;">Continue blogging by clicking here..</h1>'.
'<div class="container">'.
'<div class="row">'.
'<div class="col s12 m12 l12">'.
'<a href="blog.php"><div class="card">'.
'<div class="card-content z-depth-4" >'.
'<h2 align="center">Blog</h2>'.
'</div>'.
'</div></a>'.
'</div>'.
'<div>'.
'</div>'.
'</div>';
}
else
{
echo"error logging in";
}

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>