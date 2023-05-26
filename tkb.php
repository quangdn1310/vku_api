<?php
include 'db.php';
$ma_gv = $_GET['ma_gv'];
// $sql = "SELECT lop_tin_chi.ma_lop_tc, ma_mh, thoi_khoa_bieu.phong_hoc, thoi_khoa_bieu.thu, thoi_khoa_bieu.tiet_hoc, thoi_khoa_bieu.tuan 
// FROM lop_tin_chi INNER JOIN thoi_khoa_bieu ON lop_tin_chi.ma_lop_tc = thoi_khoa_bieu.ma_lop_tc WHERE ma_gv = '".$ma_gv."'";

$sql = "SELECT DISTINCT tkb_gv.ma_lop_tc, tkb_gv.phong_hoc, tkb_gv.thu, tkb_gv.tiet_hoc, tkb_gv.nhom, tkb_gv.tuan, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi
FROM tkb_gv 
INNER JOIN lop_tin_chi ON tkb_gv.ma_lop_tc = lop_tin_chi.ma_lop_tc 
WHERE tkb_gv.ma_gv = '".$ma_gv."'";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>