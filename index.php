<?php

require('controler/frontend/frontend.php');



try {
    if(isset($_GET['action'])) {
        

        if($_GET['action'] == 'accueil'){
            accueil();
        }

        if($_GET['action'] == 'pommes'){
            pommes();
        }

        if($_GET['action'] == 'contact'){
            contact();
        }

        if($_GET['action'] == 'moutons'){
            moutons();
        }
    }
    else {
        accueil();
    }
}
catch(Exeption $e) {
    echo 'Erreur : ' . $e->getMessage();
}