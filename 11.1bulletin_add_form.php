<html>
<title>新增佈告</title> 	 //打在<TITLE></TITLE>這裡面的文字會出現在瀏覽器視窗最上頭藍色部份裡，當作一篇網頁的主題。
<body>
    <h2>新增佈告</h2> //H2代表副標題
    <form action="bulletin_add.php" method="post">  //表單<form>是 action= 'bulletin_edit.php'，這代表當網友按下送出表單之後，會將資料傳送到 bulletin_add.php 這程式
    佈告內容：<p>
	<textarea rows="20" cols="100" name="content"></textarea>  
	    //<textarea>在表單中，建立一個可以輸入多行文字的輸入框。rows設定輸入框的高度、cols設定輸入框的寬度、name: 聲明欄位名稱
    <p>
    佈告類型：<input type="radio" name="type" value="1" checked >系上公告  //<input> 的 type 屬性是建立不同類型的表單元件
              <input type="radio" name="type" value="2">招生訊息 
              <input type="radio"  name="type" value="3">企業徵才
    <p>      
    發佈時間：<input  type="date" name="time"><p>      
    <input type=submit value="發佈"><p> 
  </form>
</body>
</html> 
