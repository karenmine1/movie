<?php
/**
 * OcimScripts
 *
 * @author Ali Munandar <alimunandar@gmail.com>
 */
ob_start();
session_start();
error_reporting(E_ALL ^ E_NOTICE);

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

require_once __DIR__.'/oc-content/server.php';