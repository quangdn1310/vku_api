<?php
// header('Access-Control-Allow-Origin: *')
// header('Access-Control-Allow-Methods: ')
// header('Access-Control-Allow-Origin: *')

$serverName = "DQN1310\SERVER";
$database = "vku";
$uid = '';
$pass = '';
$CharacterSet = 'UTF-8';
$connect = [
    "Database" => $database,
    "UID" => $uid,
    "PWD" => $pass,
    "CharacterSet" => $CharacterSet
];

$conn = sqlsrv_connect($serverName, $connect);
if(!$conn){
    die(print_r(sqlsrv_error(), true));
}else{
    // echo "Successfully connected!";
}

$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
?>