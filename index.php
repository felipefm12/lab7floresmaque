<html>
    <?php
        include("php/funciones.php");
    ?>
    <head>
            <link type="text/css" rel="stylesheet" href="css/login.css" >
    </head>
    <body>
        <form method="post" action="login.php">
            <div class="login">
                <div class="login-screen">
                    <div class="app-title">
                        <h1>Login</h1>
                    </div>

                    <div class="login-form">
                        <div class="control-group">
                        <input type="text" class="login-field" name="usuario" placeholder="username" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="control-group">
                        <input type="password" class="login-field" name="password" placeholder="password" id="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>

                        <input class="btn btn-primary btn-large btn-block" type="submit" value="Enviar">
                        <a class="login-link" href="#">Lost your password?</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
<html>;