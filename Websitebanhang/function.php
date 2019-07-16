<?php
//Hàm login sau khi mạng xã hội trả dữ liệu về
function loginFromSocialCallBack($socialUser) {
    include ("admin/config.php");
    $result = mysqli_query($conn, "Select * from `khachhang` WHERE `EMAIL` ='" . $socialUser['email'] . "'");
    if ($result->num_rows == 0) {
        $result = mysqli_query($conn, "INSERT INTO `khachhang`(`FULLLNAME`, `EMAIL`) VALUES ('$socialUser['name']', '$socialUser['email']') ");
        if (!$result) {
            echo mysqli_error($conn);
            exit;
        }
        $result = mysqli_query($conn, "Select * from `user` WHERE `email` ='" . $socialUser['email'] . "'");
    }
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_user'] = $user;
        echo "<script> window.location='index.php';</script>";
    }
}
?>