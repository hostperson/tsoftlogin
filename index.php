<?php

echo "<form method='post' action='/proje/client/login.php' name='login'>
     lütfen kullanıcı adınızı giriniz: <input type='text' name='username'><br/>
     lütfen parolanızı giriniz: <input type='password' name='password'><br/>
     <input type='submit' name='gonder' value='gönder'><br/>
     kullanıcı kaydınız yoksa <a href='/proje/client/register.php'>tıklayın</a><br/>";
?>