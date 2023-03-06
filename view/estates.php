<?php
    ob_start();
?>

<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>