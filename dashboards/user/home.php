<?php
require_once('../../headers.php');
echo "Logged into User Home";
$SessionManager->protectionUser();
$Utils->pretty_print($_SESSION);















?>