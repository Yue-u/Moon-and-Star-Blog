<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="author" content="order by dede58.com"/>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台登入</title>
<link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/css/style.css">
<link rel="stylesheet" type="text/css" href="/static/css/login.css">
<link rel="apple-touch-icon-precomposed" href="/static/images/icon.png">
<link rel="shortcut icon" href="/static/images/icon/favicon.ico">
<script src="/static/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="/static/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/static/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="/static/js/respond.min.js" type="text/javascript"></script>
  <script src="/static/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>
<body class="user-select">
<div class="container">
  <div class="siteIcon"><img src="/static/images/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用异清轩博客管理系统" draggable="false" /></div>
  <form action="" method="post" autocomplete="off" class="form-signin">
        <!--表单登入-->
    <h2 class="form-signin-heading">管理员登录</h2>
    <label for="userName" class="sr-only">用户名</label><br>
      <input type="text" id="username" name="username" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10">
    <label for="userPwd" class="sr-only">密码</label><br>
      <input type="password" id="password" name="password" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18"><br>
      <input type="text" name="yzm" id="yzm" placeholder="请输入验证码" class="form-control"><br>
      <div><img style="width: 160px; height: 45px;" src="{:captcha_src()}" alt="captcha" /></div><br>
      <a href="main.html"><button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">登录</button></a>
  </form>
  <div class="footer">
    <p><a href="/Home/index.html" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到异清轩博客 →</a></p>
  </div>
</div>
<script src="/static/bootstrap-4.6.0/js/bootstrap.min.js"></script>
<script>

$('#signinSubmit').click(function (){
    var username = $("#username").val();
    var password = $("#password").val();
    var yzm = $("#yzm").val();
    if (username==''){
        alert('用户名不能为空');
    }else {
        $.ajax({
            type:'POST',
            url:'',
            data:{
                'username':username,
                'password':password,
                'yzm':yzm
            },
            success:function (re){
                console.log(re);
                if (re=='101'){
                    alert('验证码错误');
                }else if (re=='102'){
                    alert('账号错误');
                }else if (re=='103'){
                    alert('密码错误');
                }else if (re=='100'){
                    $(window.location.href='/admin/main');
                }
            }
        })
    }
})
</script>
</body>
</html>
