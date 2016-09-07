<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Blog</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
      <link rel="stylesheet" href="assets/stylesheets/form.css">
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col s12 m12 l12">
            <div class="card z-depth-4">
                <div class="card-heading">
                <h4 align="center">BLOGGING</h4>
                </div>

                <div class="card-content">
                    <div class="row">
                        <form class="col s12 l12 m12" action="confirmblog.php" method="post">
                        <div class="row">
                        <div class="input-field col s12">
                        <input id="username" type="text" name="username" class="validate">
                        <label for="username">Enter your name</label>
                        </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s12">
                        <input type="date" class="datepicker" name="date">
                        </div>
                        </div>
                         <div class="row">
                         <div class="input-field col s12">
                         <input type="date" class="datepicker" name="date">
                         </div>
                         </div>
                        <div class="row">
                         <div class="input-field col s12">
                          <textarea id="content" class="materialize-textarea" name="content"></textarea>
                           <label for="content">Content</label>
                         </div>
                         </div>
                        <div class="row">
                        <div class="col s12 l12 m12 " align="center" >
                        <button  class="btn waves-effect waves-light" type="submit" name="action">Publish
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