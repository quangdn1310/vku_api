<?php
    include 'db.php';
    $ma_sv = $_GET['ma_sv'];
    $diem_cc = $_GET['diem_cc'];
    $diem_gk = $_GET['diem_gk'];
    $diem_ck = $_GET['diem_ck'];
    $ma_lop_tc = $_GET['ma_lop_tc'];
    $nhom = $_GET['nhom'];

    // $sql = "UPDATE dang_ky SET diem_cc = '".$diem_cc."', diem_gk = '".$diem_gk."', diem_ck  = '".$diem_ck."'  WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."'";
    if($diem_gk) {
        $sql = "UPDATE dang_ky SET diem_cc = '".$diem_cc."', diem_gk = '".$diem_gk."', diem_ck  = '".$diem_ck."'  WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."' AND nhom = '".$nhom."' ";
    }else {
        $sql = "UPDATE dang_ky SET diem_cc = '".$diem_cc."', diem_ck  = '".$diem_ck."'  WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."' AND nhom = '".$nhom."' ";
    }
	$result = sqlsrv_query($conn, $sql , $params, $options);

?>
