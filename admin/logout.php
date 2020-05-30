<?php
 
    session_start();
    session_destroy();
    echo '<script language="Javascript">window.location.href="login.php"</script>';
 
?>