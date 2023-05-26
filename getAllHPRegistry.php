<?php
include 'db.php';

$sql = "SELECT tkb_gv.id, tkb_gv.ma_lop_tc, tuan, tiet_hoc, thu, tkb_gv.nhom, tkb_gv.ma_gv, giang_vien.ho_ten, lop_tin_chi.ten_mh, lop_tin_chi.so_tin_chi
FROM tkb_gv
INNER JOIN lop_tin_chi ON tkb_gv.ma_lop_tc = lop_tin_chi.ma_lop_tc
INNER JOIN giang_vien ON tkb_gv.ma_gv = giang_vien.ma_gv";

$result = sqlsrv_query($conn, $sql , $params, $options);
$test = array();

while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);

?>