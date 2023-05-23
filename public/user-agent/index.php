<style>
    /* 上下中央にh1 */
    h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<?php

// user-agentを取得
$ua = $_SERVER['HTTP_USER_AGENT'];

//$uaがristbrowserならば
if ($ua === "rist-browser") {
    // フラグを表示
    echo "<h1>wow Nice!<br>The Flag is RiSTCTF{chrome_is_the_best_user-agent}<br>Your user-agent is $ua<br></h1>";
} else {
    // それ以外ならば
    // その値を表示
    echo "
    <h1>Sorry...<br><br>rist-browser is only allowed to access.<br>Your user-agent is $ua</h1>";
}

