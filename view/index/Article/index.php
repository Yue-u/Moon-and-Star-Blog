<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/css/article.css">
    <link rel="stylesheet" href="/static/bootstrap-4.6.0/css/bootstrap.css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="application/javascript" href="/static/bootstrap-4.6.0/js/bootstrap.min.js">
    {volist name="article" id="article"}
    <title>Yue-{$article.title}</title>
</head>
<body>
    <div class="row no-gutters" id="article">
        <!--左侧-->
        <div class="col-md-4 article-home">
            <div class="article-life">
                <div class="article-life-l1">
                    <a href="{:url('/index/Pagination/index',['pagin'=>$article.classification])}"><span class="m-3 article-life-to" style="display: inline-block;">返回分类&nbsp;&nbsp;<i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i></span></a>
                    <span id="article-life" class="article-life-leng"></span>
                </div>
                <div class="article-life-tu m-3">
                    <ul class="m-4 article-life-l2">
                        <h4 style="text-align: center;margin-bottom: 20px;margin-top: 45px;"><i class="bi bi-signpost" style="font-size: 28px"></i>&nbsp;{$article.title}</h4>
                        <li class="article-li"><i class="bi bi-eye"></i>&nbsp;浏览量&nbsp;:&nbsp;{$article.Pageviews}</li>
                        <li class="article-li"><i class="bi bi-pencil-square"></i>&nbsp;简介&nbsp;:&nbsp;{$article.Introduction}</li>
                        <li class="article-li"><i class="bi bi-bookmarks"></i>&nbsp;标签&nbsp;:&nbsp;{$article.label}</li>
                        <li class="article-li"><i class="bi bi-journal-bookmark"></i>&nbsp;分类&nbsp;:&nbsp;{$pagination.title}</li>
                        <li class="article-li" style="padding-bottom: 14px;"><i class="bi bi-emoji-wink"></i>&nbsp;喜欢:&nbsp;&nbsp;{$article.like}</li>
                        {/volist}
                    </ul>
                </div>
                <div style="text-align: center">留空，暂时想不到</div>
            </div>
        </div>
        <!--右侧-->
        <div class="col-md-8">
            <div class="m-5">
                <span class="article-right text-center">{$article.title|raw}</span>
            </div>
            <div class="article-conten">
                <div>{$article.content}</div>
            </div>
        </div>
    </div>
    <script>
        window.onload = windowHeight; //页面载入完毕执行函数
        function windowHeight() {
            var h = document.documentElement.clientHeight; //获取当前窗口可视操作区域高度
            var w = document.documentElement.clientWidth;
            var bodyHeight = document.getElementById("article"); //寻找ID为content的对象
            var article =document.getElementById('article-life')
            var articleso = document.getElementById('article-life-l1')
            var divTo_oeu = document.getElementById("divTo_oeu");//寻找增加Id
            var width_Bottom = document.getElementById("width_Bottom");
            bodyHeight.style.height = (h) + "px"; //你想要自适应高度的对象
            article.style.height = (h-4) + "px";

            // width_Bottom.style.width =(w)+"px";待处理
        }
        setInterval(windowHeight, 500)//每半秒执行一次windowHeight函数
    </script>
</body>
</html>