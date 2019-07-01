<?php
$filename = $_GET['filename'];
include('resources/lib/phpqrcode/qrlib.php');
$iphost = getHostByName(getHostName());
$url = 'http://'.$iphost.'/download.php?image=';
QRcode::png($url.$filename, false, QR_ECLEVEL_H, 10);
