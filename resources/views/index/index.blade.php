<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.7/aliplayer-min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    <title>直播间</title>
</head>
<body>
        <div style="width: 70%;height: 400px;border: 1px solid black;float: left;" class="prism-player" id="player-con"></div>
        <div style="width: 29%;height: 800px;float: right;">
                <div style="width: 99%;height: 600px;border: 1px solid black;">
                    <input type="button" value="大家说" style="width:49%;height:8%" class="speak">
                    <input type="button" value="粉丝贡献榜" style="width:49%;height:8%" class="fensi">
                </div>
                <input type="text" id="message" style="width:99%;margin-top:20px">
                <input type="button" value="发送" id="btn" style="width:33%;margin-left:33%;margin-top:20px">
        </div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
        <div  style="width: 100px;height: 100px;border: 1px solid black;float: right; margin:15px 15px 15px 15px" ></div>
</body>
<script>
    // var player = new Aliplayer({
    //     "id": "player-con",
    //     "source": "rtmp://youke.bianaoao.top/myfiestvideo/video?auth_key=1583072373-0-0-a6c51bdee40c8147e12cec60b84e9a6e",
    //     "width": "100%",
    //     "height": "500px",
    //     "autoplay": true,
    //     "isLive": false,
    //     "rePlay": false,
    //     "playsinline": true,
    //     "preload": true,
    //     "controlBarVisibility": "hover",
    //     "useH5Prism": true
    // }, function(player) {
    //     console.log("The player is created");
    // });
    //用户登录之后 获取用户名
    var username = prompt('请输入用户名');
    var ws = new WebSocket("ws://116.62.160.207:9502");
    // console.log(ws);
    ws.onopen = function(){
        var message = '{"type":"login","con":"' + username + '"}';
        ws.send(message);
    }

    ws.onmessage = function(res){
        var data = JSON.parse(res.data);
        if (data.is_me == 1 && data.type == 'login') {
            var con = "<p style='text-align:center'>尊敬的用户：" + data.username + "欢迎您的到来</p>";
        } else if (data.is_me == 0 && data.type == 'login') {
            var con = "<p style='text-align:center'>系统提示：" + data.username + "上线</p>";
        } else if (data.is_me == 1 && data.type == 'message') {
            var con = "<div style='width: 450px; height: 100px;' align='right'><p>来自您的消息</p><p></p><p>" + data.message + "</p></div>"
        } else if (data.is_me == 0 && data.type == 'message') {
            var con = "<div style='width: 300px; height: 100px;' alig='left'><p>来自" + data.username + "的消息</p><p></p><p>" + data.message + "</p></div>"
        } else if (data.is_me == 0 && data.type == 'loginout') {
            var con = "<p style='text-align:center'>系统提示：" + data.username + "离开了聊天室</p>";
        }
        $("#speak").text(res.data);
    }
    $(document).on('click', '#btn', function() {
        var con = $('#message').val();
        var message = '{"type":"message","con":"' + con + '"}';
        ws.send(message);
    });
</script>
</html>