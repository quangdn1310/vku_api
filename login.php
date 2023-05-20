<?php
    include 'db.php';

    $email = $_GET['email'];
    $password = $_GET['password'];
        $sql = '';
        if (preg_match('~[0-9]+~', $email)) {
            $sql = "SELECT ma_sv, ho_ten, ma_lop, ngay_sinh, dia_chi FROM sinh_vien WHERE ma_sv = '".$email."' AND password = '".$password."'";
        }else{
            $sql = "SELECT ma_gv, ho_ten, hoc_vi, giang_vien.ma_khoa, email, dia_chi, ngay_sinh, sdt, khoa.ten_khoa FROM giang_vien INNER JOIN khoa ON giang_vien.ma_khoa = khoa.ma_khoa WHERE email = '".$email."' AND password = '".$password."'";
        }

        $result = sqlsrv_query($conn, $sql , $params, $options);
        $count = sqlsrv_num_rows($result);
        $res = array();

        if ($count == 1) {
            while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
                $res = $row;
            }
        }else{
            $res = null;
        }
        echo json_encode($res);

?>