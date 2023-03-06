<?php
    ob_start();
?>
<div class='slider' show='1' scroll='1' time='1000'>
    <ul>
        <li><a href='' data-lightbox='' data-title=''><div class='img_slider' style='background-image: url();'></div></a></li>
    </ul>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>