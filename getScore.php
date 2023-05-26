<?php
include 'db.php';
$ma_sv = $_GET['ma_sv'];

// $sql = "SELECT dang_ky.ma_sv, diem_cc, diem_gk, diem_ck, dang_ky.ma_lop_tc, dang_ky.nhom, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi, lop_tin_chi.nam_hoc
// FROM dang_ky 
// INNER JOIN lop_tin_chi ON dang_ky.ma_lop_tc = lop_tin_chi.ma_lop_tc 
// -- INNER JOIN nam_hoc ON dang_ky.nam_hoc = nam_hoc.id
// WHERE ma_sv = '".$ma_sv."'";

$sql = "SELECT dang_ky.ma_lop_tc, dang_ky.nhom, lop_tin_chi.nam_hoc, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi, diem_cc, diem_gk, diem_ck
FROM dang_ky 
INNER JOIN lop_tin_chi ON dang_ky.ma_lop_tc = lop_tin_chi.ma_lop_tc 
WHERE ma_sv = '".$ma_sv."' AND trang_thai = 1";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>