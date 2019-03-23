<?php
/**
 * @package    DEVELOPMENT OF E-LEARNING SYSTEM IN FUNDAMENTALS OF ACCOUNTANCY, BUSINESS AND MANAGEMENT 1 FOR SENIOR
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    GNU General Public License version 2 or later; see licensing/GPL LICENSE.txt
 */

// Data Base Config file
if($_SERVER['SERVER_ADDR']=="8.8.8.8"){
    // Production config DB
    define('HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','password');
    define('DB_NAME','notre_elearning');
    define('DB_DRIVER','mysql');
    define('CHARSET','utf8');
}
else{
    // Developer server
    define('HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','notre_elearning');
    define('DB_DRIVER','mysql');
    define('CHARSET','utf8');
}
$con = mysqli_connect(HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("ERROR");

?>
