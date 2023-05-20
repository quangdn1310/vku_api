<?php
    include 'db.php';
    $ma_sv = $_GET['ma_sv'];
    $sql = "SELECT ma_sv , ho_ten , ma_lop, ngay_sinh , dia_chi FROM sinh_vien  WHERE ma_sv = '".$ma_sv."'";
	$result = sqlsrv_query($conn, $sql , $params, $options);
    $test = array();

    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
        $test = $row;
      }

    echo json_encode($test);
?>