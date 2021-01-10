<?php
    error_reporting(); //用來設定錯誤級別並返回當前級別的
    $conn=mysqli_connect("localhost","root","","mydb"); //建立資料庫連線，如果$conn=false代表連結不成功
    // delete from bulletin where bid=???
    $sql="delete from bulletin where bid={$_GET[bid]}";
    //echo $sql;
    if (!mysqli_query($conn, $sql))
        echo "刪除錯誤";
    else{
        echo "刪除成功；回前頁中...";
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>"; //上面例子會讓網頁在載入 3秒後，自動跳轉到bulletin.php 
    }
?>
