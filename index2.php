<?php

print($_SERVER['PHP_SELF']);
print("<br/><br/>");
print($_SERVER['SERVER_NAME']);
print("<br/><br/>");
print($_SERVER['HTTP_HOST']);
print("<br/><br/>");
print($_SERVER['HTTP_USER_AGENT']);
print("<br/><br/>");
print($_SERVER['SCRIPT_NAME']);


foreach ($_SERVER as $key => $value) {
    print($key . "=" . $value . "<br/>");
}

