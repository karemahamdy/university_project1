<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'member_of _facullty';

// إنشاء اتصال
$con = mysqli_connect ($host, $user, $pass, $db);

// التحقق من نجاح الاتصال
if ($con) {
    echo'yes it is connect';
}
?>