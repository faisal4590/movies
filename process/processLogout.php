<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 1:21 PM
 */

session_start();

$_SESSION=array(); 		//session_destroy(); array ke empty kore dilam

header("location:../index.php");