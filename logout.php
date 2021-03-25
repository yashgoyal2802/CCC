<?php
if(isset($_COOKIE['username']))
{
    setcookie("user", "", time() - 86411*31);
    header('Location: index.php');
}
?>
