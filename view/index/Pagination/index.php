<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/css/pagina.css">
    <link rel="stylesheet" href="/static/bootstrap-4.6.0/css/bootstrap.css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="application/javascript" href="/static/bootstrap-4.6.0/js/bootstrap.min.js">
    <title>111</title>
</head>
<body>
    <div class="row no-gutters">
        <div class="col-md-3" id="pagin-life">
            <div class="pagina-life" id="pagin-lifeo">
                <a href="{:url('/index')}"><div class="pagin-life-to">返回首页</div>&nbsp;&nbsp;<i class="bi bi-box-arrow-in-left" style="font-size: 21px;"></i>&nbsp;</a>
                {volist name="classification" id="classification"}
                <ul class="pagin-ul-life text-center">
                    <a href="{:url('/index/Pagination/index',['pagin'=>$classification.id])}"><li class="pagin-li"><i class="bi bi-box-arrow-in-right" style="font-size: 17px;"></i>&nbsp;{$classification.title}</li></a>
                </ul>
                {/volist}
            </div>
        </div>
        <div class="col-md-9">
            <div class="pagin-right">

                {volist name="articleo" id="articleo"}
                <ul class="pagin-ul m-4">
                    <a href="{:url('/index/Article/index',['id'=>$articleo.id])}">
                        <li class="pagin-li-right"><i class="bi bi-box-arrow-in-right" style="font-size: 17px;"></i>&nbsp;{$articleo.title}</li>
                    </a>
                </ul>
                {/volist}
            </div>
        </div>
    </div>
<script>
    window.onload = windowHeight; //页面载入完毕执行函数
    function windowHeight() {
        var h = document.documentElement.clientHeight; //获取当前窗口可视操作区域高度
        var w = document.documentElement.clientWidth;
        var bodyHeight = document.getElementById("pagin-life"); //寻找ID为content的对象
        var bodyHeighto = document.getElementById("pagin-lifeo"); //寻找ID为content的对象
        bodyHeighto.style.height = (h)+  "px";
        bodyHeight.style.height = (h) + "px"; //你想要自适应高度的对象
        // width_Bottom.style.width =(w)+"px";待处理
    }
    setInterval(windowHeight, 500)
</script>
</body>
</html>