<?php
/*******************
 * Write by: eduardo
 * Date: 6/11/16
 * Time: 02:23 PM
 */
require('vendor/autoload.php');
require('core/core.php');

if(isset($_GET['view'])) {
    if (file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')){
        include('core/controllers/' . strtolower($_GET['view']) . 'Controller.php');
    }else{
        include('core/controllers/ErrorController.php');
    }
}else{
    include('core/controllers/HomeController.php');
}