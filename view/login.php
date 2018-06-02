<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="http://vladmaxi.net/developer/lesson75/demo/15/css/style.css" media="screen" type="text/css">
    <link rel="icon" href="https://png.icons8.com/nolan/1600/" type="image/x-icon">
    <link rel="shortcut icon" href="https://png.icons8.com/nolan/1600/login-rounded-right.png" type="image/x-icon">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


<div class="clr"></div>


<div id="login-form">
    <h1>Авторизация</h1>
    <fieldset>
        <form  id="user" class="form-signin" method="POST" action="login.php">
            <input type="email" id="login" name="login" placeholder="Login" required="">
            <input type="password" id="password" name="password" placeholder="Password" required="">

            <input type="submit" value="Войти">
            <footer class="clearfix">

            </footer>
        </form>
    </fieldset>
</div>


</body>
</html>