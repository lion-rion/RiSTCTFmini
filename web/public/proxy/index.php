<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    /* 上下中央にh1 */
    h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<body>
    <?php
    // X-Forwarded-For:を取得
    if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $ip = $_SERVER["REMOTE_ADDR"];
    }

    if ($ip === "192.168.1.1") {
        // フラグを表示
        echo "<h1>wow Nice!<br>The Flag is RiSTCTF{x-forwarded-for}<br>Your IP is $ip<br></h1> ";
    } else {
        // それ以外ならば
        // その値を表示
        echo "
        <h1>Sorry...<br><br>192.168.1.1 is only allowed to access.<br>Your IP is $ip</h1>";
    }
    ?>
</body>

</html>

