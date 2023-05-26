<?php
include 'db.php';
$ma_sv = $_GET['ma_sv'];

// $sql = "SELECT thoi_khoa_bieu.phong_hoc, thoi_khoa_bieu.thu, thoi_khoa_bieu.tiet_hoc, thoi_khoa_bieu.tuan, thoi_khoa_bieu.ma_sv, thoi_khoa_bieu.nhom, lop_tin_chi.ma_lop_tc, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi 
// FROM thoi_khoa_bieu 
// INNER JOIN lop_tin_chi ON thoi_khoa_bieu.ma_lop_tc = lop_tin_chi.ma_lop_tc 
// WHERE ma_sv = '".$ma_sv."'";

$sql = "SELECT dang_ky.ma_lop_tc, dang_ky.nhom, lop_tin_chi.so_tin_chi, lop_tin_chi.ten_mh, tkb_gv.tuan, tkb_gv.phong_hoc, tkb_gv.thu, tkb_gv.tiet_hoc
FROM dang_ky 
INNER JOIN lop_tin_chi ON dang_ky.ma_lop_tc = lop_tin_chi.ma_lop_tc
INNER JOIN tkb_gv ON dang_ky.tkb_id = tkb_gv.id

WHERE ma_sv = '".$ma_sv."' AND trang_thai = 1";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>