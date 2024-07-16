<?php

    if(isset($_POST['username'])){
        echo "<br> Hello " . $_POST['username'] . ' welcome in my application';
    }else{
        echo "<br> You have an error !";
    }
?>