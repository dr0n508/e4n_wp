<?php

@session_start();
date_default_timezone_set("Europe/Kiev");
define("_ENVIRONMENT_", "prod", true);
define ("ROOT_DIR", dirname ( __FILE__ ) );
    
// Настройки сервера
switch (_ENVIRONMENT_) {
    case "dev":
        set_time_limit (120);
        @error_reporting ( E_ALL ^ E_NOTICE );
        @ini_set ( 'display_errors', true );
        @ini_set ( 'html_errors', false );
        @ini_set ( 'error_reporting', E_ALL ^ E_NOTICE );
        break;
    case "prod":
        set_time_limit (30);
        @error_reporting(null);
        @ini_set ( 'display_errors', false );
        @ini_set ( 'html_errors', false );
        @ini_set ( 'error_reporting', null );
        break;
    default:
        break;
}

if(!empty($_POST)) {
//отправляем на почту
    if(!$_POST['email']) { $_POST['email'] =  "info@english4now.com"; }
    if(!$_POST['subject']) { $_POST['subject'] =  "Заказ звонка"; }
    
    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    
    mail('info@english4now.com', $_POST['subject'], "Имя: ".  strip_tags($_POST['fio']). "<br>\n Телефон: ".strip_tags($_POST['tel']), $headers);
 
}

header("location: {$_SERVER['HTTP_REFERER']}"); exit;

?>