<?php
include 'db.php';
$khoa_hoc = $_GET['khoa_hoc'];
$ma_khoa = $_GET['ma_khoa'];

$sql = "SELECT ma_lop_tc, ten_mh, so_tin_chi
FROM lop_tin_chi
WHERE khoa_hoc = '".$khoa_hoc."' AND ma_khoa = '".$ma_khoa."'";


$result = sqlsrv_query($conn, $sql, $params, $options);
$test = array();
while( $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>