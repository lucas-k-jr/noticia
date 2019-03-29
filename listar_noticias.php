<?php

    include("Revista.php");
    session_start();
    

    foreach($_SESSION["Revista"] as $i=>$r){

        echo "Revista: ".$r->get_nome();
        echo "<hr />";

        foreach($r->noticias as $j=>$n){

            echo "<b>Título:</b> ".$n->get_titulo();
            echo "<br />";
            echo "<b>Resumo:</b> ".$n->get_resumo();
            echo "<br />"; 
            echo "<b>Materia:</b> ".$n->get_materia();
            echo "<br />";
            echo "<b>Foto:</b> ".$n->get_foto();
            echo "<br />";
            echo "<hr />";
        }
        echo "<hr />";
        echo "<hr />";
    }

?>