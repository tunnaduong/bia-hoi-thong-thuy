<?php
const DBNAME = "biahoithongthuy";
const DBCHARSET = "utf8mb4";
const DBUSER = "root";
const DBPASS = "";
const DBHOST = "localhost";
const BASE_URL = "https://bia-hoi-thong-thuy.net/";
const MAIL_USERNAME = "";
const MAIL_PASSWORD = "";
const ADMIN_USERNAME = "admin";
const ADMIN_PASSWORD = "Admin@123";

function route($url)
{
    return BASE_URL . $url;
}
