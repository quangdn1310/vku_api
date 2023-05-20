<?php
    include 'db.php';
    $ma_lop_tc = $_GET['ma_lop_tc'];
    $nhom = $_GET['nhom'];

    $sql = "SELECT diem_cc, diem_gk, diem_ck, nhom, sinh_vien.ho_ten, sinh_vien.ma_sv FROM dang_ky INNER JOIN sinh_vien ON dang_ky.ma_sv = sinh_vien.ma_sv WHERE ma_lop_tc = '".$ma_lop_tc."' AND nhom = '".$nhom."'";
	$result = sqlsrv_query($conn, $sql , $params, $options);
    $test = array();

    while( $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
        $test[] = $row;
    }

    echo json_encode($test);
?>