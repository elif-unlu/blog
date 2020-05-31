<?php 
    ob_start();
    session_start();

    include ('db-connection.php');

    $id = $_GET['id'];

    $db->delete('admins')
            ->where('id', $id)
            ->done();

    echo '<script language="Javascript">window.location.href="admin-list.php"</script>';
?>
