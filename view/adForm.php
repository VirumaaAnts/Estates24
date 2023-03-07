<?php
    ob_start();
?>
<div class="main_back">
    <img src="images/home_back.jpg" alt="">
</div>
<form action="addSend">
    <title>Добавить объявление</title>
    <input type="text" >
    
</form>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>