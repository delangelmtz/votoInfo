<?php

//desarrollo pc emdelangel
$host 		= 'localhost';
$DBuser		= 'root';
$DBpassw	= '';
$DB	        = 'votoinfo';

//producción
// $host 		= '192.185.4.143';
// $DBuser		= 'notland_votoInfo';
// $DBpassw	= 'notland';
// $DB	        = 'notland_votoInformado';

try {
  $db = new PDO('mysql:host='.$host.';dbname='.$DB, $DBuser, $DBpassw,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(PDOException $ex) {
  echo $ex->getMessage();
}
?>
