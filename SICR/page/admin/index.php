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
.my-error-class {
    color:#FF0101;
    font-size: 15px;
}
.my-valid-class {
    color:#1F9E2E;
    font-size: 15px;
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
                        <input type="text" id="usuario" name="usuario" placeholder="E-mail or Username" autocomplete="off" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" required class="form-control" />
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-danger btn-cancel-action">Cancel</button>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-success btn-login-submit" value="Login" />
                    </div>
                </form>
                
            </div>
          <div class="logged-in well">
            <h1>You are loged in! <div class="pull-right"><button class="btn-logout btn btn-danger"><span class="glyphicon glyphicon-off"></span> Logout</button></div></h1>
          </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script  type="text/javascript" src=" http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript">
	//ENVIAR FORM
$(document).ready(function () {
$("#log").validate({
errorClass: "my-error-class",
validClass: "my-valid-class",
rules: {
 
 password: {
     required: true,
     pwcheck: true,
     minlength: 8
 },
 usuario: {
     required: true,
     minlength: 3,
 },
},
submitHandler: function (form) {
 /*$.ajax({
     type: "POST",
     url: "senderman.php",
     data: $(form).serialize(),
     success: function () {
         $(form).html("<div id='message'></div>");
         $('#message').html("<h2>Your request is on the way!</h2>")
             .append("<p>someone</p>")
             .hide()
     }
 });
}
 return false; // required to block normal submit since you used ajax*/
}
});
});
</script>
</body>
</html>