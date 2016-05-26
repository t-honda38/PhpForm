<!DOCTYPE HTML >

<html>
<head>
    <title>お問い合わせ画面</title>
<link href="contact.css" rel="stylesheet" type="text/css">

</head>
<body background="P1030280-Edit.jpg">
    <?php
    $seibetu = array(0=>"男",1=>"女",2=>"不明");
    $dokode  = array(0=>"web",1=>"チラシ",2=>"知り合い",3=>"選択なし");
    $catego  = array(0=>"研修について",1=>"配属について",2=>"福利厚生について");

//この下にファイル出力
session_start();
$fp = fopen("contact_log.txt", "a");
fwrite($fp, $_SESSION["count"]."回目\n");
fwrite($fp, "姓名 ".$_SESSION["name1"]."　");
fwrite($fp, $_SESSION["name2"]."\n");
fwrite($fp, "性別　".$seibetu[$_SESSION["sei"]]."\n");
fwrite($fp, "住所　".$_SESSION["zyuu"]."\n");
fwrite($fp, "電話番号　".$_SESSION["den"]."-");
fwrite($fp, $_SESSION["den2"]."-");
fwrite($fp, $_SESSION["den3"]."\n");
fwrite($fp, "メールアドレス　".$_SESSION["mail"]."@");
fwrite($fp, $_SESSION["mail2"]."\n");
fwrite($fp,"どこで知ったか　");
 if(!empty($_SESSION["doko"])){
foreach ($_SESSION["doko"] as  $value) {
fwrite($fp,$dokode[$value]."　");
}
}
else{
fwrite($fp,"選択なし"."　");
}
fwrite($fp,"\n");
fwrite($fp, "質問カテゴリ　".$catego[$_SESSION["cate"]]."\n");
fwrite($fp, "質問内容 ".$_SESSION["naiyo"]."\n"."\n");
fclose($fp);
//ここまで
?>

 <div id ="formWrap">
     <p align="center">
 <FONT size="7" color="#F0FFF0">確認画面</FONT>
     </p>
<table class ="formTable" bgcolor="#F0FFF0" style="border:2px solid gray;border-radius: 10px;" >
    <tr>
   <label name="0" value="姓"><th>姓名</th></label>
   <td><?php echo htmlspecialchars($_SESSION["name1"])." ".htmlspecialchars($_SESSION['name2'])."<br/>"; ?>
   </td>
   </tr>

   <tr>
   <label name="2" value="性別"><th>性別</th></label>
   <td><?php echo htmlspecialchars($seibetu[$_SESSION["sei"]])."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="3" value="住所"><th>住所</th></label>
   <td><?php echo htmlspecialchars($_SESSION['zyuu'])."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="4" value="電話番号"><th>電話番号</th></label>
   <td><?php echo htmlspecialchars($_SESSION['den'])."-".htmlspecialchars($_SESSION['den2'])."-".htmlspecialchars($_SESSION['den3'])."<br/>";?>
   </td>
   </tr>

   <tr>
   <label  name="5" value="メールアドレス"><th>メールアドレス</th></label>
   <td><?php echo htmlspecialchars($_SESSION['mail'])."@".htmlspecialchars($_SESSION['mail2'])."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="6" value="どこで知ったか"><th>どこで知ったか</th></label>
   <td><?php

       if(!empty($_SESSION["doko"])){
   foreach ($_SESSION["doko"] as  $value) {
      echo htmlspecialchars($dokode[$value]). "　";
   }
   }
    else{
        echo "選択なし". "　";
    }
    ?>
   </td>
   </tr>

   <tr>
   <label name="7" value="質問カテゴリ"><th>質問カテゴリ</th></label>
   <td><?php echo htmlspecialchars($catego[$_SESSION["cate"]])."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="8" value="質問内容"><th>質問内容</th></label>
   <td><?php echo htmlspecialchars($_SESSION['naiyo'])."<br/>";?>
   </td>
   </tr>
</table>
<p align="center">
    <button class="button1" type="button" name="戻る" onclick="location.href='http://localhost/PhpForm/02/contact.php'" value = "戻る";>戻る</button>
</p>
</div>
</body>
</html>
