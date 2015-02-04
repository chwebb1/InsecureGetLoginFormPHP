
<?php
session_start();

if(!isset($_SESSION['loggedin_get'])) {
   header('Location: http://thewebbster.info/exampleAdmin/form.php?error=1');
   exit();
}
?> 