<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<link href="contact.css" rel="stylesheet" type="text/css">
<html>
<head>
</head>
<body bgcolor="#ffffe0">
<?php
$seibetu = array(0=>"男",1=>"女",2=>"不明");
$dokode  = array(0=>"web",1=>"チラシ",2=>"知り合い");
$catego  = array(0=>"研修について",1=>"配属について",2=>"福利厚生について");

?>

 <div id ="formWrap">
     <p align="center">
 <FONT size="7">確認画面</FONT>
     </p>
<table class ="formTable" bgcolor="#F0FFF0">
    <tr>
   <label name="0" value="姓"><th>姓名</th></label>
   <td><?php echo $_POST['name1']." ".$_POST['name2']."<br/>"; ?>
   </td>
   </tr>

   <tr>
   <label name="2" value="性別"><th>性別</th></label>
   <td><?php echo $seibetu[$_POST["sei"]]."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="3" value="住所"><th>住所</th></label>
   <td><?php echo $_POST['zyuu']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="4" value="電話番号"><th>電話番号</th></label>
   <td><?php echo $_POST['den']."-".$_POST['den2']."-".$_POST['den3']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label  name="5" value="メールアドレス"><th>メールアドレス</th></label>
   <td><?php echo $_POST['mail']."@".$_POST['mail2']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="6" value="どこで知ったか"><th>どこで知ったか</th></label>
   <td><?php foreach ($_POST["doko"] as  $value) {
      echo $dokode[$value]. "　";
   }?>
   </td>
   </tr>

   <tr>
   <label name="7" value="質問カテゴリ"><th>質問カテゴリ</th></label>
   <td><?php echo $catego[$_POST["cate"]]."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="8" value="質問内容"><th>質問内容</th></label>
   <td><?php echo $_POST['naiyo']."<br/>";?>
   </td>
   </tr>
</table>
</div>
</body>
</html>
