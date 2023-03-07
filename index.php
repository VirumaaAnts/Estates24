<?php
    session_start();
    include_once 'inc/database.php';
    include_once 'models/ModelEstates.php';
    include_once 'models/ModelUser.php';
    include_once 'models/ModelRegistration.php';
    include_once 'controllers/RenderController.php';
    include_once 'controllers/SendController.php';




    include 'routes/route.php';
?>