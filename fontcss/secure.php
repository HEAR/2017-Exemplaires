<?php

// id du dossier
$lock_id = "9UIg412lKC0Fg78";


////////

header("Cache-Control: no-cache");
$domain = $_SERVER['SERVER_NAME'];
$check = true;
// if(!isset($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], $domain)===false){
//     // accès depuis l'extérieur...
//     $check = false;
// }

if (!$check || !isset($_GET['t'])) {
    @include_once("error.html");
    exit;
}

// mod GP
$type   = $_GET['t'];
$pos    = strrpos($type, '.')+1;
$ext    = substr($type, $pos, strlen($type)-$pos);

$file = "securedFonts_".$lock_id."/".$type;

$contentTypes = array();
$contentTypes['eot']    = "application/vnd.ms-fontobject";
$contentTypes['woff']   = "application/font-woff";
$contentTypes['woff2']  = "application/font-woff2";
$contentTypes['ttf']    = "application/x-font-ttf";
$contentTypes['svg']    = "image/svg+xml";

// We'll be outputting a eot, but this content type is fine
header('Content-type: '.$contentTypes[$ext]);

// It will be called 1234.eot, the name doesn't matter
header('Content-Disposition: attachment; filename="1234.'.$ext.'"');

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: '.$contentTypes[$ext]);
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}



