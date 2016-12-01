<form method="post" accept-charset="utf-8" action="/index.php/login/submit">

    <div class= "login_input">
        <!--<label for="name">用户名/ID</label>-->
        <input class="form-control" type="text" placeholder="请输入用户名" id="name" name="username"/>
        <br />
        <!--<label for="password">密码</label>-->
        <input class="form-control" type="password" placeholder="密码：至少6位" id="password" name="password"/>
        <br />
        <div class="account">
            <a href="#" >忘记密码</a>
            <a href="/index.php/register">注册</a>
        </div>
        <br/>
        <input class="btn" type="submit" id="submitButton" name="submit" size="30px" value="登录">

        <div id="message"></div>
    </div>
</form>
</div>

<script type="text/javascript" src="../../public/js/jquery-2.1.4.min.js"></script>
<script src="../../public/js/login.js"></script>
</body>
</html>