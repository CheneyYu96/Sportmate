<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="public/css/login.css" />
</head>
<body>
<div class="login_box">
    <!--            method="post" action="../bl/checkLogin.php"-->
    <div id="login">
        <h1>Sportmate</h1>
    </div>

    <div class= "login_input">
        <!--<label for="name">用户名/ID</label>-->
        <input class="form-control" type="text" placeholder="请输入用户名" id="name"/>
        <br />
        <!--<label for="password">密码</label>-->
        <input class="form-control" type="password" placeholder="密码：至少6位" id="password"/>
        <br />
        <div class="account">
            <a href="#" >忘记密码</a>
            <a href="../view/register.html">注册</a>
        </div>
        <br/>
        <input class="btn" type="submit" id="submitButton" size="30px" value="登录">

        <div id="message"></div>
    </div>
</div>

<script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
<script src="public/js/login.js"></script>
</body>
</html>