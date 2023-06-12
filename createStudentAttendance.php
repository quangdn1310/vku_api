<?php
    include 'db.php';
    $ma_sv = $_GET['ma_sv'];
    $ma_lop_tc = $_GET['ma_lop_tc'];
    $nhom = $_GET['nhom'];
    $attendance_status_id = $_GET['attendance_status_id'];
    $ngay_hoc = $_GET['ngay_hoc'];
    $note = $_GET['note'];

    $sql = "SELECT * FROM diem_danh WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."' AND ngay_hoc = '".$ngay_hoc."'";
    $result = sqlsrv_query($conn, $sql , $params, $options);
    $count = sqlsrv_num_rows($result);

    $sql1 = '';
    if ($count == 1) {
        $sql1 = "UPDATE diem_danh SET attendance_status_id = '".$attendance_status_id."', note = '".$note."' WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."' AND ngay_hoc = '".$ngay_hoc."'";
    } else {
        $sql1 = "INSERT INTO diem_danh (ma_lop_tc, ma_sv, nhom, attendance_status_id, note) 
        VALUES ('".$ma_lop_tc."', '".$ma_sv."', '".$nhom."', '".$attendance_status_id."', '".$note."')";
    }

	$result = sqlsrv_query($conn, $sql1 , $params, $options);

?>
