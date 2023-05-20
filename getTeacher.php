<?php
    include 'db.php';
    $ma_gv = $_GET['ma_gv'];
    $sql = "SELECT ma_gv , ho_ten , hoc_vi, email , sdt, khoa.ten_khoa FROM giang_vien INNER JOIN khoa ON giang_vien.ma_khoa = khoa.ma_khoa WHERE ma_gv = '".$ma_gv."'";
	$result = sqlsrv_query($conn, $sql , $params, $options);
    $test = array();

    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
        $test = $row;
      }

    echo json_encode($test);
?>