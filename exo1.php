<?php

if(isset($_GET['iteration']) && intval($_GET['iteration']) > 0){
    strip_tags($_GET['iteration']);
    for ($i = 0 ; $i < $_GET['iteration'] ; $i++){
        echo 'Hello world !<br>';
    }
}

