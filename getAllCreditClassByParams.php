<?php
include 'db.php';
$khoa_hoc = $_GET['khoa_hoc'];
$ma_khoa = $_GET['ma_khoa'];

$sql = "SELECT ma_lop_tc, ten_mh, so_tin_chi, bat_buoc
FROM lop_tin_chi
WHERE khoa_hoc = '".$khoa_hoc."' AND ma_khoa = '".$ma_khoa."' AND nam_hoc = 10";

// $sql = "SELECT tkb_gv.ma_lop_tc, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi, lop_tin_chi.bat_buoc
// FROM tkb_gv 
// INNER JOIN lop_tin_chi ON tkb_gv.ma_lop_tc = lop_tin_chi.ma_lop_tc";

$result = sqlsrv_query($conn, $sql, $params, $options);
$test = array();
while( $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>