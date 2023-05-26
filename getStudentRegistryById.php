<?php
include 'db.php';
$ma_sv = $_GET['ma_sv'];

$sql = "SELECT id, dang_ky.ma_lop_tc, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi
FROM dang_ky 
INNER JOIN lop_tin_chi ON dang_ky.ma_lop_tc = lop_tin_chi.ma_lop_tc
WHERE ma_sv = '".$ma_sv."' AND trang_thai = 2";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>