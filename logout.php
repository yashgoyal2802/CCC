<html>
<?php
if(isset($_COOKIE[$username]))
{
	unset($_COOKIE['remember_user']);
    header('Location: home.html');
}
?>
</html>