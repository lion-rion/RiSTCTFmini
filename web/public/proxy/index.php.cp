<?php
// X-Forwarded-For:を取得
if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else {
    $ip = $_SERVER["REMOTE_ADDR"];
}

if ($ip === "192.168.1.1") {
    // フラグを表示
    echo "Your IP is $ip\n";
} else {
    // それ以外ならば
    // その値を表示
    echo "Your IP is $ip\n";
}
?>
<body>
    <h1><?php $ip ?></h1>
</body>
