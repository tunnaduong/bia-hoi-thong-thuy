<?php
const DBNAME = "biahoithongthuy";
const DBCHARSET = "utf8mb4";
const DBUSER = "root";
const DBPASS = "";
const DBHOST = "localhost";
const BASE_URL = "https://bia-hoi-thong-thuy.net/";
function route($url)
{
    return BASE_URL . $url;
}
// key co the truyen success hoac errors
function flash($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:' . BASE_URL . $route . '?msg=' . $key);
    die;
}
