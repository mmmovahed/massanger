<?php
    require_once 'init.php';
?>
<?php
if (!isset($_COOKIE["Himsg"]) || empty($_COOKIE["Himsg"]))
    header("Location:login.php");
?>

<?php
require_once 'footer.php';
?>
