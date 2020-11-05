<html>
<head>
    <link rel="stylesheet" href="stleforchat.css"><title>Ask your doubt</title></head>
<form method="POST">
<body>
<h1>Please ask your doubt</h1>
<input type="text" name="user" placeholder="Type your name" required class="name"><br><br>
<textarea placeholder="Type your doubt" name="text" required class="text"></textarea>
<input type="submit" name="submit" value="send">
</form>
<?php
$link=mysql_connect('localhost','root','');
if(!$link)
 die('could not perform'.mysql_error());
if(!mysql_select_db('chat'))
die(mysql_error());
$r="insert into chat(user, text) values ('$_POST[user]', '$_POST[text]')";
if (mysql_query($r))
$q=mysql_query("Select * from chat");
while($r=mysql_fetch_row($q))
echo ">$r[1]<Br> $r[0]<br><br>";
?>
</body>
</html>