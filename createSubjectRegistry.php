<?php
    include 'db.php';
    $ma_lop_tc = $_GET['ma_lop_tc'];
    $ma_sv = $_GET['ma_sv'];
    $nhom = $_GET['nhom'];
    $tkb_id = $_GET['tkb_id'];
    $nam_hoc = $_GET['nam_hoc'];
    $trang_thai = $_GET['trang_thai'];

    $sql = "SELECT * FROM dang_ky WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."'";
    $result = sqlsrv_query($conn, $sql , $params, $options);
    $count = sqlsrv_num_rows($result);

    $sql1 = '';
    if ($count == 1) {
        $sql1 = "UPDATE dang_ky SET trang_thai = '".$trang_thai."', nhom = '".$nhom."', tkb_id = '".$tkb_id."' WHERE ma_sv = '".$ma_sv."' AND ma_lop_tc = '".$ma_lop_tc."'";
    } else {
        $sql1 = "INSERT INTO dang_ky (ma_lop_tc, ma_sv, nhom, tkb_id, nam_hoc, trang_thai) 
        VALUES ('".$ma_lop_tc."', '".$ma_sv."', '".$nhom."', '".$tkb_id."', '".$nam_hoc."', '".$trang_thai."')";
    }

	$result = sqlsrv_query($conn, $sql1 , $params, $options);

?>
