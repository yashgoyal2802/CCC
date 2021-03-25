<?php
if(isset($_COOKIE['username']))
{
    setcookie("username", "", time() - 86411*31);
    header('Location: index.php');
}
?>
