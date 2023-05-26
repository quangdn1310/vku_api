<?php
    include 'db.php';
    $id = $_GET['id'];

    $sql = "UPDATE dang_ky SET trang_thai = 0 WHERE id = '".$id."'";

	$result = sqlsrv_query($conn, $sql , $params, $options);
    $test = array();

    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
        $test = $row;
      }

    echo json_encode($test);
?>