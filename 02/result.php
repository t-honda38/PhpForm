<link href="contact.css" rel="stylesheet" type="text/css">


 <div id ="formWrap">
<table class ="formTable">
    <tr>
   <label name="0" value="姓"><th>姓名</th></label>
   <td><?php echo $_POST['name1']." ".$_POST['name2']."<br/>"; ?>
   </td>
   </tr>

   <tr>
   <label name="2" value="性別"><th>性別</th></label>
   <td><?php echo $_POST['sei']."<br/>";?>
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
      echo $value. "　";
   }?>
   </td>
   </tr>

   <tr>
   <label name="7" value="質問カテゴリ"><th>質問カテゴリ</th></label>
   <td><?php echo $_POST['cate']."<br/>";?>
   </td>
   </tr>

   <tr>
   <label name="8" value="質問内容"><th>質問内容</th></label>
   <td><?php echo $_POST['naiyo']."<br/>";?>
   </td>
   </tr>
</table>
</div>
