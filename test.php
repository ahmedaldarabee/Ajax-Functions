<?php

    if(isset($_POST['username']) && isset($_POST['password'])){
        echo "Hello " . $_POST['username'] . ' welcome in my application';
        echo "your password is " . $_POST['password'];
    }else{
        echo "You have an error !";
    }
?>