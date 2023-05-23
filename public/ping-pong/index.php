<?php
if (isset($_GET['ip'])) {
    $ip_address = $_GET['ip'];

    if (strlen($ip_address) > 16) {
        echo "Error! IP is too long.";
        exit;
    }

    if (preg_match('/[!@#$%\^&*()\-_+=\[\] {}\'";:,:?~\\\\]/', $ip_address)) {
        echo "Error! Your request is filtered!";
        exit;
    }

    $cmd = "sh -c 'ping -c 1 " . $ip_address . "' 2>&1 >/dev/null; true";
    $stderr = shell_exec($cmd);

    if ($stderr != "") {
        echo "Error! " . $stderr;
        exit;
    }

    echo "Your IP is in a good state!";
} else {
    echo "?ip=[your_ip]<br>\n
    <a href='./?ip=127.0.0.1'>127.0.0.1にpingを送る</a>";
}
