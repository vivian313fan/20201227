<?php

session_start(); //啟動Session的使用
unset($_SESSION["id"]); 
echo '登出中......';   
echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>'; //上面例子會讓網頁在載入 2 秒後，自動跳轉到login.html

?>
