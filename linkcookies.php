<?php
//setcookie berfungsi untuk menerapkan fungsi cookies
setcookie("variable_cookies","Ini adalah variable cookies", //time berfungsi untuk set waktu cookies
	time()+60);
//untuk mengecek cookies
echo "<a href=cekcookies.php> Cek Cookies</>";
?>