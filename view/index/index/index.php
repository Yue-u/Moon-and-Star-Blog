<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/css/home-life.css">
    <link rel="stylesheet" href="/static/bootstrap-4.6.0/css/bootstrap.css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="application/javascript" href="/static/bootstrap-4.6.0/js/bootstrap.min.js">
    <title>Document</title>
</head>
<body>
<!--首页左侧分类-->

<div class="home-life row no-gutters" id="divContent">
    <div class="col-md-2 to-oeu"id="divTo_oeu">
        <li class="li-to">
            {volist name="listo" id="boj"}
            <a href="{:url('/index/Pagination/index',['pagin'=>$boj.id])}"><ul class="ui-to">{$boj.ico|raw}&nbsp{$boj.title}</ul></a>
            {/volist}
        </li>
        <div class="home-link-life m-4">
            <span>友情链接&nbsp&nbsp↓</span>
            {volist name="linko" id="link"}
            <ul class="mt-3 link-ul">
                <a href="{$link.link}"><span><i class="bi bi-link-45deg"></i>&nbsp;{$link.title}&nbsp:&nbsp<span>{$link.access}</span></span></a>
            </ul>
            {/volist}
        </div>
    </div>
    <!--blog右侧部分-->
    <div class="col-md-10" >
        {volist name="systuo" id="systeo"}
        <div class="home-right-top text-center">{$systeo.title}</div>
        {/volist}
        {volist name="articleo" id="article"}
        <div class="row no-gutters">
            <div class="col-md-4 m-4 ml-5">
                <a href="{:url('/index/Article/index',['id'=>$article.id])}"><span class="home-right-life"><i class="bi bi-box-arrow-in-right" style="font-size: 16px;"></i>&nbsp;{$article.title}</span></a>
            </div>
            <div class="col-md-2 m-4 home-right-life">Go&nbsp;<i class="bi bi-arrow-right" style="font-size: 17px;"></i></div>
            <div class="col-md-4 home-right-life m-4"><i class="bi bi-pen"></i>&nbsp;{$article.content}</div>
        </div>
        {/volist}
        <div class="ml-5 page-butt">{$articleclass|raw}</div>
    </div>
    </div>
        <div id="width_Bottom">
            {volist name="systuo" id="system"}
            <div class="home-bottom pl-5">
                <span>{$system.ownership}</span>
            </div>
            {/volist}
        </div>
    </div>
        <div class="homg-yan">
            <p class="hitokoto"></p>
            <p class="from"></p>
        </div>
</div>
</body>
<script>
    // js动态控制高度
    window.onload = windowHeight; //页面载入完毕执行函数
    function windowHeight() {
        var h = document.documentElement.clientHeight; //获取当前窗口可视操作区域高度
        var w = document.documentElement.clientWidth;
        var bodyHeight = document.getElementById("divContent"); //寻找ID为content的对象
        var divTo_oeu = document.getElementById("divTo_oeu");//寻找增加Id
        var width_Bottom = document.getElementById("width_Bottom");
        bodyHeight.style.height = (h) + "px"; //你想要自适应高度的对象
        divTo_oeu.style.height = (h-100) +"px";
        // width_Bottom.style.width =(w)+"px";待处理
    }
    setInterval(windowHeight, 500)//每半秒执行一次windowHeight函数
    //高度结束
    //一言
    window.onload=function () {
        var hitokoto = document.querySelector('.hitokoto');
        var from = document.querySelector('.from');
        update();
        function update() {
            gethi = new XMLHttpRequest();
            gethi.open("GET","https://v1.hitokoto.cn/?c=a");
            //这里选择类别，详见官方文档
            gethi.send();
            gethi.onreadystatechange = function () {
                if (gethi.readyState===4 && gethi.status===200) {
                    var Hi = JSON.parse(gethi.responseText);
                    hitokoto.innerHTML = Hi.hitokoto;
                    from.innerHTML = "出自： <b>" + Hi.from + "</b>"; //可自定义输出格式
                }
            }
        }
    }
</script>
</html>