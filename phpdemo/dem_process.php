<?php

    if(isset($_POST['sub'])){
        $name = $_POST['uname'];
        $pswd = $_POST['password'];

        if(strlen($name) < 8){
            echo "<h1>Sorry cant auth... you....</h1>";
        }
        else{
            echo "<h1>Hello, you have been successfully authenticated....</h1>";
        }
    }

?>