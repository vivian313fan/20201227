<?php
    error_reporting(0); //報告執行時錯誤
    session_start();   //啟動Session的使用
    if (!isset($_SESSION["counter1"])){  //檢查Session值是否存在
        $_SESSION["counter1"]=1; //設定Session值
    }else{
        $_SESSION["counter1"]++;
    }
    echo "登入{$_SESSION["counter1"]}人次";
?>
