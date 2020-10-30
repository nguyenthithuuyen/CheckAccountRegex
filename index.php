<?php
function checkAccount($account){
    $pattern='/^[a-z0-9_]{6,}$/';
    if (preg_match($pattern,$account)){
        return "Mau account hop le";

    }else{
        return "Mau account nay khong  hop le";
    }
}
echo checkAccount('123abc_');
echo "<br>";
echo "<br>";
echo checkAccount('_abc123');
echo "<br>";
echo "<br>";
echo checkAccount('______');
echo "<br>";
echo "<br>";
echo checkAccount('123456');
echo "<br>";
echo "<br>";
echo checkAccount('abcdefg');
echo "<br>";
echo "<br>";
echo checkAccount('.@');
echo "<br>";
echo "<br>";
echo checkAccount('12345');
echo "<br>";
echo "<br>";
echo checkAccount('1234_');
echo "<br>";
echo "<br>";
echo checkAccount('abcde');