<?php
include 'db.php';
$khoa_hoc = $_GET['khoa_hoc'];

$sql = "SELECT *
FROM nam_hoc 
WHERE khoa_hoc = '".$khoa_hoc."'";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);
?>