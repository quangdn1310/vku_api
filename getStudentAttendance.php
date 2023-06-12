<?php
include 'db.php';
$ma_lop_tc = $_GET['ma_lop_tc'];
$nhom = $_GET['nhom'];
$ngay_hoc = $_GET['ngay_hoc'];

$sql = "SELECT diem_danh.id, diem_danh.ma_sv, sinh_vien.ho_ten, diem_danh.ma_lop_tc, lop_tin_chi.ten_mh, ngay_hoc, attendance_status_id, note
FROM diem_danh 
INNER JOIN sinh_vien ON diem_danh.ma_sv = sinh_vien.ma_sv
INNER JOIN lop_tin_chi ON diem_danh.ma_lop_tc = lop_tin_chi.ma_lop_tc
WHERE diem_danh.ma_lop_tc = '".$ma_lop_tc."' AND diem_danh.nhom = '".$nhom."' AND ngay_hoc = '".$ngay_hoc."'";

$result = sqlsrv_query($conn, $sql, $params, $options);
$test = array();

while($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);
?>