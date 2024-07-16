<?php

    if(isset($_POST["enviar"])){
        $valorPreferencia = $_POST["preferencia"];
        setcookie("preferencia", $valorPreferencia, time() + 3600, "/");
        
    }

    header("Location: index.php")
?>