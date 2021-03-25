<?php
if(isset($_COOKIE['username']))
{
    unset($_COOKIE['username']);
    header('Location: index.php');
}
?>
