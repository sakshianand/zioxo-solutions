<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="assets/stylesheets/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<h1 style="color:white; text-align: center;">Login</h1>
<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card z-depth-4">
                <div class="card-heading">
                <h4 align="center">Please enter the following details to login:</h4>
                </div>

                <div class="card-content">
                    <div class="row">
                        <form class="col s12 l12 m12" action="confirmlogin.php" method="post">
                        <div class="row">
                        <div class="input-field col s12">
                        <input id="username" type="text" name="username" class="validate">
                        <label for="username">Username</label>
                        </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s12">
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Password</label>
                        <div class="row">
                        <div class="col s12 l12 m12 " align="center" >
                        <button  class="btn waves-effect waves-light" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                        </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
 </div>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>