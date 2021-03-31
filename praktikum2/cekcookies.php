<?php 
setcookie("variable_cookies","ini adalah variable cookies",time()+60);
echo "<a href=ekcookies.php>Cek Cookies</a>";

if (isset($variable_cookies)) {
    echo 'Variable cookiesnya "$variable_cookies" nilainya adalah' .$variable_cookies;
}else{
    echo "Variable cookies belum diterapkan";
}
