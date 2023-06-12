<?php
    include 'db.php';
    $ma_lop_tc = $_GET['ma_lop_tc'];
    $diem_cc = $_GET['diem_cc'];
    $diem_bv = $_GET['diem_bv'];
    $ma_sv = $_GET['ma_sv'];
    $sql = "UPDATE thoi_khoa_bieu_da SET diem_cc = '".$diem_cc."', diem_bv = '".$diem_bv."' WHERE ma_lop_tc = '".$ma_lop_tc."' AND ma_sv = '".$ma_sv."'";
	$result = sqlsrv_query($conn, $sql , $params, $options);

?>
