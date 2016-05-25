<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
</head>
<link href="contact.css" rel="stylesheet" type="text/css">

<?php
$flag1 = 0;
$flag2 = 0;
$flag3 = 0;
$flag4 = 0;
$doko = false;
$dokode  = array(0=>"web",1=>"チラシ",2=>"知り合い");
$chk = "";
$chk2 = "";
$chk3 = "";

if (preg_match("/^[a-zA-Zぁ-んァ-ヶー一-龠]+$/u",$_POST['name1']) && preg_match("/^[a-zA-Zぁ-んァ-ヶー一-龠]+$/u",$_POST['name2']) && is_numeric($_POST['den']) && is_numeric($_POST['den2']) && is_numeric($_POST['den3']) && preg_match("/^[a-zA-Z0-9ぁ-んァ-ヶー一-龠]+$/u",$_POST['zyuu'])){
session_start();
$_SESSION['name1']=$_POST['name1'];
$_SESSION['name2']=$_POST['name2'];
$_SESSION['sei']=$_POST['sei'];
$_SESSION['zyuu']=$_POST['zyuu'];
$_SESSION['den']=$_POST['den'];
$_SESSION['den2']=$_POST['den2'];
$_SESSION['den3']=$_POST['den3'];
$_SESSION['mail']=$_POST['mail'];
$_SESSION['mail2']=$_POST['mail2'];
$_SESSION['doko']=$_POST['doko'];
$_SESSION['cate']=$_POST['cate'];
$_SESSION['naiyo']=$_POST['naiyo'];
$_SESSION['count']=$_SESSION['count']+1;
header("Location: result.php");
//$a = "result.php";
}
?>

<body background="P1030280-Edit.jpg">

<div id ="formWrap">
    <p align="center">
<FONT size="7" color="#F0FFF0">お問い合わせ画面</FONT>
    </p>
<form action="contact2.php" method="post" name="form1">
<table class ="formTable" bgcolor="#F0FFF0">
    <tr>
<label name="0" value="姓"><th>姓<span>「必須」</span></th></label>
<td><input type="txtbox" name="name1" value="<?php echo $_POST["name1"]; ?>"><br/><br/>
<?php
if (!preg_match("/^[a-zA-Zぁ-んァ-ヶー一-龠]+$/u",$_POST['name1'])){
?>
<span>※名前を入力してください</span>

<?php
$flag1 =1;
}
?>
</td>
</tr>

<tr>
<label name="1" value="名"><th>名<span>「必須」</span></th></label>
<td><input type="txtbox" name="name2" value="<?php echo $_POST["name2"]; ?>"><br/><br/>
<?php
if (!preg_match("/^[a-zA-Zぁ-んァ-ヶー一-龠]+$/u",$_POST['name2'])){
?>
<span>※名前を入力してください</span>
<?php
$flag2 =1;
}
?>
</td>
</tr>

<tr>
<label name="2" value="性別"><th>性別<span>「必須」</span></th></label>
<td>
<input type="radio" name="sei" value="0" checked="checked">男
<input type="radio" name="sei" value="1"> 女
<input type="radio" name="sei" value="2"> 不明
<br/><br/>
<?php
if ($_POST['sei'] == ""){
?>
<span>※チェックしてください</span>
<?php
$flag3 =1;
}
?>
</td>
</tr>

<tr>
<label name="3" value="住所"><th>住所<span>「必須」</span></th></label>
<td>
<input type="txtbox" name="zyuu" value="<?php echo $_POST["zyuu"]; ?>"><br/><br/>
<?php
if (!preg_match("/^[a-zA-Z0-9ぁ-んァ-ヶー一-龠!-~]+$/u",$_POST['zyuu'])) {
?>
<span>※住所を入力してください</span>
<?php
}
?>
</td>
</tr>

<tr>
<label name="4" value="電話番号"><th>電話番号<span>「必須」</span></th></label>
<td>
<input type="txtbox" name="den" value="<?php echo $_POST["den"]; ?>" size="5">-<input type="txtbox" name="den2" value="<?php echo $_POST["den2"]; ?>" size="5">-<input type="txtbox" name="den3"  value="<?php echo $_POST["den3"]; ?>"  size="5" ><br/><br/>
<?php
if (!is_numeric($_POST['den']) || !is_numeric($_POST['den2']) || !is_numeric($_POST['den3'])){
?>
<span>※数字のみ入力可能</span>
<?php
$flag4 =1;
}
?>
</td>
</tr>

<tr>
<label  name="5" value="メールアドレス"><th>メールアドレス</th></label>
<td>
<input type="txtbox" name="mail" value="<?php echo $_POST["mail"]; ?>">@<input type="txtbox" name="mail2" value="<?php echo $_POST["mail2"]; ?>"><br/><br/>
</td>
</tr>

<tr>
<label name="6" value="どこで知ったか"><th>どこで知ったか</th></label>
<td>
    <?php
if (!empty($_POST["doko"])) {
    foreach ($_POST["doko"] as  $value) {

       $check = $value;
       if($check == 0){
            $chk = " checked='checked' ";

        }
        if($check == 1){
             $chk2 = " checked='checked' ";

         }
         if($check == 2){
              $chk3 = " checked='checked' ";

          }
      }
  }
    ?>

<input type="checkbox" name="doko[]" value="0" <?php echo $chk ?> >web
<input type="checkbox" name="doko[]" value="1" <?php echo $chk2 ?> >チラシ
<input type="checkbox" name="doko[]" value="2" <?php echo $chk3 ?> >知り合い


<br/><br/>
</td>
</tr>

<tr>
<label name="7" value="質問カテゴリ"><th>質問カテゴリ<span>「必須」</span></th></label>
<td>
<select name="cate">
<option value="0">研修について</option>
<option value="1">配偶について</option>
<option value="2">福利厚生について</option>
</select><br/><br/>
</td>
</tr>

<tr>
<label name="8" value="質問内容"><th>質問内容<span>「必須」</span></th></label>
<td>
<textarea type="txtbox" name="naiyo" value=""  cols="50" rows="5"><?php echo $_POST["naiyo"]; ?></textarea><br/><br/>
<?php if (!preg_match("/^[a-zA-Z0-9ぁ-んァ-ヶー一-龠!-~、。]+$/u",$_POST['naiyo'])){
?>
<span>※内容を入力してください</span>
<?php
}
 ?>
</td>
</tr>

</table>



<p align="center">
    <button class="button1" type="submit" name="sousin">送信</button>
</p>
</form>
</div>
</body>
</html>
