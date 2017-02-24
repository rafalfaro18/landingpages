<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700);
body {
    background: -webkit-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: -moz-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: -ms-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: -o-linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    background: linear-gradient(90deg, #FF512F 10%, #DD2476 90%);
    font-family: 'Open Sans', sans-serif!important;
}
.well{
    background-color:#fff!important;
    border-radius:0!important;
    border:none!important;
}

.well.login-box {
    width:300px;
    margin:0 auto;
}
.well.login-box legend {
  font-size:26px;
  text-align:center;
  font-weight:300;
}
.well.login-box label {
  font-weight:300;
  font-size:16px;
  
}
.well.login-box input[type="text"] {
  box-shadow:none;
  border-color:#ddd;
  border-radius:0;
}

.well.welcome-text{
    font-size:21px;
}

/* Notifications */

.notification{
    position:fixed;
    top: 20px;
    right:0;
    background-color:#FF4136;
    padding: 20px;
    color: #fff;
    font-size:21px;
    display:none;
}
.notification-success{
  background-color:#3D9970;
}

.notification-show{
    display:block!important;
}

/*Loged in*/
.logged-in{
  display:none;
}
.logged-in h1{
  margin:0;
  font-weight:300;
}
    </style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well login-box">

                <form action="login.php" method="post" name="log" id="log">
                    <legend>Login</legend>
                    <div class="form-group">
                        <label for="username-email">Username</label>
                        <input value='' id="usuario" name="usuario" placeholder="E-mail or Username" required type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" value='' placeholder="Password" required type="password" class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-danger btn-cancel-action">Cancel</button>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-success btn-login-submit"  value="Login" />
                    </div>
                </form>
                
            </div>
          <div class="logged-in well">
            <h1>You are loged in! <div class="pull-right"><button class="btn-logout btn btn-danger"><span class="glyphicon glyphicon-off"></span> Logout</button></div></h1>
          </div>
        </div>
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script  type="text/javascript" src=" http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>


<script type="text/javascript">
$(document).on('click', 'form button[type=submit]', function(e) {
	$("#log").validate({
ignore: ":hidden",
errorClass: "my-error-class",
validClass: "my-valid-class",
rules: {
 usuario: {
     required: true,
     minlength: 3

 },
 password: {
     required: true,
     minlength: 3
 },
 
},

});
    var isValid = $(e.target).parents('form').isValid();
    if(!isValid) {
      e.preventDefault(); //prevent the default action
    }
});

</script>
</body>
</html>