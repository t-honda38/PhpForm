<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<link href="contact.css" rel="stylesheet" type="text/css">

</head>
<body bgcolor="#ffffe0">
    <?php
    $seibetu = array(0=>"男",1=>"女",2=>"不明");
    $dokode  = array(0=>"web",1=>"チラシ",2=>"知り合い");
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
foreach ($_SESSION["doko"] as  $value) {
fwrite($fp,$dokode[$value]."　");
}
fwrite($fp,"\n");
fwrite($fp, "質問カテゴリ　".$catego[$_SESSION["cate"]]."\n");
fwrite($fp, "質問内容 ".$_SESSION["naiyo"]."\n"."\n");
fclose($fp);
//ここまで
?>

 <div id ="formWrap">
     <p align="center">
 <FONT size="7">確認画面</FONT>
     </p>
<table class ="formTable" bgcolor="#F0FFF0">
    <tr>
   <label name="0" value="姓"><th>姓名</th></label>
   <td><?php echo $_SESSION["name1"]." ".$_SESSION['name2']."<br/>"; ?>
   </td>
   </tr>

   <tr>
   <label name="2" value="性別"><th>性別</th></label>
   <td><?php echo $seibetu[$_SESSION["sei"]]."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="3" value="住所"><th>住所</th></label>
   <td><?php echo $_SESSION['zyuu']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="4" value="電話番号"><th>電話番号</th></label>
   <td><?php echo $_SESSION['den']."-".$_SESSION['den2']."-".$_SESSION['den3']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label  name="5" value="メールアドレス"><th>メールアドレス</th></label>
   <td><?php echo $_SESSION['mail']."@".$_SESSION['mail2']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="6" value="どこで知ったか"><th>どこで知ったか</th></label>
   <td><?php foreach ($_SESSION["doko"] as  $value) {
      echo $dokode[$value]. "　";
   }?>
   </td>
   </tr>

   <tr>
   <label name="7" value="質問カテゴリ"><th>質問カテゴリ</th></label>
   <td><?php echo $catego[$_SESSION["cate"]]."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="8" value="質問内容"><th>質問内容</th></label>
   <td><?php echo $_SESSION['naiyo']."<br/>";?>
   </td>
   </tr>
</table>
<p align="center">
    <input type="button" name="back" onclick="location.href='http://localhost/PhpForm/02/contact.php'" value = "戻る";>
</p>
</div>
</body>
</html>
