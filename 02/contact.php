<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<link href="contact.css" rel="stylesheet" type="text/css">
<html>
<head>
</head>

<body bgcolor="#ffffe0">
<?php
    function check() {
            echo $_POST['den'];
            return false;
    }
?>

<div id ="formWrap">
    <p align="center">
<FONT size="7">お問い合わせ画面</FONT>
    </p>
<form action="result.php" method="post" onsubmit="return check()">
<table class ="formTable" bgcolor="#F0FFF0">
    <tr>
<label name="0" value="姓"><th>姓</th></label>
<td><input type="txtbox" name="name1" value="" required><br/><br/>
</td>
</tr>

<tr>
<label name="1" value="名"><th>名</th></label>
<td>
<input type="txtbox" name="name2" value="" required><br/><br/>
</td>
</tr>

<tr>
<label name="2" value="性別"><th>性別</th></label>
<td>
<input type="radio" name="sei" value="0">男
<input type="radio" name="sei" value="1"> 女
<input type="radio" name="sei" value="2"> 不明
<br/><br/>
</td>
</tr>

<tr>
<label name="3" value="住所"><th>住所</th></label>
<td>
<input type="txtbox" name="zyuu" value=""><br/><br/>
</td>
</tr>

<tr>
<label name="4" value="電話番号"><th>電話番号</th></label>
<td>
<input type="txtbox" name="den" value="" size="5">-<input type="txtbox" name="den2" value="" size="5">-<input type="txtbox" name="den3" value="" size="5"><br/><br/>
</td>
</tr>

<tr>
<label  name="5" value="メールアドレス"><th>メールアドレス</th></label>
<td>
<input type="txtbox" name="mail" value="">@<input type="txtbox" name="mail2" value=""><br/><br/>
</td>
</tr>

<tr>
<label name="6" value="どこで知ったか"><th>どこで知ったか</th></label>
<td>
<input type="checkbox" name="doko[]" value="0">web
<input type="checkbox" name="doko[]" value="1">チラシ
<input type="checkbox" name="doko[]" value="2">知り合い
<br/><br/>
</td>
</tr>

<tr>
<label name="7" value="質問カテゴリ"><th>質問カテゴリ</th></label>
<td>
<select name="cate">
<option value="0">研修について</option>
<option value="1">配偶について</option>
<option value="2">福利厚生について</option>
</select><br/><br/>
</td>
</tr>

<tr>
<label name="8" value="質問内容"><th>質問内容</th></label>
<td>
<textarea type="txtbox" name="naiyo" value="" cols="50" rows="5"></textarea><br/><br/>
</td>
</tr>

</table>
<p align="center">
    <input type="submit" name="sousin" onclick="<?php check() ?>">
    <input type="reset" name="reset">
</p>
</form>
</div>
</body>
</html>
