<?php
$sourceDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'source' . DIRECTORY_SEPARATOR . 'public';
if (!file_exists($sourceDir . DIRECTORY_SEPARATOR . $_SERVER['REQUEST_URI'])) {
    $_GET['_url'] = $_SERVER['REQUEST_URI'];
    require_once($sourceDir . DIRECTORY_SEPARATOR . 'index.php');
}
else {
    return false;
}