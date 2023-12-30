<?php
  $db_link = @mysqli_connect("192.168.0.107", "root", "20011219" ,"idpw");
 //資料庫連接部份
	$id = $_POST['id'];
	$pw = $_POST['pw'];

 //定義從表單獲取的變數

	$sql= "INSERT INTO abc(id,pw)values($id,$pw)";
	 
	//定義sql為插入表單資料
 		
		if ($db_link) {
 		
		//設定連線編碼為utf8
 		//mysqli_query(資料庫連線, "utf8") 為執行sql語法的函式
   		 
		mysqli_query($db_link, "SET NAMES 'utf8'");

 $send_data = @mysqli_query( $db_link,"INSERT INTO abc(id,pw)values($id,$pw)") or die ("無法新增".mysqli_error());
  }else {
    
	//否則就代表連線失敗 mysqli_connect_error() 是顯示連線錯誤訊息
     echo '連結mysql資料庫失敗'.mysqli_connect_error();


/*
注意函數可以使用的版本
mysql和mysqli沒辦法混用
語法的各個欄位要分清
程式先後流程要正確
*/




}
?>
