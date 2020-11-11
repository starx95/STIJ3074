<?php
    if(isset($_POST['register'])){
        echo "Registered";
    } else if(isset($_POST['login'])){
        echo "Logged In";
    }
?>