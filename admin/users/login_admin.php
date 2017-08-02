<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Calm breeze login screen</title>



    <link rel="stylesheet" type="text/css" href="<?php echo URL_BANVE_ADMIN ?>css/styles_login_admin.css" media="all" />
    <script type="text/javascript" src="<?php echo URL_BANVE_ADMIN?>js/login_admin.js"></script>


</head>

<body>
<div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>

        <form class="form" action="?action=loginAction" method="post">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button type="submit" id="login-button">Login</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>
