<?php
include 'db.php';
$ma_sv = $_GET['ma_sv'];

$sql = "SELECT dang_ky.ma_sv, dang_ky.diem_cc, dang_ky.diem_gk, dang_ky.diem_ck, dang_ky.ma_lop_tc, dang_ky.nhom, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi FROM dang_ky INNER JOIN lop_tin_chi ON dang_ky.ma_lop_tc = lop_tin_chi.ma_lop_tc WHERE ma_sv = '".$ma_sv."'";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>