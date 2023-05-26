<?php
include 'db.php';
$ma_lop_tc = $_GET['ma_lop_tc'];
$nhom = $_GET['nhom'];

$sql = "SELECT thoi_khoa_bieu_da.ma_sv, sinh_vien.ho_ten, diem_cc, diem_bv
FROM thoi_khoa_bieu_da 
INNER JOIN sinh_vien ON thoi_khoa_bieu_da.ma_sv = sinh_vien.ma_sv
WHERE ma_lop_tc = '".$ma_lop_tc."' AND nhom = '".$nhom."'";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);
?>