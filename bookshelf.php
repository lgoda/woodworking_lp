<?php
// open the file in a binary mode
$name = 'http://track.woodtask.com/visit';
$fp = fopen($name, 'rb');

//VISIT WEBSITE
$req = curl_init();
curl_setopt($req, CURLOPT_URL,"http://track.woodtask.com/visit");
curl_exec($req);

// send the right headers
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: January 01, 2013'); // Date in the past
header('Pragma: no-cache');
header("Content-Type: image/jpg");
header("Content-Length: " . filesize($name)); */

// dump the picture and stop the script
fpassthru($fp);
exit;
?>
