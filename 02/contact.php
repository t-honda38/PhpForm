
<link href="contact.css" rel="stylesheet" type="text/css">


<div id ="formWrap">
<form action="result.php" method="post">
<table class ="formTable">
    <tr>
<label name="0" value="姓"><th>姓</th></label>
<td><input type="txtbox" name="name1" value=""><br/><br/>
</td>
</tr>

<tr>
<label name="1" value="名"><th>名</th></label>
<td>
<input type="txtbox" name="name2" value=""><br/><br/>
</td>
</tr>

<tr>
<label name="2" value="性別"><th>性別</th></label>
<td>
<input type="radio" name="sei" value="男">男
<input type="radio" name="sei" value="女"> 女
<input type="radio" name="sei" value="不明"> 不明
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
<input type="checkbox" name="doko[]" value="web">web
<input type="checkbox" name="doko[]" value="チラシ">チラシ
<input type="checkbox" name="doko[]" value="知り合い">知り合い
<br/><br/>
</td>
</tr>

<tr>
<label name="7" value="質問カテゴリ"><th>質問カテゴリ</th></label>
<td>
<select name="cate">
<option value="研修について">研修について</option>
<option value="配偶について">配偶について</option>
<option value="福利厚生について">福利厚生について</option>
</select><br/><br/>
</td>
</tr>

<tr>
<label name="8" value="質問内容"><th>質問内容</th></label>
<td>
<textarea type="txtbox" name="naiyo" value="" cols="30" rows="5"></textarea><br/><br/>
</td>
</tr>

</table>
<p align="center">
    <input type="submit">
</p>
</form>
</div>
