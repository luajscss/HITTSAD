<?php
include ('../cdn/config.php');

if ($debug == true){
	ini_set( 'error_reporting', E_ALL );
	ini_set( 'display_errors', true );
}else{
	ini_set( 'display_errors', false );
}
?>