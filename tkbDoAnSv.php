<?php
include 'db.php';
$ma_sv = $_GET['ma_sv'];

$sql = "SELECT DISTINCT phong_hoc, thu, tiet_hoc, thoi_khoa_bieu_da.nhom, tuan, thoi_khoa_bieu_da.ma_gv, lop_tin_chi.ma_lop_tc, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi, giang_vien.*
FROM thoi_khoa_bieu_da
INNER JOIN lop_tin_chi ON thoi_khoa_bieu_da.ma_lop_tc = lop_tin_chi.ma_lop_tc 
INNER JOIN giang_vien ON thoi_khoa_bieu_da.ma_gv = giang_vien.ma_gv 
WHERE thoi_khoa_bieu_da.ma_sv = '".$ma_sv."'";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>