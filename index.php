<?php

    include './controller/controller.php';


    $page = isset($_GET['page']) ? $_GET['page'] : 'home' ;

    switch ($page) {
        case 'login':
            DisplayLogin();
            break;
        case 'signup':
            DisplaySignup();
            break;
        case 'dashboard' :
            DisplayDashboard($username); 
            break;
        case 'home':    
        default:
            DisplayHome();
            break;
    }

?>