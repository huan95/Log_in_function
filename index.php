<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>

<style type="text/css">
    .login {
        height:180px; width:230px;
        margin:0;
        padding:10px;
        border:3px red solid;
        border-radius: 15px;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<form method="get" action="Input.php">
    <div class="login" style="margin-left: 500px">
        <h2>Login</h2>
        <input type="text" name="username" size="25"  placeholder="username" />
        <input type="password" name="password" size="25" placeholder="password" />
        <input type="submit" value="Sign in"/>
    </div>
</form>

</body>
</html>

