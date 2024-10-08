<?php
session_start();
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true){
    header("Location: https://codingapp.net/login_page");
    exit;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'https://codingapp.net/Home/Projects/Websites/Light/style.css' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <link rel="icon" type="image/x-icon" href="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'https://codingapp.net/Signup/Logo_Black.ico' . '?token=' . $token;
            echo $baseUrl;
        ?>
    ">
    <title>Ambient Light</title>
</head>
<body>
    <div class="player">
        <video id="video" controls autoplay loop>
            <source src="https://rr2---sn-a5msenl7.googlevideo.com/videoplayback?expire=1722648554&amp;ei=ijOtZp64KrSghcIP3qTjqQw&amp;ip=102.215.12.253&amp;id=o-ABUggjMiPDsLt-VpCJH0_ikl8lapol5A04k77BF41MA6&amp;itag=247&amp;source=youtube&amp;requiressl=yes&amp;xpc=EgVo2aDSNQ%3D%3D&amp;bui=AXc671IIxkeyxD30rJJrVXfbW-ahlP3IwDqYxap2oMAXCgmhGvQzkpTGsqDwMFF7CRwgZjnaFWvDIHU9&amp;vprv=1&amp;mime=video%2Fwebm&amp;rqh=1&amp;gir=yes&amp;clen=133026755&amp;dur=715.833&amp;lmt=1666437920405672&amp;keepalive=yes&amp;c=ANDROID_CREATOR&amp;txp=6319224&amp;sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cbui%2Cvprv%2Cmime%2Crqh%2Cgir%2Cclen%2Cdur%2Clmt&amp;sig=AJfQdSswRAIgFQDP6jFxz9Vo0VfFlaaeyc2p_HffIwulGiog_qlSGtICIG-8Ymiak9Soqufpn-N1g9bmpxgzZA_mjsihEEp9tLCa&amp;rm=sn-0ofpgxq3x-ocvs7l&amp;rrc=79,80&amp;fexp=24350516,24350517,24350557&amp;req_id=3e521ae8d865a3ee&amp;redirect_counter=2&amp;cm2rm=sn-hc5k7e&amp;cms_redirect=yes&amp;cmsv=e&amp;mh=Tl&amp;mip=151.64.146.123&amp;mm=34&amp;mn=sn-a5msenl7&amp;ms=ltu&amp;mt=1722627475&amp;mv=D&amp;mvi=2&amp;pl=0&amp;lsparams=mh,mip,mm,mn,ms,mv,mvi,pl&amp;lsig=AGtxev0wRQIgGHykxEphQa01OlSq6WYxoCadcOmEJ92PtF8l9vmJtSsCIQDJgFB_ISHf08JyBh16u7jfWpwTLvTHxuQP5HRahivhyA%3D%3D" type="video/webm">
        </video>
        <canvas id="light"></canvas>
    </div>
    <div class="container">
        <button class="amb_l_btn_a">Activate Ambient Light</button>
        <button class="amb_l_btn_d">Deactivate Ambient Light</button>
    </div>
    <script src="
        <?php 
            $token = bin2hex(random_bytes(16));
            $baseUrl = 'https://codingapp.net/Home/Projects/Websites/Light/script.js' . '?token=' . $token;
            echo $baseUrl;
        ?>
        ">
    </script>
</body>
</html>