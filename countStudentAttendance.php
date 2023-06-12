<?php
include 'db.php';
$ma_lop_tc = $_GET['ma_lop_tc'];
$nhom = $_GET['nhom'];
// $ma_sv = $_GET['ma_sv'];

$sql = "SELECT COUNT(id) AS count, ma_sv, attendance_status_id
FROM diem_danh
WHERE ma_lop_tc = '".$ma_lop_tc."' AND nhom = '".$nhom."'
GROUP BY ma_sv, attendance_status_id";

$result = sqlsrv_query($conn, $sql, $params, $options);
$test = array();

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
    $test[] = $row;
}

echo json_encode($test);
?>