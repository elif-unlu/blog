<?php 
    ob_start();
    session_start();

    include ('db-connection.php');

    $id = $_GET['id'];

    $db->delete('blog')
            ->where('id', $id)
            ->done();

    echo '<script language="Javascript">window.location.href="blog-list.php"</script>';
?>
