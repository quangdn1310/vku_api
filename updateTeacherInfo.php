<?php
    include 'db.php';
    $ma_gv = $_GET['ma_gv'];
    $ho_ten = $_GET['ho_ten'];
    $hoc_vi = $_GET['hoc_vi'];
    $email = $_GET['email'];
    $sdt = $_GET['sdt'];
    $ma_khoa = $_GET['ma_khoa'];

    // $sql = "UPDATE dang_ky SET diem_cc = '".$diem_cc."', diem_gk = '".$diem_gk."', diem_ck  = '".$diem_ck."'  WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."'";

    $sql = "UPDATE dang_ky SET diem_cc = '".$diem_cc."', diem_gk = '".$diem_gk."', diem_ck  = '".$diem_ck."'  WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."' AND nhom = '".$nhom."' ";
	$result = sqlsrv_query($conn, $sql , $params, $options);

?>
