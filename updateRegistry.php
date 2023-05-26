<?php
    include 'db.php';
    $id = $_GET['id'];
    $trang_thai = $_GET['trang_thai'];

    $sql = "UPDATE dang_ky SET trang_thai = '".$trang_thai."' WHERE id = '".$id."'";

	$result = sqlsrv_query($conn, $sql , $params, $options);
    $test = array();

    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
        $test = $row;
    }

    echo json_encode($test);
?>