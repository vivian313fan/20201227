<?php 
    error_reporting(0); //報告執行時錯誤
    $conn = mysqli_connect("localhost", "root", "", "mydb");    //建立資料庫連線，如果$conn=false代表連結不成功
    if (mysqli_connect_error($conn))    //如果連接失敗，顯示錯誤
      die("無法連線資料庫");
    $sql="select * from bulletin where bid = {$_GET['bid']}"; 
    //echo $sql;
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
   
echo "
<html>
<head><title>修改佈告</title></head> //打在<TITLE></TITLE>這裡面的文字會出現在瀏覽器視窗最上頭藍色部份裡，當作一篇網頁的主題。<title> 標籤是放在 <head> 標籤裡面。
<body>   //<body> 標籤作用上是當作一個容器，用來呈現網頁的主要內容
  <h2>修改佈告</h2>
  <form action='bulletin_edit.php' method='post'>
//表單 <form> 有兩個重點，第一個重點是 action= 'bulletin_edit.php'，這代表當網友按下送出表單之後，會將資料傳送到 bulletin_edit.php 這程式。第二個重點是 method='post'，代表傳輸方式採用的是 POST 而不是 GET，要注意的是這裡的 post 必需採用小寫，如果寫成大寫，有許多瀏覽器可能會失效。
    <input type=hidden name=bid value=$row[bid]>
    佈告標題：<input  type='text' name='title' size=200 value='$row[title]'><p>      
    佈告內容：<p>
    <textarea rows='20' cols='100' name='content'>$row[content]</textarea> 
    <p>
    佈告類型：<p>
    <input name='type' value='1' ";
    if ($row['type']==1) echo "checked ";
    echo "type='radio'>系上公告 
    <input name='type' value='2' ";
    if ($row['type']==2) echo "checked  ";
    echo "type='radio'>招生訊息 
    <input name='type' value='3' ";
    if ($row['type']==3) echo "checked ";
    echo "type='radio'>企業徵才<p>      
    發佈時間：<input type=date name='time' value=$row[time]><p>      
    <input type=submit> //這是最常見的提交方式
  </form>  //<form> 標籤是用來建立一個 HTML 表單
</body>
</html>
"; 
?>
