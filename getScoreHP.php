<?php
include 'db.php';
$ma_sv = $_GET['ma_sv'];

$sql = "SELECT diem_hoc_phan.ma_sv, diem_hoc_phan.ma_lop_tc, diem_hoc_phan.khoa_hoc, diem_hoc_phan.hoc_ky, diem_hoc_phan.diem_cc, diem_hoc_phan.diem_gk, diem_hoc_phan.diem_ck
FROM diem_hoc_phan 
INNER JOIN lop_tin_chi ON diem_hoc_phan.ma_lop_tc = lop_tin_chi.ma_lop_tc WHERE diem_hoc_phan.ma_sv = '".$ma_sv."'";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>