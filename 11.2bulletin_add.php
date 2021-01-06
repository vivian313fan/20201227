<?php
    session_start();    //啟動Session的使用
if (!isset($_SESSION['id'])){   //檢查Session值是否存在
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>";   //上面例子會讓網頁在載入 3 秒後，自動跳轉到login.html
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");     //建立資料庫連線，如果$conn=false代表連結不成功
    if (mysqli_connect_error($conn))    //如果連接失敗，顯示錯誤
      die("無法連線資料庫");
    $sql="insert into bulletin(title, content, type, time) values ('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; 
    //echo $sql;
    if (!mysqli_query($conn, $sql)){
     echo("Error description: " . mysqli_error($conn));   
    }
    else  
       echo "新增佈告成功";   
    mysqli_close($conn);  //關閉數據庫連接
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>";   //上面例子會讓網頁在載入 0秒後，自動跳轉到bulletin.php
}
?>
