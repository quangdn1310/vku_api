<?php
include 'db.php';

$sql = "SELECT id, dang_ky.ma_sv, ma_lop_tc, nhom, nam_hoc, trang_thai, ngay_dang_ky, sinh_vien.ho_ten 
FROM dang_ky
INNER JOIN sinh_vien ON dang_ky.ma_sv = sinh_vien.ma_sv";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>